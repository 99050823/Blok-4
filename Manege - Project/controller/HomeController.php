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
        $data = getAllRides();
        render('home/rides', $data);
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
        header("Location:/Blok-4/Manege%20-%20Project/home");
    }

    function editUser () {
        render('home/editUser');
    }

    function updateUser ($id, $name, $adress, $phone) {
        editUserRecord($id, $name, $adress, $phone);
        header("Location:/Blok-4/Manege%20-%20Project/home");
    }

    //Rides controll
    function createRide ($user, $horse, $time) {
        $total = $time * 55;
        addRide($user, $horse, $time, $total);
    }
    
    function editRide () {
        $dataArr = array();

        $userData = getNamesUsers();
        $animalData = getNamesAnimals();

        array_push($dataArr, $userData, $animalData);

        render('home/editRide', $dataArr);
    }

    function updateRide ($id, $user, $horse, $time) {
        editRideRecord($id, $user, $horse, $time);
        header("Location:/Blok-4/Manege%20-%20Project/home");
    }

    //Delete All 
    function deleteAllfunc ($table) {
        deleteAll($table);
        header("Location:/Blok-4/Manege%20-%20Project/home");
    } 

    //Delete single 
    function deleteSinglefunc () {
        echo 'test';
        $id = $_GET['var'];
        $table = $_GET['table'];
        deleteSingle($id, $table);
        header("Location:/Blok-4/Manege%20-%20Project/home");
    }
?>