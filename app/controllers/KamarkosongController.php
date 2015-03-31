<?php

class KamarkosongController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry');
    }

    public function index()
    {
        $nama = User::nama();
        $user_id = Sentry::getUser()->id;
        $user = User::find($user_id);
        $kamarkosong = Kamar::where('id_user','=', 0)->paginate(20);
        return View::make('kamarkosong.index')
            ->with ('kamarkosong', $kamarkosong)
            ->with ('user', $user)
            ->with ('nama', $nama);
    }

    public function create()
    {
        $nama = User::nama();
        return View::make('kamarkosong.tambahkamar')
        ->with ('nama', $nama);
    }

    public function store()
    {
        $rules = array(
            'no_kamar'            => 'required',
            'lantai'              => 'required',
            'hargakamar'          => 'required',


        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('kamarkosong/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $kamarkosong = new Kamar();
            $kamarkosong ->no_kamar        = Input::get('no_kamar');
            $kamarkosong ->lantai          = Input::get('lantai');
            $kamarkosong ->harga_kamar     = Input::get('harga_kamar');

            $kamarkosong ->save();


            Session::flash('message', 'Successfully created kamar!');
            return Redirect::to('kamarkosong');

        }
    }



    public function edit($id)
    {
        $kamarkosong = Kamar::find($id);

        return View::make('kamarkosong.edit')
            ->with('kamarkosong', $kamarkosong);

    }


    public function update($id)
    {
        $rules = array(
            'no_kamar'               => 'required',
            'lantai'                 => 'required',
            'harga_kamar'            => 'required'


        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('kamar/' . $id . '/kamar')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store

            $kamarkosong = Kamar::find($id);
            $kamarkosong ->no_kamar         = Input::get('no_kamar');
            $kamarkosong ->lantai           = Input::get('lantai');
            $kamarkosong ->harga_kamar      = Input::get('harga_kamar');

            $kamarkosong ->save();
            // redirect
            Session::flash('message', 'Successfully updated kamar!');
            return Redirect::to('kamark');
        }
    }

    public function destroy($id)
    {
        // delete
        $kamarkosong = Kamar::find($id);
        $kamarkosong->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the kamar!');
        return Redirect::to('kamar');
    }



}