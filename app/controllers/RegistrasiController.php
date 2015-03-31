<?php

class RegistrasiController extends \BaseController {

    public function index()
    {
        $register = Detailuser::where('status', '=', 'calonpenghuni')->get();
        return View::make('home.indexformulir')
            ->with ('calonpenghuni', $register);
    }

    public function create($userid)
    {
        $user=User::find($userid);
        return View::make('home.formulir')->with('user', $user);
    }

    public function store($userid)
    {
        $rules = array(
            'nama'                         => 'required',
            'nik'                          => 'required',
            'alamat'                       => 'required',
            'no_telepon'                   => 'required',
            'pekerjaan'                    => 'required',
            'gaji_bulanan'                 => 'required',
            'tanggal_masuk'                => 'required',
            'tanggal_keluar'               => 'required',
            'status'                       => 'required',
            'jumlah_keluarga'              => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('calonpenghuni/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $register = new Detailuser();
            $register ->id_user                     = $userid;
            $register ->nama                        = Input::get('nama');
            $register ->nik                         = Input::get('nik');
            $register ->alamat                      = Input::get('alamat');
            $register ->no_telepon                  = Input::get('no_telepon');
            $register ->pekerjaan                   = Input::get('pekerjaan');
            $register ->gaji_bulanan                = Input::get('gaji_bulanan');
            $register ->tanggal_masuk               = Input::get('tanggal_masuk');
            $register ->tanggal_keluar              = Input::get('tanggal_keluar');
            $register ->status                      = Input::get('status');
            $register ->jumlah_keluarga             = Input::get('jumlah_keluarga');
            $register ->save();


            Session::flash('message', 'Successfully created calonpenghuni!');
            return Redirect::to('home/pilihan');

        }
    }


    //public function show()
    //{
    // $tbpenghuni = Tbpenghuni::find();

    //return View::make('penghuni.showpenghuni')
    //  ->with('penghuni', $tbpenghuni);
    //}

    //}



    public function show()
    {
        //return View::make('home.calonpenghuni');
    }


    public function edit($id)
    {
        $register = Detailuser::find($id);

        return View::make('calonpenghuni.edit')
            ->with('calonpenghuni', $register);

    }


    public function update($id)
    {
        $rules = array(
            'nama'                         => 'required',
            'nik'                          => 'required',
            'nik'                          => 'required',
            'no_telepon'                   => 'required',
            'pekerjaan'                    => 'required',
            'gaji_bulanan'                 => 'required',
            'tanggal_masuk'                => 'required',
            'tanggal_keluar'               => 'required',
            'status'                       => 'required',
            'jumlah_keluarga'              => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('calonpenghuni/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $register =Detailuser::find($id);
            $register ->nama                        = Input::get('nama');
            $register ->nik                         = Input::get('nik');
            $register ->alamat                      = Input::get('alamat');
            $register ->no_telepon                  = Input::get('no_telepon');
            $register ->pekerjaan                   = Input::get('pekerjaan');
            $register ->gaji_bulanan                = Input::get('gaji_bulanan');
            $register ->tanggal_masuk               = Input::get('tanggal_masuk');
            $register ->tanggal_keluar              = Input::get('tanggal_keluar');
            $register ->status                      = Input::get('status');
            $register ->jumlah_keluarga             = Input::get('jumlah_keluarga');
            $register ->save();
            // redirect
            Session::flash('message', 'Successfully updated daftartunggu!');
            return Redirect::to('calonpenghuni');
        }
    }
    public function destroy($id)
    {
        // delete
        $register = Detailuser::find($id);
        $register->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the calonpenghuni!');
        return Redirect::to('calonpenghuni');
    }

}
