<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projet;

class PageController extends Controller
{
    public function showProjet($id)
    {
    	$projet = Projet::findOrFail($id);
      return view('page.offre', compact('projet'));
    }
}
