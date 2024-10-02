<?php

namespace App\Http\Controllers\pymais\frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\EmailVerificationPromptController;

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
            'professional_title' => 'nullable',
            'years_experience' => 'required',
            'was_mentor' => 'required',
            'detail_programs' => 'nullable',
            'linkedin_handle' => 'required',
            'area_mentorship' => 'required',
            'specify_other_area' => 'nullable',
            'hours_available_week' => 'required',
            'in_person_virtual' => 'required',
            'password' => 'required',
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
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'contact_position' => 'required',
            'company_name' => 'required',
            'rfc' => 'required',
            'trade_name' => 'required',
            'contact_mail' => 'required|email',
            'company_phone' => 'required',
            'naics_code' => 'required',
            'products_services' => 'required',
            'number_employees' => 'required',
            'seniority' => 'required',
            'company_linkedin' => 'required',
            'social_networking' => 'required',
            'website' => 'required',
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:users,email',
            'user_phone' => 'required',
            'user_linkedin' => 'nullable',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $contact_name = $request->contact_name;
        $contact_email = $request->contact_email;
        $contact_phone = $request->contact_phone;
        $contact_position = $request->contact_position;
        $company_name = $request->company_name;
        $rfc = $request->rfc;
        $trade_name = $request->trade_name;
        $contact_mail = $request->contact_mail;
        $company_phone = $request->company_phone;
        $naics_code = $request->naics_code;
        $products_services = $request->products_services;
        $number_employees = $request->number_employees;
        $seniority = $request->seniority;
        $company_linkedin = $request->company_linkedin;
        $social_networking = $request->social_networking;
        $website = $request->website;
        $name = $request->name;
        $position = $request->position;;
        $email = $request->email;;
        $user_phone = $request->user_phone;
        $user_linkedin = $request->user_linkedin;
        $password = $request->password;

        $content = "Contact Name: $contact_name\nContact Email: $contact_email\nContact Phone: $contact_phone\nContact Position: $contact_position\nCompany Name: $company_name\nRFC: $rfc\nTrade Name: $trade_name\nCompany Email: $contact_email\nCompany Phone: $company_phone\nNAICS: $naics_code\nProducts and/or Services: $products_services\nNumber Employees: $number_employees\n Seniority: $seniority\n Company Linkedin: $company_linkedin\nSocial Networking: $social_networking\nWebsite: $website\nName: $name\nPosition: $position\nEmail: $email\nPhone: $user_phone\nLinkedin: $user_linkedin\nPassword: $password";
        
        $filename = 'sme_application_' . now()->format('Y-m-d_H-i-s') . '.txt';

        Storage::disk('local')->put('sme_applications/' . $filename, $content);

        // Registrar compañia en la plataforma
        $company = Company::create([
            'company_name' => $company_name,
            'rfc' => $rfc,
            'trade_name' => $trade_name,
            'company_email' => $contact_mail,
            'phone' => $company_phone,
            'naics_code' => $naics_code,
            'products_services' => $products_services,
            'number_employees' => $number_employees,
            'company_seniority' => $seniority,
            'contact_name' => $contact_name,
            'contact_email' => $contact_email,
            'contact_phone' => $contact_phone,
            'contact_position' => $contact_position,
            'company_linkedin' => $company_linkedin,
            'company_social_net' => $social_networking,
            'company_website' => $website,
        ]);

        $company_id = $company->id;

        // Registrar al nuevo usuario en la plataforma en relación a la compañia
        $user = User::create([
            'role' => 'student',
            'email' => $email,
            'status' => 1,
            'name' => $name,
            'phone' => $user_phone,
            'linkedin' => $user_linkedin,
            'password' => Hash::make($password),
            'position' => $position,
            'company_id' => $company_id,
        ]);

        // Auth::login($user);

        return redirect()->route('login')->with('success', 'You have registered successfully, now please log in with your user data.');
    }
}
