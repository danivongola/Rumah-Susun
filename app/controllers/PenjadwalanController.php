<?php

class PenjadwalanController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry');
    }

    public function index()
    {
        $nama = User::nama();
        $penjadwalan = Penjadwalan::all();
        return View::make('penjadwalan.index')
            ->with ('penjadwalan', $penjadwalan)
            ->with ('nama', $nama);

    }

    public function create()
    {
        $nama = User::nama();
        return View::make('penjadwalan.tambahpenjadwalan')
        ->with ('nama', $nama);
    }

    public function store()
    {
        $rules = array(

            'email'                     => 'required',
            'tanggal_wawancara'         => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('penjadwalan/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $user = User::where('email','=', Input::get('email'))->first();
            $tanggal = Input::get('tanggal_wawancara');
            $penjadwalan = new Penjadwalan();
            $penjadwalan ->id_user                  = $user->id;
            $penjadwalan ->tanggal_wawancara       = date('Y-m-d', strtotime($tanggal));

            $penjadwalan ->save();


            Session::flash('message', 'Successfully created penjadwalan!');
            return Redirect::to('penjadwalan');

        }
    }
    public function show ()
    {

    }

    public function edit($id)
    {
        $nama = User::nama();
        $penjadwalan = Penjadwalan::find($id);

        return View::make('penjadwalan.edit')
            ->with('penjadwalan', $penjadwalan)
            ->with ('nama', $nama);

    }

    public function update($id)
    {
        $rules = array(
                'tanggal_wawancara'         => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('penjadwalan/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $tanggal = Input::get('tanggal_wawancara');
            $penjadwalan = Penjadwalan::find($id);
            $penjadwalan ->tanggal_wawancara       = date('Y-m-d', strtotime($tanggal));

            $penjadwalan ->save();
            // redirect
            Session::flash('message', 'Successfully updated penjadwalan!');
            return Redirect::to('penjadwalan');
        }
    }

    public function destroy($id)
    {
        // delete
        $penjadwalan = Penjadwalan::find($id);
        $penjadwalan->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the penjadwalan!');
        return Redirect::to('penjadwalan');
    }



}