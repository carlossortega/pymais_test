<?php

namespace App\Http\Controllers\pymais\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class saveFileController extends Controller
{
    public function saveFileInstructor(Request $request){
        //validate data before saving
        $request->validate([
            'full_name' => 'required',
            'mail-email' => 'required|email',
            'phone_number' => 'required',
            'country' => 'required',
            'city' => 'required',
            'professional_title' => 'required',
            'years_experience' => 'required',
            'was_mentor' => 'required',
            'detail_programs' => 'nullable',
            'linkedin_handle' => 'required',
            'area_mentorship' => 'required',
            'specify_other_area' => 'nullable',
            'hours_available_week' => 'required',
            'in_person_virtual' => 'required',
        ]);

        //get data from the form
        $full_name = $request->full_name;
        $email = $request->mail-email;
        $phone_number = $request->phone_number;
        $country = $request->country;
        $city = $request->city;
        $professional_title = $request->professional_title;
        $years_experience = $request->years_experience;
        $was_mentor = $request->was_mentor;
        $detail_programs = $request->detail_programs;
        $linkedin_handle = $request->linkedin_handle;
        $area_mentorship = $request->area_mentorship;
        $specify_other_area = $request->specify_other_area;
        $hours_available_week = $request->hours_available_week;
        $in_person_virtual = $request->in_person_virtual;

        //create content for the file
        $content = "Full Name: $full_name\nEmail: $email\nPhone Number: $phone_number\nCountry: $country\nCity: $city\nProfessional Title: $professional_title\nYears of Experience: $years_experience\nWas a Mentor: $was_mentor\nDetail Programs: $detail_programs\nLinkedIn Handle: $linkedin_handle\nArea of Mentorship: $area_mentorship\nSpecify Other Area: $specify_other_area\nHours Available per Week: $hours_available_week\nIn Person or Virtual: $in_person_virtual\n";

        //create a unique file name
        $filename = 'mentorship_application_' . now()->format('Y-m-d_H-i-s') . '.txt';

        //save the file on local storage
        Storage::disk('local')->put('mentorship_applications/' . $filename, $content);

        //return a success message
        return back()->with('success', 'Your application has been submitted successfully. We will get back to you soon.');
    }

    public function saveFileSME(Request $request){
        $request->validate([
            'contact_name' => 'required',
            'position' => 'required',
            'phone' => 'required',
        ]);
    }
}
