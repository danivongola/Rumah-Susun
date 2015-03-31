<?php

class PenghuniController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry');
        $this->beforeFilter('inGroup:admin', array('only' =>array('index')));
    }

    public function index()
    {
        $nama = User::nama();
        $penghuni = Detailuser::all();
        return View::make('penghuni.index')
        ->with ('penghuni', $penghuni)
            ->with ('nama', $nama);

    }

    public function create()
    {
        $nama = User::nama();
        return View::make('penghuni.tambahpenghuni')
        ->with ('nama', $nama);
    }

    public function store()
    {
    $rules = array(
    'nama'           => 'required',
    'nik'            => 'required',
    'no_telepon'     => 'required',
    'pekerjaan'      => 'required',
    'gaji_bulanan'   => 'required',
    'tanggal_masuk'   => 'required',
    'tanggal_keluar' => 'required',
    'status'         => 'required',
    'jumlah_keluarga'=> 'required',
    'alamat'         => 'required',
    'email'          => 'required|email',
    'password'       => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
         return Redirect::to('penghuni/create')
           ->withErrors($validator)
         ->withInput(Input::except('password'));
    } else {
         $tanggal = Input::get('tanggal_masuk');
         $tanggal = Input::get('tanggal_keluar');
         $penghuni = new Penghuni;
         $penghuni ->nama                = Input::get('nama');
         $penghuni ->nik                 = Input::get('nik');
         $penghuni ->no_telepon          = Input::get('no_telepon');
         $penghuni ->pekerjaan           = Input::get('pekerjaan');
         $penghuni ->gaji_bulanan        = Input::get('gaji_bulanan');
         $penghuni ->tanggal_masuk       = date('Y-m-d', strtotime($tanggal));
         $penghuni ->tanggal_keluar      = date('Y-m-d', strtotime($tanggal));
         $penghuni ->status              = 'Menetap';
         $penghuni ->jumlah_keluarga     = Input::get('jumlah_keluarga');
         $penghuni ->alamat              = Input::get('alamat');
         $penghuni ->email               = Input::get('email');
         $penghuni ->password            = Input::get('password');
         $penghuni ->save();


         Session::flash('message', 'Successfully created penghuni!');
         return Redirect::to('penghuni');

     }
    }


    public function show($id)
    {
        $nama = User::nama();
        $penghuni = User::find($id);
        return View::make('penghuni.show')
            ->with ('penghuni', $penghuni)
            ->with ('nama', $nama);
    }

    public function edit($id)
    {
        $nama = User::nama();
        $penghuni = User::find($id);

        return View::make('penghuni.edit')
            ->with('penghuni', $penghuni)
            ->with ('nama', $nama);

    }


    public function update($id)
    {
        $rules = array(
            'nama'              => 'required',
            'nik'               => 'required',
            'alamat'            => 'required',
            'no_telepon'        => 'required',
            'pekerjaan'         => 'required',
            'gaji_bulanan'      => 'required',
            'jumlah_keluarga'   => 'required',

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('penghuni/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $penghuni = Detailuser::find($id);
            $penghuni ->nama                = Input::get('nama');
            $penghuni ->nik                 = Input::get('nik');
            $penghuni ->alamat              = Input::get('alamat');
            $penghuni ->no_telepon          = Input::get('no_telepon');
            $penghuni ->pekerjaan           = Input::get('pekerjaan');
            $penghuni ->gaji_bulanan        = Input::get('gaji_bulanan');
            $penghuni ->jumlah_keluarga     = Input::get('jumlah_keluarga');
            $penghuni ->save();
            // redirect
            Session::flash('message', 'Successfully updated penghuni!');
            return Redirect::to('penghuni');
        }
    }

    public function destroy($id)
    {
        // delete
        $penghuni = Detailuser::find($id);
        $penghuni->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the penghuni!');
        return Redirect::to('penghuni');
    }

   public  function cpls ()
   {

   }

}