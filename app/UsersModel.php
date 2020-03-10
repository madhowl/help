<?php


namespace App;
use RedBeanPHP\R ;



class UsersModel extends \RedBeanPHP\SimpleModel
{
    public $user;

    public function __construct()
    {
        R::setup( 'sqlite:dbSqlite.db' );
        $this->user = R::dispense('users');
        $this->user->author = "Santa Claus";
        $this->user->title = "Secrets of Christmas";
        $id = R::store( $this->user );
    }

    public function getAll()
    {
        return  R::findAll( 'users' );
    }

}