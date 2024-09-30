<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';

    protected $fillable = [
        'company_name',
        'rfc',
        'trade_name',
        'company_email',
        'phone',
        'naics_code',
        'products_services',
        'number_employees',
        'company_seniority',
        'contact_name',
        'contact_email',
        'contact_phone',
        'contact_position',
        'company_linkedin',
        'company_social_net',
        'company_website',
    ];
}
