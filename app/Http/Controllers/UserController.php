<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

// si la list esta vacia no muestre usuario de lo contrario muestrelo

        if (Request()->has('empty')) {

            $Users = [];
         
            # code...
        } else {


        $Users = [

            'johan',
            'javier',
            'solis',
             'velasco',
            '<script>alert("Clicker")</script>'

        ];
        }
        

        // 1) forma de mostrar vista en el controlador

    	// return view('Users',[
    	// 	'Users' => $Users,
    	// 	'title' => 'List of User'
    	// ]);


        // 2) Forma de mostrar vita en el controlador


        $title = 'list of user';

        return view('Users.index',compact('title','Users'));





    }


    public function show($id){

    	 // return "Detalles del usuario: {$id}";

         return view('users.show',compact('id'));
    }


    public function create (){

    	return "crete new user";
    }

}


