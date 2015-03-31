<?php

class BiayaController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry');
        $this->beforeFilter('inGroup:admin', array('except' =>array('show')));
    }

    public function index()
    {
        $nama = User::nama();
        $biaya = Biaya::all();
        return View::make('biaya.index')
            ->with ('biaya', $biaya)
            ->with ('nama', $nama);
    }

    public function create()
    {
        $nama = User::nama();
        return View::make('biaya.tambahbiaya')
            ->with ('nama', $nama);
    }

    public function store()
    {
        $rules = array(
            'no_kamar'           => 'required',
            'listrik'            => 'required',
            'air'                => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('biaya/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $kamar = Kamar::where('no_kamar','=', Input::get('no_kamar'))->first();
            $biaya = new Biaya();
            $biaya ->id_kamar         = $kamar->id;
            $biaya ->listrik          = Input::get('listrik');
            $biaya ->air              = Input::get('air');
            $biaya ->save();


            Session::flash('message', 'Successfully created total biaya!');
            return Redirect::to('biaya');

        }
    }

    public function show($id)
    {
        $nama = User::nama();
        $biaya =Biaya::find($id);
        return View::make('biaya.show')
            ->with('biaya',$biaya)
        ->with ('nama', $nama);
    }

    public function edit($id)
    {
        $nama = User::nama();
        $biaya = Biaya::find($id);

        return View::make('biaya.edit')
            ->with('biaya', $biaya)
            ->with ('nama', $nama);

    }

    public function update($id)
    {
        $rules = array(
            'listrik'            => 'required',
            'air'                => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('biaya/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $biaya    =Biaya::find($id);
            $biaya ->listrik          = Input::get('listrik');
            $biaya ->air              = Input::get('air');
            $biaya ->save();
            // redirect
            Session::flash('message', 'Successfully updated total biaya!');
            return Redirect::to('biaya');
        }
    }

    public function destroy($id)
    {
        // delete
        $biaya = biaya::find($id);
        $biaya->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the total biaya!');
        return Redirect::to('biaya');
    }



}