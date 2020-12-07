<?php

namespace App\Http\Controllers\admin\teklif;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teklif;

class indexController extends Controller
{
    public function index()
    {
        $data = Teklif::all();       
        return view('admin.teklif.index',['data'=>$data]);
    }
    
   
    public function delete($id)
    {
        
         Teklif::where('id','=',$id)->delete();
        return redirect()->back();
    }
}


