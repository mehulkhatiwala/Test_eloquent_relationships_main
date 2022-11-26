<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function __construct()
    {
        // dd('test');
    }

    public function index()
    {   
        // where(($gender == 'Male' and $age >= 18) or ($gender == 'Female' and $age >= 65))
        $users = User::with('tasks','comments')
                ->where(function ($query) { 
                    $query->where('gender' , 'Male')->where('age' ,'>=', 25);
                })
                ->orWhere(function ($query) {
                    $query->where('gender' , 'Female')->where('age' ,'>=', 18);
                })
                ->get()
                ->sortBy('full_name');

        $users = User::with('tasks','comments')->get();
        // dd($users->toArray());
        return view('users.index', compact('users'));
    }

    // public function show(User $user)
    // {
    //     return view('users.show', compact('user'));
    // }

    public function create()
    {
        // dd('insert');
        return view('users.field');
    }

    public function store(Request $request)
    {
        // dd($request->toArray());
        // dd($request->first_name);
        $input = $request->all();

        // $validator = $request->validate([
        //     'first_name' => 'required|min:3',
        //     'age' => 'required'
        // ],[
        //     'first_name.required' => 'Please enter your name',
        //     'first_name.min' => 'Name must have 3 char.',
        //     'age.required' => 'Please enter your age.'
        // ]);
        // dd("sdd");
        $validator = Validator::make($request->all(), [
            'first_name' => 'required', // |min:3
            'age' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required',
            'profile' => 'required'

        ],[
            'first_name.required' => 'Please enter your name',
            'first_name.min' => 'Server side validation - Name must have 3 char.',
            'age.required' => 'Server side validation - Please enter your age.',
            'gender.required' => 'Please check gender.',
            'email.required' => 'Please enter email.',
            'password.required' => 'Please enter password.',
            'profile.required' => 'Please select profile.',
        ]);
        // dd($validator->fails());
        // Return your customized error message
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->getMessageBag()->toArray()]);
        }else {
            // dd($input);
            $input['name'] = $input['first_name'];
            User::create($input);

            return response()->json(['success'=>'Added new records.']);
        }

    }

    public function edit(User $user, Request $request)
    {
        return view('users.field', compact('user'));
        // dd($user->toArray());
    }

    public function update (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required', // |min:3
            'age' => 'required',
            'gender' => 'required',
            'email' => 'required',
        ],[
            'first_name.required' => 'Please enter your name',
            'first_name.min' => 'Server side validation - Name must have 3 char.',
            'age.required' => 'Server side validation - Please enter your age.',
            'gender.required' => 'Please check gender.',
            'email.required' => 'Please enter email.'
        ]);
        // dd($validator->fails());
        // Return your customized error message
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->getMessageBag()->toArray()]);
        }else {
            // dd($input);
            $request['name'] = $request['first_name'];
            $image_name = '';
            if($request->hasfile('profile')){
                unlink(public_path('images/profile/'.$request->old_image_name));
                $image_name = $request->profile;
            }
            
            $update_data = [
                'name' => $request->name,
                'email' => $request->email,
                'gender' => $request->gender,
                'age' => $request->age,
                'profile' => $image_name
            ];
            User::find($request->user_id)->update($update_data);
            // dd($request->toArray());
            return response()->json(['success'=>'Updated Data Successfully.']);
        }
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        
        return redirect()->back()->withSuccess(__('Data deleted successfully.'));
    }

}
