<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'copyright';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'title_copyright',
    ];
}
