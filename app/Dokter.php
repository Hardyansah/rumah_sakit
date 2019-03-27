<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable= ['nip','nama','spesialis'];

    public static function valid() 
    { 
        return array( 'nip' => 'required|max:10', 
                      'nama' => 'required|max:200|min:2',
                      'spesialis' => 'required'                      
                    ); 
    } 
    public function pasien() 
    { 
        return $this->belongsToMany(Pasien::class); 
    }
}
