<?php

    function OpenDB()
    {
        return mysqli_connect("localhost:3306", "root", "", "justgame");
    }

    function CloseDB($enlace)
    {
        mysqli_close($enlace);
    }

?>