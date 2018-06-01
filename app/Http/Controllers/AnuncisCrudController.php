<?php

namespace App\Http\Controllers;

use App\AnuncisCangurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnuncisCrudController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $anuncis = AnuncisCangurs::all();
        //
        return view('babysitting.cangurs.backend.backendcangur', compact('anuncis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('babysitting.cangurs.anuncis.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $this->validate($request, [
            'titol' => 'required|unique:anuncis_cangurs|max:50',
            'preu' => 'required|unique:anuncis_cangurs'
        ]);

        $anuncis = AnuncisCangurs::create([
                    'titol' => 'required|max:255',
                    'preu' => 'required|unique:anuncis_cangurs',
                    'descripcio' => 'required'
        ]);

        $idUsuari = Auth::id();
        
        if($validacio){
            $anuncis = AnuncisCangurs::create([
              'usuaris'=>$idUsuari,  
              'titol' => $required->get('titol'),
              'preu' => $required->get('preu'),
              'descripcio' => $required->get('descripcio')
            
            ]);
        }

        $anuncis = AnuncisCangurs::create([
        'titol' => $request->get('titol'),
        'preu' => str_slug($request->get('preu')),
        'descripcio' => $request->get('descripcio')
       ]);

        $message = $anuncis ? 'success, Registre Creat Satisfactòriament' : 'Anunci no afegit!';
        return redirect()->route('backendcangur.anunciscangurs.index')->with('message');

        /* $this->validate($request,['titol'=>'required', 'descripcio'=>'required', 'preu'=>'required']);
          AnuncisCangurs::create($request->all());
          return redirect()->route(' backendcangur.index')->with('success','Registre Creat Satisfactòriament'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $anuncis = AnuncisCangurs::find($id);
        // return \Session::get('anunci');
        return view('anunciscangurs.edit', compact('anuncis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $AnuncisCangurs = AnuncisCangurs::find($id);
        return view('anunciscangurs.edit', compact('AnuncisCangurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
        $this->validate($request, ['titol' => 'required', 'descripcio' => 'required', 'preu' => 'required']);
        AnuncisCangurs::find($id)->update($request->all());
        return redirect()->route('anunciscangurs.index')->with('sucess', 'Registre actualitzat satisfactòriament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        AnuncisCangurs::find($id)->delete();
        return redirect()->route('anunciscangurs.index')->with('sucess', 'Registre borrat satisfactòriament');
    }

}
