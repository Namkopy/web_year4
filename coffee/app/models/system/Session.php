<?php
namespace models\system;

class Session
{
    public function __construct()
    {
        session_start();
    }
}
$session= new Session();
