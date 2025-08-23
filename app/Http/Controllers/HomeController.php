<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\User;
use App\Models\Form;
use App\Models\Event;
use App\Models\Upload;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Notice;
use App\Models\Past;
class HomeController extends Controller
{
    //
    public function index(){
        $totalEvents = Event::count();
        $user= User::where('usertype','user')->get()->count();
        $accepte=Event::where('status','accepted')->get()->count();
        $attende=Form::count();
        return view('admin.index',  compact('totalEvents','user','attende','accepte'));
    }
     public function home(){
        return view('home.index');
    }
    public function desh(){
        $pasts = \App\Models\Past::all();
        $upcomes = \App\Models\Upload::all();
        return view('dashboard', compact('pasts', 'upcomes'));
    }
    public function event(){
        return view('home.eventpage');
    }
     public function page(){
        $pasts = \App\Models\Past::all();
        $upcomes = \App\Models\Upload::all();
        return view('home.event', compact('pasts', 'upcomes'));
    }
    public function form(){
        return view('home.form');
    }
     public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'contact_no' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'id_number' => 'required|string|max:50',
        ]);

        Form::create([
            'name' => $request->full_name,
            'phone' => $request->contact_no,
            'address' => $request->address,
            'idnumber' => $request->id_number,
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }
    public function create()
    {
        return view('home.event_create');
    }
    public function eventstore(Request $request)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'venue' => 'required|string|max:255',
            'volunteer_list' => 'nullable|file|mimes:pdf|max:2048',
            'sponsor_list' => 'nullable|file|mimes:pdf|max:2048',
            'other_details' => 'nullable|string',
        ]);

        $event = new Event();
        $event->event_name = $validatedData['event_name'];
        $event->event_date = $validatedData['event_date'];
        $event->venue = $validatedData['venue'];
        $event->other_details = $validatedData['other_details'];

        if ($request->hasFile('volunteer_list')) {
            $volunteerPath = $request->file('volunteer_list')->store('volunteers', 'public');
            $event->volunteer_list = $volunteerPath;
        }
        if ($request->hasFile('sponsor_list')) {
            $sponsorPath = $request->file('sponsor_list')->store('sponsors', 'public');
            $event->sponsor_list = $sponsorPath;
        }

        $event->save();

        return redirect()->route('events.create')->with('success', 'Event request submitted successfully!');
    }
    public function uploadshow()
{
     
        $pasts = \App\Models\Past::all();
        return view('home.show', compact( 'pasts'));
}
public function contact(){
    return view('home.contact');
}
public function contactstore(Request $request){
    $contact=new Contact;
    $contact->name=$request->name;
    $contact->email=$request->email;
    $contact->subject=$request->subject;
    $contact->message=$request->message;
    $contact->save();
    return redirect()->back();

}
public function feed(){
    return view('home.feedback');
}
public function feedstore(Request $request)
    {
        $validated = $request->validate([
            'satisfaction' => 'required|integer|between:1,5',
            'comments' => 'nullable|string|max:1000',
        ]);

        // Here you can save to database (e.g., using a Feedback model)
        // \App\Models\Feedback::create($validated);
        $data=new Feedback;
        $data->satisfaction=$request->satisfaction;
        $data->comments=$request->comments;
        $data->save();
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
    public function about(){
      return view('home.about');
    }
    public function noticeshow(){
         $notifications = Notice::orderBy('created_at', 'desc')->get();
            return view('home.noticeshow', compact('notifications'));
    }
    public function faq(){
        return view('home.faq');
    }
     public function weather(){
        return view('home.weather');
    }
     public function getWeather(Request $request)
    {
        $location = $request->query('location');
        $apiKey = "b35383f99b7249348d724057250107";
        $url = "http://api.weatherapi.com/v1/current.json?key=$apiKey&q=$location&aqi=yes";

        $response = Http::get($url);

        if ($response->successful() && isset($response['current'])) {
            $data = $response->json();

            return view('home.result', [
                'show' => true,
                'error' => false,
                'tempC' => $data['current']['temp_c'],
                'condition' => $data['current']['condition']['text'],
                'icon' => $data['current']['condition']['icon'],
                'city' => $data['location']['name'],
                'country' => $data['location']['country']
            ]);
        } else {
            return view('home.result', [
                'show' => false,
                'error' => true
            ]);
        }
    }
     public function pastshow()
{
    $pasts = \App\Models\Past::all();
    return view('home.pastshow', compact('pasts'));
}
public function upcome(){
     $upcomes = \App\Models\Upload::all();
    return view('home.upcome', compact('upcomes'));
}

}
