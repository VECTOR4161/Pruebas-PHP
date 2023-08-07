<?php

    include_once "Person.php";
    include_once "User.php";
    include_once "Admin.php";

    $user = new User;
    $user->type = new Admin;
    echo $user->type->greet();