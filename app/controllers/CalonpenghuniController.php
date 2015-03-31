<?php

class CalonpenghuniController extends \BaseController {

    public function index()
    {
        $nama = User::nama();
        $calonpenghuni = Masteruser::where('status', '=', 'calonpenghuni')->get();
        return View::make('home.indexmasteruser')
            ->with ('calonpenghuni', $calonpenghuni)
            ->with ('nama', $nama);

    }

    public function create($userid)
    {
        $nama = User::nama();
        $user=User::find($userid);
        return View::make('home.masteruser')->with('user', $user)
            ->with ('nama', $nama);
    }

    public function store($userid)
    {
        $rules = array(
            'id_calonpenghuni'       => 'required',
            'nama_calonpeghuni'      => 'required',
            'nik'                    => 'required',
            'alamat'                 => 'required',
            'no_telepon'             => 'required',
            'pekerjaan'              => 'required',
            'gaji_bulanan'           => 'required',
            'lama_sewa'              => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('calonpenghuni/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $calonpenghuni = new Calonpenghuni();
            $calonpenghuni ->id_calonpenghuni               = Input::get('id_calonpenghuni');
            $calonpenghuni ->nama_calonpenghuni             = Input::get('nama_calonpenghuni');
            $calonpenghuni ->nik                            = Input::get('nik');
            $calonpenghuni ->alamat                         = Input::get('alamat');
            $calonpenghuni ->no_telepon                     = Input::get('no_telepon');
            $calonpenghuni ->pekerjaan                      = Input::get('pekerjaan');
            $calonpenghuni ->gaji_bulanan                   = Input::get('gaji_bulanan');
            $calonpenghuni ->lama_sewa                      = Input::get('lama_sewa');
            $calonpenghuni ->save();


            Session::flash('message', 'Successfully created calonpenghuni!');
            return Redirect::to('calonpenghuni');

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
        $nama = User::nama();
        $calonpenghuni = Calonpenghuni::find($id);

        return View::make('calonpenghuni.edit')
            ->with('calonpenghuni', $calonpenghuni)
            ->with ('nama', $nama);

    }


    public function update($id)
    {
        $rules = array(
            'id_calonpenghuni'       => 'required',
            'nama_calonpeghuni'      => 'required',
            'nik'                    => 'required',
            'alamat'                 => 'required',
            'no_telepon'             => 'required',
            'pekerjaan'              => 'required',
            'gaji_bulanan'           => 'required',
            'lama_sewa'              => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('calonpenghuni/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $calonpenghuni =Calonpenghuni::find($id);
            $calonpenghuni ->id_calonpenghuni               = Input::get('id_calonpenghuni');
            $calonpenghuni ->nama_calonpenghuni             = Input::get('nama_calonpenghuni');
            $calonpenghuni ->nik                            = Input::get('nik');
            $calonpenghuni ->alamat                         = Input::get('alamat');
            $calonpenghuni ->no_telepon                     = Input::get('no_telepon');
            $calonpenghuni ->pekerjaan                      = Input::get('pekerjaan');
            $calonpenghuni ->gaji_bulanan                   = Input::get('gaji_bulanan');
            $calonpenghuni ->lama_sewa                      = Input::get('lama_sewa');
            $calonpenghuni ->save();
            // redirect
            Session::flash('message', 'Successfully updated daftartunggu!');
            return Redirect::to('calonpenghuni');
        }
    }
    public function destroy($id)
    {
        // delete
        $calonpenghuni = Calonpenghuni::find($id);
        $calonpenghuni->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the calonpenghuni!');
        return Redirect::to('calonpenghuni');
    }

}
