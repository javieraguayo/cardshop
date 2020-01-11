<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;//para que pueda usar el modelo cart
use Illuminate\Support\Str;
use Illuminate \ Support \ Facades \ Auth;//para obtener datos del user
use App\Product;

class CartController extends Controller
{   

    public function __construct()
    {
        //para acceder al controller tiene que estar autenticado 
        $this->middleware('auth');
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
        $carts = Cart::select('products.name','products.price','products.url_img','products.token','carts.quantity')
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
       Funcion Store usada para boton agregar del cardComponent agregra de +1 productos  
     * recibe por parametros el token del producto , con el token buscamos el producto traemos su id y lo insertamos en la tabla carts 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $user_id = Auth::id();
        $token = $request->token;
        //buscamos el producto con el token y traemos el id del producto
        $id_product = Product::select('id')
                    ->where('token', $token)
                    ->get();

        $cart       = Cart::select('id','quantity')
                    ->where('product_id', $id_product[0]->id)
                    ->where('user_id', $user_id)
                    ->first();
      
        //verificamos el arreglo si esta vacio
        if (is_null($cart)) {
            // guardamos el producto en la bd
            $createcart = new Cart();
            $createcart->user_id = $user_id;
            $createcart->product_id = $id_product[0]->id;
            $createcart->quantity = 1;
            $createcart->save();
             
        }else{//si existe editamos la row
            //editamos el producto de la tabla cart
            $updatecart = Cart::find($cart->id);
            $updatecart->quantity = $cart->quantity + 1;
            $updatecart->save();
        }
        
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
