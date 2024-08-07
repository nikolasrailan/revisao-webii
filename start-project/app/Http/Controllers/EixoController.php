<?php

namespace App\Http\Controllers;

use App\Models\Eixo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;

class EixoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $data = Eixo::all();
        Storage::disk('local')->put('example.txt', 'Contents');

        return view('eixo.index', compact('data'));
        //passar varios registro pra view, ex: compact(['data', 'aluno'])
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eixo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('documento')){

            $eixo = new Eixo();
            $eixo->nome = $request->nome;
            $eixo->descricao = $request->descricao;
            $eixo->save();
            $extensao_arq = $request->file('documento')->getClientOriginalExtension();
            $nome_arq = $eixo->id."_".time().".".$extensao_arq;
            $request->file('documento')->storeAs("public/", $nome_arq);
            $eixo->url = $nome_arq;
            $eixo->save();
            return redirect()->route('eixo.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)){
            return view('eixo.show', compact(['eixo']));
        }
        return '<h1>Eixo não encontrado</h1>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)){
            return view('eixo.edit', compact(['eixo']));
        }
        return '<h1>Eixo não encontrado</h1>';
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)){
            $eixo->nome = $request->nome;
            $eixo->descricao = $request->descricao;
            $eixo->save();
            return redirect()->route('eixo.index');
        }
        return '<h1>Eixo não encontrado</h1>';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)){
            $eixo->delete();
            return redirect()->route('eixo.index');
        }

        return '<h1>EIXO NAO ENCONTRADO</h1>';
    }

    public function report() {
        $data = Eixo::all();

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('eixo.pdf', compact('data')));
        $dompdf->render();
        $dompdf->stream("relatorio-horas-turma.pdf", array("Attachment" => false));
    }

    public function graph() {
        $data = json_encode([
            ["NOME", "TOTAL DE HORAS"],
            ["MARIA", 150],
            ["CARLOS", 90],
            ["JOÃO", 232],
            ["ANA", 197],   
        ]);

        return view('eixo.graph', compact(['data']));
    }

    public function form(Request $request) {
        //return $request->all();
    }
}
