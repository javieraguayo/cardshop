<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;//para que pueda usar el modelo cart
use Illuminate\Support\Str;
use Illuminate \ Support \ Facades \ Auth;//para obtener datos del user

class CartController extends Controller
{   

    public function __construct()
    {
        //para acceder al controller tiene que estar autenticado 
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * Listado de productos del usuario (user_id)en el carrito de compra
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $user_id = Auth::id();//variable del usuario que inicia session
       //Elocuent query trae los productos dentro del carrito(table carts) del usuario que inicio session
        $carts = Cart::select('products.name','products.price','products.url_img','products.token')
                ->join('products', 'products.id', '=', 'carts.product_id')
                ->join('users', 'users.id', '=', 'carts.user_id')
                ->where('users.id', $user_id)
                ->get();

        return $carts;
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user_id = Auth::id();


        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->product_id = "1";
        $cart->quantity = 1;
        
        $cart->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
