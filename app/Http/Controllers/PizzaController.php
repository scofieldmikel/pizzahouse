<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    $pizzas = [

        ['type' => 'hawaiian','base'=> 'chessy crust'],
        ['type' => 'vocalno','base'=> 'garlic crust'],
        ['type' => 'veg supreme','base'=> 'thin & crispy'],
    ];


    return view('pizzas', [
        'pizzas'=> $pizzas,
        'name' => request('name'),
        'age' => request('age')

        ]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
