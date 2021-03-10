<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profissional;
class ProfissionalController extends Controller
{
    
    public function index()
    {
        return Profissional::all();
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Profissional::create($request->all());
    }

    public function show($titulo)
    {
       return Profissional::where('titulo','like','%'.$titulo.'%')->get();
        
        
        /*return Profissional::where(function($query)use ($titulo)
        {
            $query->where('titulo', 'like', '%'.$titulo.'%');
        })
        ->get();*/
        
    }

    public function procurar(Request $request){

        if($request->has('titulo')){
            if($request->has('skills')){
                if($request->has('taxa')){
                    if($request->has('disponibilidade')){
                        return Profissional::where(function($query)use ($request){
                            $query->where('titulo', 'like', '%'.$request->titulo.'%')
                            ->where('skills', 'like', '%'.$request->skills.'%')
                            ->where('taxa','=',$request->taxa)
                            ->where('disponibilidade', 'like', '%'.$request->disponibilidade.'%');
                        })
                        ->get();
                    }else{
                        return Profissional::where(function($query)use ($request){
                            $query->where('titulo', 'like', '%'.$request->titulo.'%')
                            ->where('skills', 'like', '%'.$request->skills.'%')
                            ->where('taxa','=',$request->taxa);
                        })
                        ->get();
                    }
                }else{
                    if($request->has('disponibilidade')){
                        return Profissional::where(function($query)use ($request){
                            $query->where('titulo', 'like', '%'.$request->titulo.'%')
                            ->where('skills', 'like', '%'.$request->skills.'%')
                            ->where('disponibilidade', 'like', '%'.$request->disponibilidade.'%');
                        })
                        ->get();
                    }else{
                        return Profissional::where(function($query)use ($request){
                            $query->where('titulo', 'like', '%'.$request->titulo.'%')
                            ->where('skills', 'like', '%'.$request->skills.'%');
                        })
                        ->get();
                    }
                }
            }
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
       // 
    }
}
