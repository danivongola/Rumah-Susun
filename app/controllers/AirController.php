<?php

class AirController extends \BaseController {

    public function index()
    {
        $air = Air::all();
        return View::make('air.index')
            ->with ('air', $air);
    }

    public function create()
    {
        return View::make('air.tambahair');
    }

    public function store()
    {
        $rules = array(
            'id_kamar'                => 'required',
            'id_penghuni'             => 'required',
            'nama_penghuni'           => 'required',
            'no_kamar'                => 'required',
            'lokasi_kamar'            => 'required',
            'biaya'                   => 'required',

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('air/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $air = new Air();
            $air ->id_kamar                      = Input::get('id_kamar');
            $air ->id_penghuni                   = Input::get('id_penghuni');
            $air ->nama_penghuni                 = Input::get('nama_penghuni');
            $air ->no_kamar                      = Input::get('no_kamar');
            $air ->lokasi_kamar                  = Input::get('lokasi_kamar');
            $air ->biaya                         = Input::get('biaya');
            $air->save();


            Session::flash('message', 'Successfully created air!');
            return Redirect::to('air');

        }
    }


     public function edit($id)
    {
        $air = Air::find($id);

        return View::make('air.edit')
            ->with('air', $air);

    }


    public function update($id)
    {
        $rules = array(
            'id_kamar'                => 'required',
            'id_penghuni'             => 'required',
            'nama_penghuni'           => 'required',
            'no_kamar'                => 'required',
            'lokasi_kamar'            => 'required',
            'biaya'                   => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('air/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $air = Air::find($id);
            $air ->id_kamar                      = Input::get('id_kamar');
            $air ->id_penghuni                   = Input::get('id_penghuni');
            $air ->nama_penghuni                 = Input::get('nama_penghuni');
            $air ->no_kamar                      = Input::get('no_kamar');
            $air ->lokasi_kamar                  = Input::get('lokasi_kamar');
            $air ->biaya                         = Input::get('biaya');
            $air->save();
            // redirect
            Session::flash('message', 'Successfully updated air!');
            return Redirect::to('air');
        }
    }

    public function destroy($id)
    {
        // delete
        $air = Air::find($id);
        $air->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the air!');
        return Redirect::to('air');
    }



}