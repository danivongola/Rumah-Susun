<?php

class PerpanjanganController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry');
    }

    public function index()
    {
        $nama = User::nama();
        $perpanjangan = User::all();
        return View::make('perpanjangan.index')
            ->with ('perpanjangan', $perpanjangan)
            ->with ('nama', $nama);
    }

    public function create()
    {
        $nama = User::nama();
        return View::make('perpanjangan.tambahperpanjangan')
            ->with ('nama', $nama);
    }

    public function store()
    {
        $rules = array(
            'id_registrasi'       => 'required',
            'id_kamar'            => 'required',
            'tanggal_masuk'       => 'required',
            'tanggal_keluar'      => 'required',
            'status'              => 'required',
            'lama_perpanjangan'   => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('perpanjangan/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $perpanjangan = new User();
            $perpanjangan ->id_registrasi        = Input::get('id_registrasi');
            $perpanjangan ->id_kamar             = Input::get('id_kamar');
            $perpanjangan ->tanggal_masuk        = Input::get('tanggal_masuk');
            $perpanjangan ->tanggal_keluar       = Input::get('tanggal_keluar');
            $perpanjangan ->status               = Input::get('status');
            $perpanjangan ->lama_perpanjangan    = Input::get('lama_perpanjangan');
            $perpanjangan ->save();


            Session::flash('message', 'Successfully created perpanjangan!');
            return Redirect::to('perpanjangan');

        }
    }

   public function edit($id)
    {
        $nama = User::nama();
        $user = User::find($id);
        return View::make('perpanjangan.edit')
            ->with('user', $user)
            ->with ('nama', $nama);

    }

    public function update($id)
    {
        $rules = array(

            'tanggal_masuk'       => 'required',
            'tanggal_keluar'      => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('perpanjangan/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user=User::where('id', '=', $id)->first();
            $perpanjangan = Detailuser::find($user->detailuser->id);
            $perpanjangan ->tanggal_masuk        = Input::get('tanggal_masuk');
            $perpanjangan ->tanggal_keluar       = Input::get('tanggal_keluar');
            $perpanjangan ->status               = 'Perpanjangan';
            $perpanjangan ->save();


            // redirect
            Session::flash('message', 'Successfully updated perpanjangan!');
            return Redirect::to('penghuni/'.$id);
        }
    }

    public function destroy($id)
    {
        // delete
        $perpanjangan = User::find($id);
        $perpanjangan->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the perpanjangan!');
        return Redirect::to('perpanjangan');
    }



}