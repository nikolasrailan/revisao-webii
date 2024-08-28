<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Eixo;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $this->authorize('index', Curso::class);

        $data = Curso::all();
        //Storage::disk('local')->put('example.txt', 'Contents');
        //$data = Disciplina::with('eixo')->get();
        return view('curso.index', compact('data'));
        //passar varios registro pra view, ex: compact(['data', 'aluno'])
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Curso::class);
        $data = Eixo::all();

        return view('curso.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Curso::class);

        //if($request->hasFile('documento')){

            $curso = new Curso();
            // dd($request);
            $curso->nome = $request->nome;
            $curso->eixo_id = $request->eixo;
            $curso->save();
            //$extensao_arq = $request->file('documento')->getClientOriginalExtension();
            //$nome_arq = $eixo->id."_".time().".".$extensao_arq;
            //$request->file('documento')->storeAs("public/", $nome_arq);
            //$eixo->url = $nome_arq;
            //$eixo->save();
            return redirect()->route('curso.index');
        //}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('show', Curso::class);

        $curso = Curso::find($id);
        if(isset($curso)){
            return view('curso.show', compact(['curso']));
        }
        return '<h1>Curso não encontrado</h1>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('edit', Curso::class);

        $curso = Curso::find($id);
        $eixo = Eixo::all();

        if(isset($curso)){
            return view('curso.edit', compact('curso', 'eixo'));
        }
        return '<h1>curso não encontrado</h1>';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
