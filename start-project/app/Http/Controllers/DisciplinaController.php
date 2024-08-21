<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $this->authorize('index', Disciplina::class);

        $data = Disciplina::all();
        //Storage::disk('local')->put('example.txt', 'Contents');

        return view('disciplina.index', compact('data'));
        //passar varios registro pra view, ex: compact(['data', 'aluno'])
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Disciplina::class);

        return view('disciplina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Disciplina::class);

        //if($request->hasFile('documento')){

            $eixo = new Disciplina();
            $eixo->nome = $request->nome;
            $eixo->save();
            //$extensao_arq = $request->file('documento')->getClientOriginalExtension();
            //$nome_arq = $eixo->id."_".time().".".$extensao_arq;
            //$request->file('documento')->storeAs("public/", $nome_arq);
            //$eixo->url = $nome_arq;
            //$eixo->save();
            return redirect()->route('disciplina.index');
        //}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('show', Disciplina::class);

        $eixo = Disciplina::find($id);
        if(isset($disciplina)){
            return view('disciplina.show', compact(['disciplina']));
        }
        return '<h1>Disciplina não encontrado</h1>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('edit', Disciplina::class);

        $eixo = Disciplina::find($id);
        if(isset($disciplina)){
            return view('sisciplina.edit', compact(['disciplina']));
        }
        return '<h1>Disciplina não encontrado</h1>';
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
