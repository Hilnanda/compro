<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'about_us';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'image_about',
        'desc_about',
    ];
}
