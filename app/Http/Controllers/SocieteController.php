<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProjetRequest;

use App\Projet;

use App\User;

use Auth;

class SocieteController extends Controller
{
    public function getProjets() {
      //$id = Auth::user()->id;
      //$user = User::find($id);

      $projets = Projet::orderBy('id', 'desc')->where(['users_id' => 10])->get();
      return view('societe.projets', ['projets' => $projets]);
    }

    public function postProjet(ProjetRequest $request) {
      $projet = new Projet;

      $projet->type_projet = $request->type_projet;
      $projet->titre = $request->titre;
      $projet->description = $request->description;
      $projet->budget = $request->budget;

      $projet->save();

      return redirect('societe');
    }

    public function removeProjet($id) {
      $projet = Projet::find($id);

      if ($projet) {
        $projet->delete();
        return redirect('societe');
      }
      else {
        return redirect('societe');
      }
    }

    public function getEditProjet($id) {
      $projet = Projet::find($id);

      if ($projet) {
        return view('societe.edit', ['projet' => $projet]);
      }
      else {
        return redirect('societe');
      }
    }

    public function postEditProjet(ProjetRequest $request, $id) {
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
        return redirect('societe');
      }
    }

    public function index()
      {
      $projets = $this->projet->orderBy('id', 'DESC')->get();

      return View::make('index', compact('projets'));
      }


    //     Utilisateurs
      
}
