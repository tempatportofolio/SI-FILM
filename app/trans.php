<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trans extends Model
{
    protected $table = 'trans';
    protected $fillable = ['nama','email', 'no_telp' , 'kode_film', 'tgl_pinjam', 'tgl_kembali'];

}
