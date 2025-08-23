<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

   public function update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'bio' => 'nullable|string|max:1000',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Handle image upload
    if ($request->hasFile('profile_image')) {
        $file = $request->file('profile_image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/profile'), $filename);
        $user->profile_image = 'uploads/profile/' . $filename;
    }

    $user->name = $request->name;
    $user->bio = $request->bio;
    $user->save();

    return redirect()->route('profile.show')->with('success', 'Profile updated!');
}

}
