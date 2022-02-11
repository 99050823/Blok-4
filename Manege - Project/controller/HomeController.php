<?php
    require(ROOT . "model/HomeModel.php");

    //Tab controll
    function index () {
        render('home/index');
    }

    function users () {
        $data = getAllUsers();
        render('home/users', $data);
    }

    function rides () {
        render('home/rides');
    }

    function reservation () {
        render('home/reservation');
    }

    //User controll
    function createUser ($name, $adress, $phone) {
        addUser($name, $adress, $phone);
    }
?>