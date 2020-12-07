<?php

namespace App\Http\Controllers\site\offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teklif;
use Illuminate\Support\Facades\Log;
use Mail;

class indexController extends Controller
{
    public function index()
    {
        return view('site.offer.index');
    }
    public function teklif(Request $request)
    {
        $request->validate(['name'=>'required','email'=>'required','telefon'=>'required','kampadi'=>'required','kangrubu'=>'required','mesaj'=>'required']);
        $all = $request->except('_token');
        $insert = Teklif::create($all);
        if ($insert) {
            return redirect()->back()->with('swal','Teklifinizi aldık en yakın zamanda irtibata geçeceğiz.');
        } else {
            return redirect()->back()->with('swal','Malesef eklenemedi.');
        }
        
        
         
        
    }
}
