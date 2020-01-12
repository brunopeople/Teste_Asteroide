<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa=\App\Pessoa::all();
        return view('index', compact('pessoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hastfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }   

        $pessoa = new \App\Pessoa;
        $pessoa->name=$request->get('name');
        $pessoa->surname=$request->get('surname');
        $pessoa->email=$request->get('email');
        $pessoa->number=$request->get('number');
        $date=date_create($request->get('date'));
        $format = date_format($date, "Y-m-d");
        $pessoa->date = strtotime($format);
        $pessoa->adress=$request->get('adress');
        $pessoa->filename=$name;
        $pessoa->save();

         $validateData = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'date(format)' => 'required|numeric',
            'adress' => 'required|max:255'

        ]);

        $pessoa = Pessoa::create($validateData);

        return redirect('pessoa')->width('sucess','O cadastro foi feito com sucesso!');



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
        $pessoa = \App\Pessoa::find($id);
        return view('edit', compact('pessoa','id'));
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
        $pessoa= \App\Pessoa::find($id);
        $pessoa->name=$request->get('name');
        $pessoa->surname=$request->get('surname');
        $pessoa->email=$request->get('email');
        $pessoa->number=$request->get('number');
        $pessoa->adress=$request->get('adress');
        $pessoa->save();
        return redirect('pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = \App\Pessoa::find($id);
        $pessoa = delete();
        return redirect('pessoa')->width('sucess','A informação foi deletada com sucesso!');
    }
}
