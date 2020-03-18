<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = 'film';
    protected $fillable = ['kode_film', 'judul_film', 'genre_film', 'tahun', 'negara', 'harga', 'status', 'picture'];

    public function getPicture()
    {
        if(!$this->picture){
            return asset('images/default.png');
        }
        return asset('images/'.$this->picture);
    }
}
