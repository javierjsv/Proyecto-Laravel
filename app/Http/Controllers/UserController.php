<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
class UserController extends Controller
{
    public function index(){



// debe importa la clase arriba esta la forma correcta


        $Users = DB::table('users')->get();
        // $users = User::all();


        // mostrar con arreglo
        //dd($Users);
        //print_r($Users->name);die();



       


// si la list esta vacia no muestre usuario de lo contrario muestrelo




// tabla con datos estaticas
        // if (Request()->has('empty')) {

        //     $Users = [];
         
        //     # code...
        // } else {


        // $Users = [

        //     'johan',
        //     'javier',
        //     'solis',
        //      'velasco',
        //     '<script>alert("Clicker")</script>'

        // ];
        // }
        

        // 1) forma de mostrar vista en el controlador

    	// return view('Users',[
    	// 	'Users' => $Users,
    	// 	'title' => 'List of User'
    	// ]);


        // 2) Forma de mostrar vita en el controlador


       
        return view('users.index',compact('Users'));





    }


    public function show($id){

    	 // return "Detalles del usuario: {$id}";

         return view('users.show',compact('id'));
    }


    public function create (){

    	return "crete new user";
    }

}


