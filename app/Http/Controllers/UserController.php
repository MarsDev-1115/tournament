<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Teams;
use Auth;

class UserController extends Controller
{
    /* Render Login Page */
    public function login()
    {
        // $title = Lang::get('title.login');
        return view('frontend.auth.login')->withTitle('Log In');
    }

    /* Ajax Login Function */
    public function login_submit(Request $request)
    {
        if(!empty($request->email) && !empty($request->password))
        {
            $email = User::where('email', $request->email)->first();

            if(!empty($email))
            {
//                 $status = User::where(['email' => $request->email, 'status' => 'active'])->first();

//                 if(!empty($status))
//                 {
                    if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password]))
                    {

                        // if($request->redirect_url) {
                        //     return redirect($request->redirect_url);
                        // } else {
                        //     return redirect()->intended(app()->getLocale());
                        // }

                        $res = array (
                            'status' => 'success',
                            'message' => 'Successful login!'
                        );
                    } else {
                        // Password incorrect
                        $res = array (
                            'status' => 'error',
                            'message' => "Password incorrect!"
                        );
                    }
//                 } else {
//                     $res = array (
//                         'status' => 'error',
//                         'message' => Lang::get('message.response.inactive_user')
//                     );
//                 }
            } else {
                // In case of user don't exsit
                $res = array (
                    'status' => 'error',
                    'message' => "Email doesn't exist!"
                );
            }
        } else {
            // In case of missing email or password fields
            $res = array (
                'status' => 'error',
                'message' => 'Please enter Email $ Password!'
            );
        }
        return response()->json($res);
    }

    /* Register Page */
    public function register()
    {
        return view('frontend.auth.register')->withTitle('Sign Up');
    }

    /* Ajax Register Function */
    public function register_submit(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'string|required|unique:users,email',
            'password' => 'required|min:8',
        );

        // Add User Validation Custom Names
        $niceNames = array(
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        );

        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($niceNames);

        if ($validator->fails())
        {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);
        }
        else
        {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password]))
            {
                $res = array(
                    'status' => 'success',
                    'message' => 'User created successfully.'
                );
                return response()->json($res);
            } else {
                $res = array(
                    'status' => 'success',
                    'message' => 'User not created.'
                );
                return response()->json($res);
            }

        }
    }
    
    public function logout(Request $request) {
        return redirect('login')->with(Auth::logout());
    }
    
    public function profile(Request $request) {
        $user = Auth::user();
        $user_data = User::with('teams')->find($user->id);
        return view('frontend.auth.profile')->withTitle('My Account')->with('user', $user_data);
    }
    
    public function profile_edit(Request $request) {
        $user = Auth::user();
        $user_data = User::with('teams')->find($user->id);
        return view('frontend.auth.profile_edit')->withTitle('My Account')->with('user', $user_data);
    }
    
    public function profile_update(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'phone2' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
        ],[
            'phone.required'=> 'Phone Number (Main) is Required',
            'phone2.required'=> 'Phone Number (Additional) is Required',
        ]);
        
        if ($validator->fails()) {
            return redirect('user-profile')
            ->withErrors($validator)
            ->withInput();
        }
        
        $record= User::find(Auth::id());
        $record->name = $request->name;
        $record->email = $request->email;
        $record->phone = $request->phone;
        $record->phone2 = $request->phone2;
        $record->website = $request->website;
        $record->facebook = $request->facebook;
        $record->instagram = $request->instagram;
        
        if(!empty($request->current_password) && !empty($request->new_password)){
            if (Hash::check($request->current_password, $user->password)) {
                $record->password = Hash::make($request->new_password);
            }
        }
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('user-img'), $fileName);
            $record->image = $fileName;
        }
        
        $record->save();
        
        return back()->with('success', 'User updated Successfully!');
    }

    
}
