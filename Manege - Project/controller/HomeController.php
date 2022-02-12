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
        $dataArr = array();

        $userData = getNamesUsers();
        $animalData = getNamesAnimals();

        array_push($dataArr, $userData, $animalData);

        render('home/reservation', $dataArr);
    }

    //User controll
    function createUser ($name, $adress, $phone) {
        addUser($name, $adress, $phone);
    }

    //Rides controll
    function createRide ($user, $horse, $time) {
        addRide($user, $horse, $time);
    } 
?>