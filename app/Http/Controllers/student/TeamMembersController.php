<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Mail\InviteMember;
use App\Models\Category;
use App\Models\Team_members;
use App\Models\User;
use Google\Service\CloudSearch\Id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TeamMembersController extends Controller
{
    public function index()
    {
        $page_data['members'] = Team_members::join('users', 'team_members.member_user_id', 'users.id')->select('users.*')
            ->where('team_members.main_user_id', Auth::user()->id)->get();
        
        return view('frontend.default.student.team_members.index', $page_data);
    }


    public function create()
    {
        return view('frontend.default.student.team_members.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'last_name' => 'required|min:5',
            'position' => 'required|min:6',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|size:10',
            'linkedin' => 'required',
        ]);

        $name = $request->name;
        $last_name = $request->last_name;
        $position = $request->position;
        $email = $request->email;
        $phone = $request->phone;
        $linkedin = $request->linkedin;

        $user_id = Auth::user()->id;

        $user = User::create([
            'role' => 'member',
            'name' => $name,
            'last_name' => $last_name,
            'position' => $position,
            'email' => $email,
            'phone' => $phone,
            'linkedin_profile' => $linkedin,
            'status' => 1,
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);

        $member = Team_members::create([
            'main_user_id' => $user_id,
            'member_user_id' => $user->id
        ]);

        Mail::to($user->email)->send(new InviteMember($user));


        return redirect()->route('team.members')->with('success', 'Participant added successfully.');
    }


    public function edit($id)
    {
        $page_data['member'] = User::findOrFail($id);
        return view('frontend.default.student.team_members.edit', $page_data);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5',
            'last_name' => 'required|min:5',
            'position' => 'required|min:6',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|size:10',
            'linkedin' => 'required',
        ]);

        $member = User::findOrFail($id);
        $member->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'email' => $request->email,
            'phone' => $request->phone,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('team.members')->with('success', 'Participant updated successfully.');
    }
    
    public function delete($id)
    {
        $member = User::where('id', $id);
        $member->delete();

        return redirect()->route('team.members')->with('success', 'Participant deleted successfully.');
    }


    public function showSetPassword($id)
    {
        return view('auth.set-password', ['id' => $id]);
    }

    public function setPassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $member = Team_members::findOrFail($id);
        $member->password = bcrypt($request->password);
        $member->save();

        return redirect()->route('login')->with('success', 'Password set successfully. You can now log in.');
    }
    
}
