<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        //$productos=Producto::all();
        $productos=Producto::paginate(3);
        
        return view('site.home',compact('productos'));

    }

    public function details($slug)
    {
        $producto=Producto::where('slug',$slug)->first();
        
        return view('site.details',compact('producto'));

    }

    public function categoria($id)
    {
        //$productos=Producto::where('id_categoria',$id)->get();
        $productos=Producto::where('id_categoria',$id)->paginate(3);
        $categoia=Categoria::find($id);
        
        return view('site.categoria',compact('productos','categoia'));

    }
}
