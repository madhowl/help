<?php


namespace App;


class UsersController
{
    public $user;
    public function __construct()
    {
        $this->user = new UsersModel;
    }

    public function index()
    {
        echo '<pre>';
        print_r( $this->user->getAll());
        echo '/<pre>';
    }
}