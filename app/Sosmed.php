<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'sosmed';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'username_medsos',
        'nama_medsos',
        'url_medsos',
        'icon_medsos',
    ];
}
