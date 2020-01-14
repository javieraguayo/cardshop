<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;//para que pueda usar el modelo de la Producto
use Illuminate\Support\Str;

class ProductController extends Controller
{   
      public function __construct()
    {
        //para acceder al controller tiene que estar autenticado 
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     * GET listar todos los productos
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::select('name','price','url_img','token')->get();
    }

    /**
     * Show the form for creating a new resource.
     * GET para mostar la vista del crear y sus datos
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     * POST guardar todos los productos
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $producto = new Product();
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->url_img = $request->url_img;
        $producto->token = Str::random(32);
        $producto->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     * GET para mostrar un producto
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET muestra el formulario del update
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * //PUT actualiza el producto
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
     * //DELETE elimina el producto
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
