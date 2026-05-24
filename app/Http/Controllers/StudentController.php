<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\Student;
use Intervention\Image\Facades\Image;


class StudentController extends Controller
{
    public function membershipRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'roll_number' => ['required', 'integer'],
            'registration_number' => ['required', 'integer'],
            'session' => ['required', 'string', 'max:255'],
            'profile_photo' => ['required', 'image', 'max:2048'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $photo=$request->file('profile_photo');
        $photo_name=time().'.'.$photo->getClientOriginalExtension();
        // $image = Image::read($photo);
        // Resize proportionally so width is exactly 800px (prevents distortion)
        // $image->scale(width: 800); 
        // $image->cover(400,400);

        $path = $photo->storeAs('images', $photo_name, 'public');
        
        $student= new Student();
        $student->user_id = $user->id;
        $student->phone = $request->phone;
        $student->department = $request->department;
        $student->roll_number = $request->roll_number;
        $student->registration_number = $request->registration_number;
        $student->session = $request->session;
        $student->profile_photo = $path;
        $student->save();

        event(new Registered($user));

        return redirect(route('login', absolute: false))->with('success', 'Membership registration successful. Please wait for approval.You can login after approval.');
    }
}
