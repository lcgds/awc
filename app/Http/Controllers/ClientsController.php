<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;

class ClientsController extends Controller
{
    /*
        public function __construct()
        {
            $this->middleware('auth');
        }
    */

    public function readClients()
    {
        $clientes = Clientes::all();

        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function createClients()
    {
        if($this->middleware('auth')) {
            return view('clientes.create');
        };
    }

    public function storeClients(Request $request) {

        if($this->middleware('auth')) {
            Clientes::create($request->all());

            return redirect(route('clientes.index'));
        };
    }
}
