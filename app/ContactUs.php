<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'contact_us';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'alamat_contact_us',
        'telepon_contact_us',
        'email_contact_us',
    ];
}
