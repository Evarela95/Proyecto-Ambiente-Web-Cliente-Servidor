<?php

    function OpenDB()
    {
        return mysqli_connect("localhost:3308", "root", "", "justgame");
    }

    function CloseDB($enlace)
    {
        mysqli_close($enlace);
    }

?>