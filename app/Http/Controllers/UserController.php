<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('partials.users', ['users' => User::all()]);
    }

    public function store()
    {

        if ($this->request->getMethod() == 'GET') {
            $arrUser['id'] = '';
            $arrUser['name'] = '';
            $arrUser['cpf'] = '';
            $arrUser['email'] = '';

            return view('partials.form', $arrUser);
        }

        $objUser = new User();

        if ($this->request->input('user_id')) {
            $objUser = User::find($this->request->input('user_id'));
        }

        try {
            $objUser->name = $this->request->input('name');
            $objUser->cpf = str_replace('-', '', str_replace('.', '', $this->request->input('cpf')));;
            $objUser->email = $this->request->input('email');

            if ($objUser->save()) {
                return redirect('/')->with(['retorno' => true, 'msg' => 'Dados Salvos com Sucesso', 'color' => 'green']);
            }
        } catch (\Throwable $th) {
            return redirect('/')->with(['retorno' => false, 'msg' => 'Algo deu errado.', 'color' => 'red']);
        }
    }

    public function edit($id)
    {
        $objUser = User::find($id);

        $arrUser['id'] = $objUser->id;
        $arrUser['name'] = $objUser->name;
        $arrUser['cpf'] = $objUser->cpf;
        $arrUser['email'] = $objUser->email;

        return view('partials.form', $arrUser);
    }

    public function delete($id){
        $objUser = User::find($id);

        try {
            if($objUser->delete()){
                return redirect('/')->with(['retorno' => true, 'msg' => 'Registro Excluido com Sucesso', 'color' => 'green']);
            }
        } catch (\Throwable $th) {
            return redirect('/')->with(['retorno' => false, 'msg' => 'Algo deu errado.', 'color' => 'red']);
        }

        
    }
}
