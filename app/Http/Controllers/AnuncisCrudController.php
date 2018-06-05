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
        
        $id_usuari = Auth::user()->id;
      //  $cangur = \App\Cangurs::where('id_usuari',$id_usuari)->firstOrFail();
        return $id_usuari;
       // return 'hola';
       // return $cangur;
       // return 'Hola';
      //  return view('babysitting.cangurs.anuncis.crear', compact('cangur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id) {
       /* $validacio = $this->validate($request, [
            'titol' => 'required|unique:anuncis_cangurs|max:255',
            'preu' => 'required|unique:anuncis_cangurs',
            'descripcio' => 'required|max:255'
            ]);
        $idUsuari = Auth::id();
        if ($validacio) {
            $anuncis = AnuncisCangurs::create([
                        'usuaris' => $idUsuari,
                        'titol' => $request->get('titol'),
                        'preu' => $request->get('preu'),
                        'descripcio' => $request->get('descripcio')
                        
            ]);
        }*/
      /*  $message = $anuncis? 'Anunci creat correctament!' : 'Anunci NO creat!';
        return redirect()->route('backendcangur.index')->with('message', $message);*/
        return $id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AnuncisCangurs $anuncis) {
        //
      /*  $anuncis = AnuncisCangurs::find($id);
        // return \Session::get('anunci');
        return view('backendcangur.edit', compact('anuncis'))*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //return "ID" . $id;
        $anunci = \App\AnuncisCangurs::where('id',$id)->first();
        return view('babysitting.cangurs.anuncis.editar', compact('anunci'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        $this->validate($request, ['titol' => 'required', 'descripcio' => 'required', 'preu' => 'required']);
        AnuncisCangurs::find($id)->update($request->all());
        return redirect()->route('backendcangur.index')->with('sucess', 'Registre actualitzat satisfactòriament');
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
        return redirect()->route('backendcangur.index')->with('sucess', 'Registre borrat satisfactòriament');
    }

}
