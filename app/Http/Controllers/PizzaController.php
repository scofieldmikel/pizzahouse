<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        //Passing data to the view
    // $pizzas = [
    //     'type' => 'hawaiian',
    //     'base'=> 'garlic crust',
    //     'price' => 10
    // ];
    // return view('pizzas', $pizzas);

    // $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type','Haiwaiain')->get();
    $pizzas= Pizza::latest()->get();


    return view('pizzas.index', [
        'pizzas'=> $pizzas

        ]);
    }

    public function show($id){
        return view('pizzas.show', ['id' => $id]);
    }

    public function create() {
        return view('pizzas.create');
    }
}
