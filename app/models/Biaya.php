<?php


class Biaya extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbbiaya';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


     public function kamar ()
     {
         return $this->belongsTo('Kamar', 'id_kamar' , 'id');
     }
    public function detailuser ()
    {
        return $this->belongsTo ('Detailuser', 'id_detailuser' , 'id');
    }
}
