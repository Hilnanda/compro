<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'banner';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'banner_image',
        'banner_text1',
        'banner_text2',
        'banner_text3',
        'banner_text4',
        'banner_text5',
    ];
}
