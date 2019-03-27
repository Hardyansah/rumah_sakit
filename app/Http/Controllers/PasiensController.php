<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use Session;
class PasiensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all(); 
        //dd($pasiens);
        return view('pasiens.index')->with('pasiens', $pasiens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasiens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasiens = new Pasien;
     
        // upload the image //
        $file = $request->file('file');
        //dd($file);
        $destination_path = 'uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        
        // save image data into database //
        $pasiens->file = $destination_path . $filename;
        $pasiens->nik = $request->input('nik');
        $pasiens->nama = $request->input('nama');
        $pasiens->alamat = $request->input('alamat');
        $pasiens->tgl_lahir = $request->input('tgl_lahir');
        $pasiens->save();


     Session::flash("notice", "Pasien success created"); 
     return redirect()->route("pasiens.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasiens = Pasien::find($id); 
        
        return view('pasiens.show') ->with('pasien', $pasiens);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::find($id); 
        return view('pasiens.edit')->with('pasien', $pasien);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pasiens = Pasien::find($id);

      // if user choose a file, replace the old one //
      if( $request->hasFile('file') ){
           $file = $request->file('file');
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $pasiens->file = $destination_path . $filename;
      }
        
            // replace old data with new data from the submitted form //
            $pasiens->nik = $request->input('nik');
            $pasiens->nama = $request->input('nama');
            $pasiens->alamat = $request->input('alamat');
            $pasiens->tgl_lahir = $request->input('tgl_lahir');
            $pasiens->save();
            Session::flash("notice", "Pasien success updated"); 
            return redirect()->route("pasiens.index", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::destroy($id); 
        Session::flash("notice", "Pasien success deleted"); 
        return redirect()->route("pasiens.index");
    }
}
