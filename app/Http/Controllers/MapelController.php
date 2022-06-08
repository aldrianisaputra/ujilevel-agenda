<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){    
        return view('dashboard');
    }
    public function tampilanmapel(){
        $data = mapel::all();
        return view('tampilmapel', compact('data'));
    }
    public function create(){
        return view('tambahmapel');
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

    public function insertdatamapel(Request $request){
        // dd($request->all());
        mapel::create($request->all());
        return redirect()->route('tampilanmapel');
    }

    public function tampilkandatamapel($id)
    {
        $data = mapel::find($id);
        // dd($data); 
        return view('editdatamapel', compact('data'));
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
    public function updatedatamapel(Request $request, $id){
        $data = mapel::find($id);
        $data->update($request->all());
        return redirect()->route('tampilanmapel');
    }
    public function deletedatamapel($id)
    {
        $data = mapel::find($id);
        $data->delete();
        return redirect()->route('tampilanmapel');
    }
}
