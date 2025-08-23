<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Event;
use App\Models\Upload;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Notice;
use App\Models\Past;
use App\Notifications\SendEmailNotification;
use Notification;
use App\Notifications\EventStatusChanged;
use App\Notifications\EventStatusNotification;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    //
    public function table()
{
    $forms = Form::all(); // or paginate(10);
    return view('admin.table', compact('forms'));
}
public function edit($id)
{
    $form = Form::findOrFail($id);
    return view('admin.edit', compact('form'));
}
public function update(Request $request, $id)
{
    $form = Form::findOrFail($id);
    $form->update($request->all());
    return redirect()->route('table.show')->with('success', 'Form updated successfully.');
}
public function destroy($id)
{
    $form = Form::findOrFail($id);
    $form->delete();
    return redirect()->route('table.show')->with('success', 'Form deleted successfully.');
}
public function show()
    {
        $events = Event::all();
        return view('admin.showevent', compact('events'));
    }
     public function manege()
    {
        return view('admin.manege');
    }
   
public function upload(){
    return view('admin.upload');
}
public function uploadstore(Request $request)
{
    // Validation rules
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'date' => 'required|date',
        'venue' => 'required|string|max:255',
    ]);

   $imagePath = null;

    // Direct save to public/myimage
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('myimage'), $imageName);
        $imagePath = 'myimage/' . $imageName; // DB তে save হবে myimage/filename.jpg
    }

    // Create record in DB
    Upload::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,  // stored path or null
        'date' => $request->date,
        'venue' => $request->venue,
    ]);

    return back()->with('success', 'Event Created Successfully!');
}
    public function message(){
        $data=Contact::all();
        return view('admin.message',compact('data'));
    }
    public function sendmail($id){
        $data=Contact::find($id);
        return view('admin.sendmail',compact('data'));
    }
    public function mail(Request $request,$id){
        $data=Contact::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->mailBody,
            'action_text' => $request->actionText,
            'action_url' => $request->actionUrl,
            'endline' => $request->endLine,
        ];
        Notification::send($data,new SendEmailNotification($details));
        return redirect()->back();
    }
 
public function approve($id){
    $data = Event::find($id);
    $data->status = 'Approved';
    $data->save();

    $user = $data->user;
    if ($user) {
        $user->notify(new EventStatusNotification($data, 'approved'));
    }

    return redirect()->back()->with('success', 'Event approved and notification sent.');
}

public function accept($id){
    $data = Event::find($id);
    $data->status = 'Accepted';
    $data->save();

    $user = $data->user;
    if ($user) {
        $user->notify(new EventStatusNotification($data, 'accepted'));
    }

    return redirect()->back()->with('success', 'Event accepted and notification sent.');
}

public function reject($id){
    $data = Event::find($id);
    $data->status = 'Rejected';
    $data->save();

    $user = $data->user;
    if ($user) {
        $user->notify(new EventStatusNotification($data, 'rejected'));
    }

    return redirect()->back()->with('success', 'Event rejected and notification sent.');
}
public function feedshow()
    {
        $feedbacks = Feedback::all(); // Retrieve all feedback
        return view('admin.show_feedback', compact('feedbacks'));
    }
    public function notice(){
        return view('admin.notice');
    }
     public function noticestore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);

        Notice::create([
            'title' => $request->title,
            'message' => $request->message,
            'status' => 'new',
        ]);

        return redirect()->back()->with('success', 'Notification sent!');
    }
    public function control(){
        $events = Upload::all();
        return view('admin.control', compact('events'));
    }
    public function editup($id){
         $event = Upload::findOrFail($id);
        return view('admin.control_edit', compact('event'));
    }
    public function destroy2($id)
    {
        $event = Upload::findOrFail($id);
        $event->delete();

        return redirect()->route('control.show')->with('success', 'Event deleted successfully!');
    }

    public function update2(Request $request, $id)
    {
        $event = Event::findOrFail($id);

    $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
        'venue'       => 'required|string|max:255',
        'date'        => 'required|date',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $event->title       = $request->title;
    $event->description = $request->description;
    $event->venue       = $request->venue;
    $event->date        = $request->date;

    if ($request->hasFile('image')) {

        // পুরানো ইমেজ ডিলিট
        if ($event->image && file_exists(public_path($event->image))) {
            unlink(public_path($event->image));
        }

        // নতুন ইমেজ public/myimage ফোল্ডারে সেভ
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('myimage'), $imageName);

        // database এ path সংরক্ষণ
        $event->image = 'myimage/' . $imageName;
    }

    $event->save();

    return redirect()->route('control.show')->with('success', 'Event updated successfully!');
    }
   
    public function past(){
        return view('admin.past');
    }
    public function paststore(Request $request)
{
     // Validate input
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = null;

    // Direct save to public/myimage
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('myimage'), $imageName);
        $imagePath = 'myimage/' . $imageName; // DB তে save হবে myimage/filename.jpg
    }

    // Save to DB
    Past::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Event Created Successfully!');
}

    public function pastcontrol(){
        $events = Past::all();
        return view('admin.pastcontrol', compact('events'));
    }
    public function editpast($id){
         $event = Past::findOrFail($id);
        return view('admin.past_edit', compact('event'));
    }
     public function destroy3($id)
    {
        $event = Past::findOrFail($id);
        $event->delete();

        return redirect()->route('past.show')->with('success', 'Event deleted successfully!');
    }
    public function update3(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $event = Past::findOrFail($id);
    $event->title = $request->title;
    $event->description = $request->description;
    if ($request->hasFile('image')) {
    // পুরাতন ইমেজ মুছে ফেলবো
    if ($event->image && file_exists(public_path($event->image))) {
        unlink(public_path($event->image));
    }

    // নতুন ইমেজ public/myimage তে সেভ করবো
    $fileName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('myimage'), $fileName);

    // database এ path শুধু myimage/filename সেভ হবে
    $event->image = 'myimage/' . $fileName;
}
   

    $event->save();

    return redirect()->route('past.show')->with('success', 'Event updated successfully.');
}

}
