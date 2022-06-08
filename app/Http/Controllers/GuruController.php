<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){    
        return view('dashboard');
    }
    public function tampilan(){
        $data = Guru::all();
        return view('tampilguru', compact('data'));
    }
    public function create(){
        return view('tambahguru');
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

    public function insertdataguru(Request $request){
        // dd($request->all());
        Guru::create($request->all());
        return redirect()->route('tampilan');
    }

    public function tampildata($id)
    {
        $data = Guru::find($id);
        // dd($data); 
        return view('editdataguru', compact('data'));
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
    public function updatedataguru(Request $request, $id){
        $data = Guru::find($id);
        $data->update($request->all());
        return redirect()->route('tampilan');
    }
    public function deletedataguru($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('tampilan');
    }
}
    
