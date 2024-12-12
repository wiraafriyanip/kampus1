<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    //
    public function index()
    {
        $dosens=Dosen::latest()->paginate(10);
        return view('dosen.index', compact('dosens'));
    }
    public function create()
    {
        return view('dosen.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nidn'=>'required',
            'nama'=>'required',
            
            'alamat'=>'required'
        ]);
        DB::table('dosens')->insert([
            'nidn'=>$request->nidn,
            'nama'=>$request->nama,
           
            'alamat'=>$request->alamat
        ]);
        if(DB::table('dosens')){
            return redirect()->route('dosen.index')->with(['success'=>'Data berhasil disimpan']);
        }else{
            return redirect()->route('dosen.index')->with(['error'=>'Data gagal disimpan']);
        }
    }
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);

        $dosen->delete();
        if($dosen){
            //redirect dengan pesan sukses
            return redirect()->route('dosen.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('dosen.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
    public function update(Request $request, Dosen $dosen)
    {
    $this->validate($request, [
        
            'nidn'=>'required',
            'nama'=>'required',
            
            'alamat'=>'required'
        
    ]);
    //get data dosen by ID
 
    $dosen=dosen::findOrFail($dosen->id); 
    $dosen->update([
        'nidn'=>$request->nidn,
            'nama'=>$request->nama,
           
            'alamat'=>$request->alamat
       
    ]); 
    if($dosen){
    //redirect dengan pesan sukses
    return redirect()->route('dosen.index')->with(['success'=>'Data berhasil 
    disimpan']);
    }else{
        return redirect()->route('dosen.index')->with(['error'=>'Data gagal disimpan']);
    }
    }


}
