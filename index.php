<?php

        if(isset($_GET['stranka'])){
            $stranka=$_GET['stranka'];
        }
        else{
            $stranka="one";
        }
        $vlozeno=include (''.$stranka.'.php');

        if (!$vlozeno){
                echo('Podstránka nenalezena');
        }
        elseif($vlozeno){
            echo('');
        }
        else
            echo('Neplatný parametr.');

            include("footer.php");

    ?>