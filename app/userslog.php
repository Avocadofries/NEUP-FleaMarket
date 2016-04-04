<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class userslog extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'users';

    protected $hidden = array('password');

    public static $rules = [
        'username' => 'required|alpha_num|min:2',
        'realname' => 'required',
        'email'=>'required|email|unique:badmin',
        'password'=>'required|alpha_num|between:6,12|confirmed',
    ];
}