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