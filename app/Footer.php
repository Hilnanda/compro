<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'footer';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'title_footer',
        'image_footer',
        'desc_footer',
    ];
}
