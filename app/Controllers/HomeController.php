<?php

namespace App\Controllers;

use App\core\Controller;

class HomeController extends Controller
{
    public function index()
    {   
      $test =   $this -> render('home/index', [
            'title' => 'Acceuil',
            'username' => 'Yassine'
        ]);

        echo "Home route khdama ";

    // $this -> redirect("/login.php");
        
    }
}
