<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index')->with('turmas',$turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplinas = Disciplina::all();
        return view('turmas.create')->with('disciplinas',$disciplinas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Turma::create($request->all());
        session()->flash('info', 'Turma inserida com sucesso');
        return redirect('/turmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Turma::find($id);
        return view('turmas.show')->with('turma',$turma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disciplinas = Disciplina::all();
        $turma = Turma::find($id);
        return view('turmas.edit')->with('turma',$turma)->with('disciplinas',$disciplinas);
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
        $turma= Turma::find($id);

        $turma->nome = $request->nome;
        $turma->disciplina_id = $request->disciplina_id;

        $turma->save();

        session()->flash('info', 'Turma editada com sucesso!');
        return redirect('/turmas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turma::destroy($id);
        session()->flash('info', 'Turma excluida com sucesso!');
        return redirect('/turmas');
    }
}
