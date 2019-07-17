<?php

class Connection
{

    public static function make($conifg)
    {
        try {

            //return new PDO('mysql:host=127.0.0.1;dbname=Test_data_base', 'root', 'secret');

            return new PDO(
                $conifg['connection'] . ';dbname=' . $conifg['name'],
                $conifg['username'],
                $conifg['password'],
                $conifg['options']
            );
        } catch (PDOException $ex) {
            die('could not connect: ' . $ex->getMessage());
        }
    }
}
