<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use App\Models\Guru;
use Illuminate\Http\Request;

class GurutampilController extends Controller
{
    public function index(){    
        return view('dashboard');
    }
    public function gurutampil(){
        $data = agenda::all();
        return view('guru', compact('data'));
    }
    public function create(){
        return view('guru');
    }
    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    //         'username'=>'required',
    //         'password'=>'required',
    //         'namaguru'=>'required',
    //         'nik'=>'required',
    //         'matapelajaran'=>'required',
    //     ]);

    //     guru::create($request->all());

    //     return redirect()->route('guru');
    // }

    public function insertdataguruview(Request $request){
        // dd($request->all());
        // agenda::create($request->all());
        // $data = agenda::all();
        $data = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi =$request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('gurutampil');
    }

    // public function tampildata($id)
    // {
    //     $data = Guru::find($id);
    //     // dd($data); 
    //     return view('.editdataguru', compact('data'));
    // }

    // public function update(Request $request,$id)
    // {
    //     $data = Guru::find($id);
    //     $data->update($request->all());
    //     return redirect()->route('guru');
    // }
    // public function destroy($id){
    //     $data = Guru::find($id);
    //     $data->delete();
    //     return redirect()->route('guru');
    // }
    // public function updatedataguru(Request $request, $id){
    //     $data = Guru::find($id);
    //     $data->update($request->all());
    //     return redirect()->route('tampilan');
    // }
    // public function deletedataguru($id)
    // {
    //     $data = Guru::find($id);
    //     $data->delete();
    //     return redirect()->route('tampilan');
    // }
}
