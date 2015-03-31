<?php


class Kamar extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbkamar';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public  function users ()
    {
        return $this->belongsTo('User', 'id_user', 'id');
    }
    public function nama ()
    {

    }
    public function biaya ()
    {
        return $this->hasOne('Biaya', 'id_kamar', 'id');
    }
}



