<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\paginate;

class ProductController extends Controller
{
    
    public function index()
    {   
        $productos = DB::table('products')->paginate(5);
        return view('listaProductos', compact('productos'));
    }

    public function barCode(){
        $codigos = DB::table('products')->paginate(5);
        return view('codeImprime', compact('codigos'));
    }

    public function create(Request $request)
    {
        if(Product::where('sku', '=', $request->sku)->exists()){
            return redirect()->back()->with('mensaje', "¡ El código de barra escaneado ya existe ! pro favor intenta con otro");
        }
            $nuevo = new Product();

            $nuevo->sku = $request->sku;
            $nuevo->name = $request->name;
            $nuevo->price = $request->price;
            $nuevo->stock = $request->stock;
            $nuevo->description = $request->description;
            if($request->file('image')){
                $nuevo->image = $request->file('image')->store('products', 'public');
                $nuevo->save();
            }
            return redirect()->back()->with('Exito', "¡ El producto se registró con éxito !");
    }

    public function edit(Request $request)
    {
        $edita = Product::find($request->id);

        $edita->sku = $request->sku;
        $edita->name = $request->name;
        $edita->price = $request->price;
        $edita->stock = $request->stock;
        $edita->description = $request->description;
        if($request->file('image')){
            $edita->image = $request->file('image')->store('products', 'public');
            $edita->save();
        }
        
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $eliminando = Product::find($request->id);

        $eliminando->delete();

        return redirect()->back();
    }

    public function ventaAdmin(){
        return view('ventaAdministrador');
    }

    // ventas

    public function busqueda(Request $request){
        if($request->ajax()){
            $producto = Product::where('sku', $request->sku)->get();
            return response()->json($producto);
        }
    }
    public function busquedaNombre(Request $request){
        if($request->ajax()){
            $productName = Product::where('name', $request->name)->get();
            return response()->json($productName);
        }
    }

    public function descuenta($id, $cantidad){
        $descuenta = Product::find($id);
        $descuenta->stock = $descuenta->stock - $cantidad;
        $descuenta->sales = $descuenta->sales + $cantidad;
        $descuenta->save();
        return redirect()->back();
    }
}
