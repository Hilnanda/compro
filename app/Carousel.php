<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'carousel';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'image_carousel',
        'title_carousel',
        'desc_carousel',
        'text_title_carousel',
    ];
}
