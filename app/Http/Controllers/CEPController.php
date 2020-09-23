<?php

namespace App\Http\Controllers;

use App\CEP;
use Illuminate\Http\Request;
use App\Http\Requests\Cep as CepRequest;
use Illuminate\Support\Str;

class CEPController extends Controller
{

    public function index()
    {
        $ceps = cep::all();

        return view('cep.index', [
            'ceps' => $ceps
        ]);
    }


    public function create()
    {
        return view('cep.create');
    }


    public function store(CepRequest $request)
    {
        $cep = $request->all();
        $cep['logradouro'] = Str::ascii($request['logradouro']);
        $cep['complemento'] = Str::ascii($request['complemento']);
        $cep['bairro'] = Str::ascii($request['bairro']);
        $cep['localidade'] = Str::ascii($request['localidade']);
        $cep['gia'] = Str::ascii($request['gia']);
        cep::create($cep);

        return redirect()->route('cep.index')->with(['color' => 'green', 'message' => 'CEP cadastrado com sucesso!']);
    }


    public function show($id)
    {
        $cep = cep::where('id', $id)->first();

        return view('cep.edit', [
            'cep' => $cep
        ]);
    }


    public function edit($id)
    {

    }


    public function update(CepRequest $request, $id)
    {
        $cep = cep::find($id);
        $cep['logradouro'] = Str::ascii($request['logradouro']);
        $cep['complemento'] = Str::ascii($request['complemento']);
        $cep['bairro'] = Str::ascii($request['bairro']);
        $cep['localidade'] = Str::ascii($request['localidade']);
        $cep['gia'] = Str::ascii($request['gia']);
        $cep->update();

        return redirect()->route('cep.show', $cep->id)->with(['color' => 'green', 'message' => 'CEP alterado com sucesso!']);
    }


    public function destroy($id)
    {
        $cep = cep::find($id);
        $cep->delete();

        return redirect()->route('cep.index')->with(['color' => 'green', 'message' => 'CEP excluído com sucesso!']);
    }
}
