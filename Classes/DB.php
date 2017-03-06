<?php

namespace Classes;

/* Abstract means no instantiation.
It has to be inherited by another class.
Abstract-->just declaration , no definition.
*/

abstract class DB
{
    const DB = 'pagevamp_task';
    const PASSWORD = '';
    const USERNAME = 'root';
    const HOST = 'localhost';


/* This is a constructor function.
Basically, this is used to initialized an instance(object)
*/
    public function __construct()
    {
        $this->db = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB);
    }
}
