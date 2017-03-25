<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use Illuminate\Support\Facades\Auth;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()) {
            $disciplinas = Disciplina::all();

            //dd(session()->all());
            //return true; //recuperar todos os elementos da sessao

            //session(['nome'=>'fernando']);
            //session()->forget('nome');
            //$nome = session()->pull('nome', 'nao_definido'); MATA DA SESSAO
            //$nome=session('nome','nao_definido'); MANTEM NA SESSAO

            // session()->flush(); // limpar a sessao
            // session()->reenerate();


            return view('disciplinas.index')
                ->with('disciplinas', $disciplinas);
        } else {
            session()->flash('error','Disciplina:acesso nao autorizado!');
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->session()->all()); -> PRA QUE SERVE ISSO?
        Disciplina::create($request->all());
        session()->flash('info', 'Disciplina inserida com sucesso!');
        return redirect('/disciplinas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disciplina = Disciplina::find($id);
        return view('disciplinas.show')
            -> with('disciplina', $disciplina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disciplina = Disciplina::find($id);
        return view('disciplinas.edit')
            ->with('disciplina', $disciplina);
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

      $disciplina = Disciplina::find($id);

      $disciplina->nome = $request->nome;
      $disciplina->codigo = $request->codigo;
      $disciplina->carga = $request->carga;

      $disciplina->save();

      session()->flash('info', 'Disciplina atualizada com sucesso!');

      return redirect('/disciplinas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Disciplina::destroy($id);
        session()->flash('info', 'Disciplina excluida com sucesso!');
        return redirect('/disciplinas');
    }

    public function __construct(){
        //$this->middleware('auth', ['except'=>'index']);
        $this->middleware('auth');
    }
}
