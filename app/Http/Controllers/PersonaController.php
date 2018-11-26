<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Student;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
use App\Http\Controllers\User;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples=People::all();
     return view('persona.index',compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
         'id'=>'required',
        
         'name'=>'required',
         'last_name'=>'required',
         'birthdate'=>'required',
         'adress'=>'required',
         'phone'=>'required',
         'type'=>'required',
         'email'=>'required',
         'password'=>'required',
         
     ]);
        People::create($request->all());

        Session::flash('message','Persona insertada correctamente');
        return redirect()->route('persona.index');
    
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
    public function edit(People $persona)
    {
    
      return view('persona.edit',compact ('persona'));  //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,People $persona)
    {
          $request->validate([
         'id'=>'required',
         'name'=>'required',
         'last_name'=>'required',
         'birthdate'=>'required',
         'adress'=>'required',
         'phone'=>'required',
        'type'=>'required',
         'email'=>'required',
         'password'=>'required',
     ]);
        $persona->update($request->all());
                Session::flash('message','Registro editado correctamente');
        return redirect()->route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $persona)
    {
        $persona->delete();
                $persona->delete();
                Session::flash('message','Registro eliminado correctamente');
        return redirect()->route('persona.index');
       
    }
}
