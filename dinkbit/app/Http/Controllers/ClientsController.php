<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Regresa todos los clientes
        /*$clients = Client::all();
        return $clients;*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Crea un nuevo cliente
        return view('contacto');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ClientsRequest $request)
    {
        //Almacenar los datos de un cliente
        $client = $request->all();
        
        $nombre= $request->input('name');    
        $email=$request->input('email');
        
        Mail::send('email.correoPrueba', ['nombre'=>$nombre], function ($message) use ($email){

            $message->to($email)->subject('Hola');
        });
        /*$client->save();*/
        Client::create($client);
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
    public function update($id)
    {
        //Actualiza un registro por id
        $client=Client::find($id);
        $client->name=Request::input('name');
        $client->lastname=Request::input('lastname');
        $client->phone=Request::input('phone');
        $client->ofPhone=Request::input('ofPhone');
        $client->mensaje=Request::input('mensaje');
        $client->subject=Request::input('subject');
        $client->enterprise=Request::input('enterprise');
        $client->save();
        
        
        return $client;
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar registro
        Client::destroy($id);
    }
}
