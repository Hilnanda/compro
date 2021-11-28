<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'message';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'nama_message',
        'email_message',
        'text_message',
    ];
}
