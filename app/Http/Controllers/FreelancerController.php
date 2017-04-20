<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProjetRequest;

use App\Http\Requests\EditFreelancerRequest;

use App\Projet;

use Auth;

use App\User;

class FreelancerController extends Controller
{

    public function getEditFreelancer($id) 
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        if ($user) {
          return view('freelancer.editprofil', ['user' => $user]);
        }
        else {
          return redirect('home');
        }
    }

    public function postEditFreelancer(EditFreelancerRequest $request, $id) 
    {   
        $id = Auth::user()->id;
        $user = User::find($id);

        if ($user) 
        {

          $user->nom =$request->nom;
          $user->prenom =$request->prenom;
          $user->profession =$request->profession;
          $user->competence =$request->competence;
          $user->date_naissance =$request->date_naissance;
          $user->bio =$request->bio;

          $user->ville =$request->ville;
          $user->adresse =$request->adresse;
          $user->code_post =$request->code_post;
          $user->photo =$request->photo;
          $user->tel =$request->tel;

          $user->save();

          return redirect(url()->current())->with('status', 'Utilisateur mis à jour !');

        }

    }

}
