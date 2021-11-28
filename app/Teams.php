<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'main_content_two';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'title_main_two',
        'text_main_two',
        'desc_main_two',
        'image_main_two',
    ];
}
