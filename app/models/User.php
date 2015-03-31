<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function detailuser ()
    {
        return $this->hasOne('Detailuser', 'id_user', 'id');
    }
    public function groups ()
    {
        return $this->belongsToMany('Group', 'users_groups', 'user_id', 'group_id');
    }
    public function kamar ()
    {
        return $this->hasOne('Kamar', 'id_user', 'id');
    }
      public static function nama()
    {
        if(!Sentry::check()) return false;
        // get id current user
        $user_id = Sentry::getUser()->id;
        // select thumbnail from user eav table
        return User::find($user_id)->detailuser;

    }
    public function delete()
    {
        // delete all related table
        // one to many relationship
        $this->detailuser()->delete();



        // delete the user
        return parent::delete();
    }

    // check current user access is admin
    public function isAdmin()
    {
        if(!Sentry::check()) return false;
        return Sentry::getUser()->hasAccess('admin');
    }

   }


