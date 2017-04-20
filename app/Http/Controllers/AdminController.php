<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProjetRequest;

use App\Http\Requests\EditFreelancerRequest;

use App\Http\Requests\EditSocieteRequest;

use App\Projet;

use App\User;

class AdminController extends Controller
{
    public function getProjets() 
    {
        $projets = Projet::orderBy('id', 'desc')->get();
        return view('admin.projets', ['projets' => $projets]);
    }

    public function postProjet(ProjetRequest $request) 
    {
        $projet = new Projet;
        $projet->type_projet = $request->type_projet;
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->budget = $request->budget;

        $projet->save();

        return redirect('admin');
    }

    public function removeProjet($id) 
    {
        $projet = Projet::find($id);

        if ($projet) {
          $projet->delete();
          return redirect('admin');
        }
        else {
          return redirect('admin');
        }
    }

    public function getEditProjet($id) 
    {
        $projet = Projet::find($id);

        if ($projet) {
          return view('admin.edit', ['projet' => $projet]);
        }
        else {
          return redirect('admin');
        }
    }

    public function postEditProjet(ProjetRequest $request, $id) 
    {
        $projet = Projet::find($id);

        if ($projet) {
          $projet->type_projet = $request->type_projet;
          $projet->titre = $request->titre;
          $projet->description = $request->description;
          $projet->budget = $request->budget;

          $projet->save();

          return redirect(url()->current())->with('status', 'Projet mis à jour !');
        }
        else {
          return redirect('admin');
        }
    }

    public function index()
    {

        $projets = $this->projet->orderBy('id', 'DESC')->get();

        return View::make('index', compact('projets'));

        $users = $this->user->orderBy('id', 'DESC')->get();

        return View::make('index', compact('users'));
      }

    public function getUsers() 
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.users', ['users' => $users]);
    }

    public function getEditUser($id) 
    {
        $user = User::find($id);

        if ($user) {
          return view('admin.editusers', ['user' => $user]);
        }
        else {
          return redirect('admin.gestion');
        }
    }

    public function postEditUser(EditFreelancerRequest $request, EditSocieteRequest $request2, $id) 
    {
        $user = User::find($id);

        if ($user->is_freelancer == 1) 
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

          return redirect(url()->current())->with('status', 'Utilisateur(s) mis à jour !');

        }

        else if ($user->is_societe == 1) 
        {

          $user->raison_sociale =$request2->raison_sociale;
          $user->secteur_activite =$request2->secteur_activite;
          $user->nombre_employes =$request2->nombre_employes;
          $user->inf_complementaire =$request2->inf_complementaire;
          $user->ville =$request2->ville;
          $user->adresse =$request2->adresse;
          $user->code_post =$request2->code_post;
          $user->photo =$request2->photo;
          $user->tel =$request2->tel;

          $user->save();

          return redirect(url()->current())->with('status', 'Utilisateur(s) mis à jour !');
        }

          

        else {
          return redirect('admin/gestion');
        }
    }

    public function removeUser($id) 
    {
        $user = User::find($id);

        if ($user) {
          $user->delete();
          return redirect('admin/gestion');
        }
        else {
          return redirect('admin/gestion');
        }
    }
}
