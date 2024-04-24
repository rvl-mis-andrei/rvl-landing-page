<?php

namespace App\Models\CustomerRequest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'contact_us';

    protected $fillable = [
        'device_details',
        'subject',
        'name',
        'email',
        'message',
        'status',
        'ip_address',
    ];

    protected $hidden = ['id'];

    public function setSubjectAttribute($v)
    {
        $this->attributes['subject'] = ucwords(strtolower($v));
    }

    public function setNameAttribute($x)
    {
        $this->attributes['name'] = ucwords(strtolower($x));
    }

}
