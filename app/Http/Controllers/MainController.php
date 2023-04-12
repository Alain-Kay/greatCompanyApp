<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OffresDemploies;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;

class MainController extends Controller
{
    public function home(): View{
        return view('home');
    }

    public function offres(){
        $offres = OffresDemploies::all();
        return view('offres', ['offres' => $offres]);
    
    }

    public function about(): View{
        return view('about');
    }

    public function contact(): View{
        return view('contact');
    }

    public function services(): View{
        return view('services');
    }

    public function show(OffresDemploies $offre): View 
    {
        
        return view('offre', [
            'offre' => $offre
        ]);
    }

}
