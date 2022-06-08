<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){    
        return view('dashboard');
    }
    public function tampilankelas(){
        $data = kelas::all();
        return view('tampilkelas', compact('data'));
    }
    public function create(){
        return view('tambahkelas');
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

    public function insertdatakelas(Request $request){
        // dd($request->all());
        kelas::create($request->all());
        return redirect()->route('tampilankelas');
    }

    public function tampilkelas($id)
    {
        $data = kelas::find($id);
        // dd($data); 
        return view('.editdatakelas', compact('data'));
    }

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
    public function updatedatakelas(Request $request, $id){
        $data = kelas::find($id);
        $data->update($request->all());
        return redirect()->route('tampilankelas');
    }
    public function deletedatakelas($id)
    {
        $data = kelas::find($id);
        $data->delete();
        return redirect()->route('tampilankelas');
    }
}
