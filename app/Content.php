<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'main_content_one';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'title_main_one',
        'text_main_one',
        'image_main_one',
    ];
}
