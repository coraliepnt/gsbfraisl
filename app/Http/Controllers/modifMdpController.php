<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;

class modifMdpController extends Controller
{
    public function affFormModifMdp(){
        
        $erreur = "";
        return view('formModifMdp',compact('message','erreur'));
    }
    public function verifMdp(){
        //récuperer ancien mot de passe
        //vérifier que mot de passe saisi = ancien mot de passe 
        //vérifier que les 2 mots de passe soient identiques
        //si tout est ok mettre a jour la base de données 
        
        $erreur ="";
        
        return redirect()->back()->with('status','Mise a jour effectué');
    }
    //
}
