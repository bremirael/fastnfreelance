<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegistersRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordRequest;

use App\User;

use Auth;

use Hash;

class AuthsoController extends Controller
{
    public function getRegister() {
      return view('auth.registerso');
    }

    public function postRegister(RegistersRequest $request) {
     $user = new User;

      $user->email = $request->email;
      $user->password = bcrypt($request->password);

      $user->is_admin = 0;
      $user->is_freelancer = 0;
      $user->is_societe = 1;

      $user->raison_sociale =$request->raison_sociale;
      $user->secteur_activite =$request->secteur_activite;
      $user->nombre_employes =$request->nombre_employes;
      $user->inf_complementaire =$request->inf_complementaire;
      $user->ville =$request->ville;
      $user->adresse =$request->adresse;
      $user->code_post =$request->code_post;
      $user->photo =$request->photo;
      $user->tel =$request->tel;

      $user->save();

      Auth::login($user);

      return redirect('compte');
    }

    public function getLogin() {
      return view('auth.login');
    }

    public function postLogin(LoginRequest $request) {
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_societe' => 1], $request->remember)) {
        return redirect()->intended('societe');
      }
      elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        return redirect()->intended('compte');
      }
      else {
        return redirect('connexion')->withErrors('Identifiants erronés')->withInput();
      }
    }

    public function account() {
      return view('auth.account');
    }

    public function postPassword(PasswordRequest $request) {
      if(Hash::check($request->passwordOld, Auth::user()->password)) {
        $id = Auth::user()->id;

        $user = User::find($id);

        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('compte')->with('status', 'Mot de passe modifié !');
      }
      else {
        return redirect('compte')->withErrors('Ancien mot de passe erroné');
      }
    }

    public function logout() {
      Auth::logout();

      return redirect('connexion');
    }
}
