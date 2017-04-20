<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projet;

use App\User;

class HomeController extends Controller
{
    public function index() {
      $projets = Projet::orderBy('id', 'desc')->get();
      return view('home.index', ['projets' => $projets]);
    }

    public function catalogueFreelancer() {
      $users = User::orderBy('id', 'desc')->where(['is_freelancer' => 1])->get();
      return view('freelancer.cataloguefreelancer', ['users' => $users]);
    }

    public function catalogueSociete() {
      $users = User::orderBy('id', 'desc')->where(['is_societe' => 1])->get();
      return view('societe.cataloguesociete', ['users' => $users]);
    }
}