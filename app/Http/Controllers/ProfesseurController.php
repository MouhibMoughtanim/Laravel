<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use  App\Models\Professeurs;
use Illuminate\Support\Facades\Auth;

class ProfesseurController extends Controller
{
    public function indexview()
    {    
        $professeurs = Professeurs::all();
        return view('admin.professeursview',['lesProfesseurs' => $professeurs]);
    }
    public function indexfiles()
    {    
        $professeurs = Professeurs::all();
        return view('admin.fichiersview',['lesProfesseurs' => $professeurs]);
    }
    public function indexfilesvalidation()
    {   
        return view('admin.fichiersvalidation');
    }
    public function indexadmin()
    {   
        return view('welcomeadmin');
    }

}
