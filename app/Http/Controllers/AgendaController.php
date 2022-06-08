<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use App\Models\Guru;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){    
        return view('dashboard');
    }
    public function tampilanagenda(){
        $data = agenda::all();
        return view('tampilagenda', compact('data'));
    }
    public function create(){
        return view('tambahagenda');
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

    public function insertdataagenda(Request $request){
        // dd($request->all());
        // agenda::create($request->all());
        // $data = agenda::all();
        $data = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi =$request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tampilanagenda');
    }

    public function tampilkandataagenda($id)
    {
        $data = agenda::find($id);
        // dd($data); 
        return view('editdataagenda', compact('data'));
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
    public function updatedataagenda(Request $request, $id){
        $data = agenda::find($id);
        $data->update($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi =$request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tampilanagenda');
    }
    public function deletedataagenda($id)
    {
        $data = agenda::find($id);
        $data->delete();
        return redirect()->route('tampilanagenda');
    }
}
