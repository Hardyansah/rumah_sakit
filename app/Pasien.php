<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable= ['nik','nama','alamat','tgl_lahir','file'];

    public static function valid() 
    { 
        return array( 'nik' => 'required|max:15', 
                      'nama' => 'required|max:200|min:2',
                      'alamat' => 'required',
                      'tgl_lahir' => 'required',
                      'file'=> 'required|image|mimes:jpg,jpeg,png|min:1|max:10000'
                      
                    ); 
    } 
    public function dokter()
    {
        return $this->belongsToMany(Dokter::class);
    }
}
