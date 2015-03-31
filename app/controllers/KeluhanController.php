<?php

class KeluhanController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry');
    }
    public function index()
    {
        $nama = User::nama();
        $keluhan = Keluhan::all();
        return View::make('keluhan.index')
            ->with ('keluhan', $keluhan)
            ->with ('nama', $nama);
    }

    public function create()
    {
        $nama = User::nama();
        return View::make('keluhan.tambahkeluhan')
            ->with ('nama', $nama);
    }

    public function store()
    {
        $rules = array(

            'keluhan'                => 'required'




        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('keluhan/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $keluhan = new Keluhan();
            $keluhan ->id_user             = Sentry::getUser()->id;
            $keluhan ->keluhan             = Input::get('keluhan');
            $keluhan ->status_keluhan      = 'Belum Diperbaiki';
            $keluhan ->tanggal_keluhan     = date("Y-m-d");
            $keluhan ->save();


            Session::flash('message', 'Successfully created keluhan!');
            return Redirect::to('keluhan');

        }
    }
    public function show ($id)
    {

    }

    public function edit($id)
    {
        $nama = User::nama();
        $keluhan = Keluhan::find($id);

        return View::make('keluhan.edit')
            ->with('keluhan', $keluhan)
            ->with ('nama', $nama);

    }
    public function update($id)
    {
        $rules = array(
            'keluhan'                => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('keluhan/' . $id . '/keluhan')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $tanggal = Input::get('tanggal_keluhan');
            $keluhan = Keluhan::find($id);
            $keluhan ->id_user             = Sentry::getUser()->id;
            $keluhan ->keluhan             = Input::get('keluhan');
            $keluhan ->status_keluhan      = 'Belum Diperbaiki';
            $keluhan ->tanggal_keluhan     = date('Y-m-d', strtotime($tanggal));
            $keluhan ->save();
            // redirect
            Session::flash('message', 'Successfully updated penghuni!');
            return Redirect::to('keluhan');
        }
    }

    public function destroy($id)
    {
        // delete
        $keluhan = Keluhan::find($id);
        $keluhan->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the keluhan!');
        return Redirect::to('keluhan');
    }



}
