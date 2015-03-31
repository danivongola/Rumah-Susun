<?php
/**
 * Created by PhpStorm.
 * User: danivongola
 * Date: 2/18/15
 * Time: 11:49 AM
 */
class Group extends Eloquent
{
    public function users()
    {
        return $this->belongsToMany('User','users_groups', 'group_id', 'user_id');
    }


}
