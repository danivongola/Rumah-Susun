<?php


class DaftartungguController extends \BaseController {

    public function index()
    {
        $nama = User::nama();
        $daftartunggu = User::all();
        return View::make('daftartunggu.index')
            ->with ('daftartunggu', $daftartunggu)
            ->with ('nama', $nama);
        //$group = Sentry::findGroupByName('calonpenghuni');
       // $daftartunggu= Sentry::findAllUsersInGroup($group);
        //$daftartunggu = $calonpenghuni->all();
        //return View::make('daftartunggu.index')
          //  ->with ('daftartunggu', $daftartunggu);
    }


    public function create($id)
    {
        $nama = User::nama();
        return View::make('daftartunggu.tambahdaftartunggu')
        ->with ('nama', $nama);
    }

    public function store($id)
    {
        $rules = array(
            'nama'     => 'required',
            'nik'                    => 'required',
            'alamat'                 => 'required',
            'no_telepon'             => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('daftartunggu/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $daftartunggu = new User($id);
            $daftartunggu ->nama                   = Input::get('namai');
            $daftartunggu ->nik                    = Input::get('nik');
            $daftartunggu ->alamat                 = Input::get('alamat');
            $daftartunggu ->no_telepon             = Input::get('no_telepon');
            $daftartunggu ->save();


            Session::flash('message', 'Successfully created daftartunggu!');
            return Redirect::to('daftartunggu');

        }
    }

    public function show($id)
    {
        $daftartunggu =User::find($id);
        return View::make('daftartunggu.index')
            ->with('daftartunggu',$daftartunggu);
    }


      public function edit($id)
    {
        $nama = User::nama();
        $daftartunggu = User::find($id);

        return View::make('daftartunggu.edit')
            ->with('daftartunggu', $daftartunggu)
            ->with ('nama', $nama);

    }


    public function update($id)
    {
        $rules = array(
            'nama'                   => 'required',
            'nik'                    => 'required',
            'alamat'                 => 'required',
            'no_telepon'             => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('daftartunggu/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $daftartunggu =User::find($id);
            $daftartunggu ->nama                   = Input::get('nama');
            $daftartunggu ->nik                    = Input::get('nik');
            $daftartunggu ->alamat                 = Input::get('alamat');
            $daftartunggu ->no_telepon             = Input::get('no_telepon');
            $daftartunggu ->save();
            // redirect
            Session::flash('message', 'Successfully updated daftartunggu!');
            return Redirect::to('daftartunggu');
        }
    }

    public function destroy($id)
    {
        // delete
        $daftartunggu = Daftartunggu::find($id);
        $daftartunggu->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the daftartunggu!');
        return Redirect::to('daftartunggu');
    }



}