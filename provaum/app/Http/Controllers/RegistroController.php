<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Registro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::orderBy('data','asc')->get();
        return view('registros.index')->with('registros',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()) {
            $eventos = Evento::all();
            return view('registros.create')->with('eventos', $eventos);
        }
        else {
            session()->flash('error', 'Faça o login para se cadastrar no evento!');
            return redirect('/');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $in = new Registro;
        $in['user_id'] = Auth::user()->id;
        $in['evento_id'] = $request->evento_id;
        $in['data'] = $request->data;
        $in['pago'] = $request->pago;
        $in->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listar()
    {

        if(Auth::check()) {
            $registros = Registro::where('user_id',Auth::user()->id)->orderBy('data','desc')->get();
            return view('registros.listar')->with('registros', $registros);
        }
        else {
            session()->flash('error', 'Faça o login para listar seus eventos!');
            return redirect('/');
        }


    }

    public function listarA()
    {
        $users = User::all();
        return view('registros.listarA')->with('users',$users);
    }
}
