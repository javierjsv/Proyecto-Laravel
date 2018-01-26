<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    	$Users = [

    		'johan',
    		'javier',
    		'solis',
    		 'velasco',
    		'<script>alert("Clicker")</script>'

    	];

    	return view('Users',[
    		'Users' => $Users,
    		'title' => 'List of User'
    	]);
    }


    public function show($id){

    	 return "Detalles del usuario: {$id}";
    }


    public function create (){

    	return "crete new user";
    }

}


