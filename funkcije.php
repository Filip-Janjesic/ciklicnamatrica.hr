<?php

function inputCheck ()
{

    if(!(isset($_POST['red'])) || !(isset($_POST['stupac']))){
        return 1;
    }else{
        return 2;
    }

}

function correctInput ()
{

    if(isset($_POST['submit'])){

        if(preg_match("/^[a-zA-Z]*$/", $_POST['red']) || preg_match("/^[a-zA-Z]*$/", $_POST['stupac'])){
            return 1;
        }else{
            return 2;
        }
    }

}

function aboveZero ()
{

    if(isset($_POST['submit'])){
        $red = $_POST['red'];
        $stupac = $_POST['stupac'];

        if($stupac <= 0 || $red <= 0){
            return 1 ;
        }
    }else{
        return 2 ;
    }

}

function inputEmpty ()
{

    if(empty($_POST['red']) || empty($_POST['stupac']))
    return 1;
    else{
        return 2;
    }

}