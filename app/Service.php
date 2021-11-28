<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'service';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'desc_service'
    ];
}
