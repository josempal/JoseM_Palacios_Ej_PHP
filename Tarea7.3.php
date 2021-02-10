<?php

    $langosta = 60;
    $angulas = 71;
    $caviar = 90;

    $a = 50;
    $b = 70;
    $c = 500;

    if (($langosta > $a AND  $angulas > $a) OR ($langosta > $a  AND  $caviar > $a) OR ($angulas > $a AND  $caviar > $a)) {

        print "cierto <br>";
    } else {

        print "falso <br>";
    }

    if (($langosta > $b AND  $angulas > $b) OR ($langosta > $b  AND  $caviar > $b) OR ($angulas > $b AND  $caviar > $b)) {


        print "cierto <br>";
    } else {

        print "falso <br>";
    }

    if (($langosta > $c AND  $angulas > $c) OR ($langosta > $c  AND  $caviar > $c) OR ($angulas > $c AND  $caviar > $c)) {


        print "cierto <br>";
    } else {

        print "falso <br>";
    }
?>