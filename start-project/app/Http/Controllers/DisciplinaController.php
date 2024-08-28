<?php

namespace App\Http\Controllers;

use App\Models\Curso;
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
        //$data = Disciplina::with('eixo')->get();
        return view('disciplina.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Disciplina::class);
        $data = Curso::all();

        return view('curso.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Disciplina::class);

        //if($request->hasFile('documento')){

            $disciplina = new Disciplina();
            // dd($request);
            $disciplina->nome = $request->nome;
            $disciplina->curso_id = $request->curso;
            $disciplina->save();
            //$extensao_arq = $request->file('documento')->getClientOriginalExtension();
            //$nome_arq = $eixo->id."_".time().".".$extensao_arq;
            //$request->file('documento')->storeAs("public/", $nome_arq);
            //$eixo->url = $nome_arq;
            //$eixo->save();
            return redirect()->route('disciplina.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
