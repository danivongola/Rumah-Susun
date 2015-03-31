<?php

class KamarController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry');
    }

    public function index()
    {
        $nama = User::nama();
        $kamar = Kamar::paginate(20);
        return View::make('kamar.index')
            ->with ('kamar', $kamar)
            ->with ('nama', $nama);
    }

    public function create()
    {
        $nama = User::nama();
        return View::make('kamar.tambahkamar')
            ->with ('nama', $nama);
    }

    public function store()
    {
        $rules = array(
            'id_kamar'            => 'required',
            'id_lantai'         => 'required',
            'detail_kamar'            => 'required',


        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('kamar/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $kamar = new Kamar();
            $kamar ->id_kamar         = Input::get('id_kamar');
            $kamar ->id_lantai        = Input::get('id_lantai');
            $kamar ->detail_kamar     = Input::get('detail_kamar');

            $kamar ->save();


            Session::flash('message', 'Successfully created kamar!');
            return Redirect::to('kamar');

        }
    }



    public function edit($id)
    {
        $nama = User::nama();
        $kamar = Kamar::find($id);

        return View::make('kamar.edit')
            ->with('kamar', $kamar)
            ->with ('nama', $nama);

    }


    public function update($id)
    {
           $rules = array(
               'id_kamar'            => 'required',
               'id_lantai'         => 'required',
               'detail_kamar'            => 'required'


            );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('kamar/' . $id . '/kamar')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store

            $kamar = Kamar::find($id);
            $kamar ->id_kamar         = Input::get('id_kamar');
            $kamar ->id_lantai        = Input::get('id_lantai');
            $kamar ->detail_kamar     = Input::get('detail_kamar');

            $kamar ->save();
            // redirect
            Session::flash('message', 'Successfully updated kamar!');
            return Redirect::to('kamar');
        }
    }

    public function destroy($id)
    {
        // delete
        $kamar = Kamar::find($id);
        $kamar->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the kamar!');
        return Redirect::to('kamar');
    }



}