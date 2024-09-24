<?php

namespace App\Http\Controllers\pymais\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'required', //
            'position' => 'required',
            'company_phone' => 'required',
            'cellphone' => 'required',
            'email' => 'required|email', //
            'comercial_name' => 'nullable',
            'fiscal_name' => 'nullable',
            'RFC' => 'nullable',
            'razon_social' => 'nullable',//
            'fiscal_name_usa' => 'nullable',
            'naics' => 'nullable',
            'fein' => 'nullable',
            'tax_id' => 'nullable',
            'address' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'website' => 'nullable',
            'products_services' => 'nullable',
            'employees' => 'nullable',
            'employees_mexico' => 'nullable',
            'employees_usa' => 'nullable',
            'operation_start_date' => 'nullable',
            'annual_sales' => 'nullable',
            'certifications' => 'nullable',
            'customers' => 'nullable',
            'is_supplier' => 'nullable',
            'companies_supply' => 'nullable',
            'has_participated' => 'nullable',
            'password' => 'required', //
        ]);

        $name = $request->name;
        $position = $request->position;
        $company_phone = $request->company_phone;
        $cellphone = $request->cellphone;
        $email = $request->email;
        $comercial_name = $request->comercial_name;
        $fiscal_name = $request->fiscal_name;
        $RFC = $request->RFC;
        $razon_social = $request->razon_social;
        $fiscal_name_usa = $request->fiscal_name_usa;
        $naics = $request->naics;
        $fein = $request->fein;
        $tax_id = $request->tax_id;
        $address = $request->address;
        $facebook = $request->facebook;
        $linkedin = $request->linkedin;
        $instagram = $request->instagram;
        $website = $request->website;
        $products_services = $request->products_services;
        $employees = $request->employees;
        $employees_mexico = $request->employees_mexico;
        $employees_usa = $request->employees_usa;
        $operation_start_date = $request->operation_start_date;
        $annual_sales = $request->annual_sales;
        $certifications = $request->certifications;
        $customers = $request->customers;
        $is_supplier = $request->is_supplier;
        $companies_supply = $request->companies_supply;
        $has_participated = $request->has_participated;
        $password = $request->password;

        $content = "Name: $name\nPosition: $position\nCompany Phone: $company_phone\nCellphone: $cellphone\nEmail: $email\nComercial Name: $comercial_name\nFiscal Name: $fiscal_name\nRFC: $RFC\nRazon Social: $razon_social\nFiscal Name USA: $fiscal_name_usa\nNAICS: $naics\nFEIN: $fein\nTax ID: $tax_id\nAddress: $address\nFacebook: $facebook\nLinkedIn: $linkedin\nInstagram: $instagram\nWebsite: $website\nProducts and Services: $products_services\nEmployees: $employees\nEmployees Mexico: $employees_mexico\nEmployees USA: $employees_usa\nOperation Start Date: $operation_start_date\nAnnual Sales: $annual_sales\nCertifications: $certifications\nCustomers: $customers\nIs Supplier: $is_supplier\nCompanies Supply: $companies_supply\nHas Participated: $has_participated\n Password: $password\n";

        $filename = 'sme_application_' . now()->format('Y-m-d_H-i-s') . '.txt';

        Storage::disk('local')->put('sme_applications/' . $filename, $content);

        // Registrar al nuevo usuario en la plataforma
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 'student',
        ]);

        return redirect()->route('my.profile')->with('success', 'Your application has been submitted successfully.');
    }
}
