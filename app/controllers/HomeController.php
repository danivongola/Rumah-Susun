<?php

class HomeController extends BaseController {
    public function __construct(){
        $this->beforeFilter('Sentry', array('except'=>array('getIndex')));
         }

public function getIndex()
{



    return View::make('home.index');

}

      public function getPilihan()
    {
        $nama = User::nama();
        $user_id = Sentry::getUser()->id;
        $kamar = Kamar::where('id_user', '=', $user_id)->first();
        $user = User::find($user_id);
        //dd($kamar->biaya->id); exit;
        return View::make('home.pilihan')->with('kamar', $kamar)
            ->with('user', $user)
            ->with ('nama', $nama);
    }





}

