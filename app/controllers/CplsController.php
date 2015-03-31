<?php


class CplsController extends \BaseController {

    public function index()
    {
        $nama = User::nama();
        $daftartunggu = Group::where('name', '=', 'calonpenghuni')->first();
//            dd($daftartunggu->users->first()->email);exit;
        return View::make('cpls.index')
            ->with ('daftartunggu', $daftartunggu)
            ->with ('nama', $nama);
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

        return View::make('cpls.generate')
            ->with('daftartunggu', $daftartunggu)
            ->with ('nama', $nama);

    }


    public function update($id)
    {
        $rules = array(
           'tanggal_masuk'  => 'required',
             'tanggal_keluar'  => 'required'


        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('cpls/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $masuk = Input::get('tanggal_masuk');
            $keluar = Input::get('tanggal_keluar');
            $user=User::where('id', '=', $id)->first();
            $daftartunggu = Detailuser::find($user->detailuser->id);
            $daftartunggu ->tanggal_masuk        = date('Y-m-d', strtotime($masuk));
            $daftartunggu ->tanggal_keluar       = date('Y-m-d', strtotime($keluar));
            $daftartunggu -> save();
            $group = $user->groups->first();
            $clps = 
            // redirect
            Session::flash('message', 'Successfully updated daftartunggu!');
            return Redirect::to('cpls');
        }
    }

    public function destroy($id)
    {
        // delete
        $daftartunggu = User::find($id);
        $daftartunggu->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the daftartunggu!');
        return Redirect::to('daftartunggu');
    }



}