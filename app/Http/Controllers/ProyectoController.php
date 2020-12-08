<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $proyectos = Proyecto::with('category')->get();
        return Inertia::render('Proyectos/Index', [
            'proyectos' => $proyectos
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();

        // return $categories;
        
        return Inertia::render('Proyectos/Create', [
            'categories' => $categories,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);
               
        $user = Auth::user()->id;

        $file = request()->file('image');
        $imageName = $file->getClientOriginalName();
        $imageName = time().'_'.$imageName;

        $file->move(public_path('/storage/images/'.$user), $imageName);
  
        // return $user;
        $proyecto = new Proyecto();
        $proyecto->name = $request->name;
        $proyecto->category_id = $request->category_id;
        $proyecto->description = $request->description;
        $proyecto->link = $request->link;
        $proyecto->image = '/storage/images/'.$user.'/'.$imageName;
        $proyecto->save();

    return Response('Correcto', 201);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyectos = Proyecto::find($id);
        $categories = Category::all();

        // return $categories;
        
        return Inertia::render('Proyectos/Edit', [
            'proyectos' => $proyectos,
            'categories' => $categories,
        ]);
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
        $user = Auth::user()->id;
        $img = Proyecto::find($id);
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'link' => 'required',
        ]);


        
        $proyecto = Proyecto::find($id);
        $proyecto->name = $request->name;
        $proyecto->category_id = $request->category_id;
        $proyecto->description = $request->description;
        $proyecto->link = $request->link;
        if(request()->file('image') ){
            // Agregar nueva imagen
            $file = request()->file('image');
            $imageName = $file->getClientOriginalName();
            $imageName = time().'_'.$imageName;
            
            $file->move(public_path('/storage/images/'.$user), $imageName);
            $proyecto->image = '/storage/images/'.$user.'/'.$imageName;
    
            }else{
                $proyecto->image = $img->image;
            }


        $proyecto->update();

        // eliminado de imagen
        
        $filed = public_path() . $img->image;
        \File::delete($filed);

        return response('actualizado');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Proyecto::find($id);
        Proyecto::find($id)->delete();
        
        // eliminado de imagen
        
        $filed = public_path() . $img->image;
        \File::delete($filed);
        
        return Redirect::route('proyectos');
 
    }
}
