<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
            body {
                background-image: url(images/backimg1.jpg);
            }
            table tr td{
                border: 2px solid black;
                background-color: #ffc277;
                text-align: center;
                padding: 3px;
            }
            
            table{
                width: 500px;
                height: 200px;
                margin: auto;
            }

            table th {
                border: 2px solid red;
                padding: 3px;
                background-color: #2a2d2d;
                font-size: 16pt;
                font-style: italic;
                color: white;
                width: 50px;
                height: 60px;
            }

        </style>
    </head>
    <body>
        <?php
        $start = $_GET['box1'];
        $end = $_GET['box2'];
        $step = $_GET['box3'];

        $a = $_GET["d1"];
        $b = $_GET["d2"];

        if ($a === 'CA' && $b === 'EURO') {
            $choice = 'c2e'; //
        } elseif ($a === 'CA' && $b === 'INR') {
            $choice = 'c2i'; //
        } elseif ($a === 'INR' && $b === 'CA') {
            $choice = 'i2c'; //
        } elseif ($a === 'INR' && $b === 'EURO') {
            $choice = 'i2e'; //
        } elseif ($a === 'EURO' && $b === 'INR') {
            $choice = 'e2i'; //
        } elseif ($a === 'EURO' && $b === 'CA') {
            $choice = 'e2c'; //
        } elseif ($a === 'POUND' && $b === 'CA') {
            $choice = 'p2c'; //
        } elseif ($a === 'POUND' && $b === 'INR') {
            $choice = 'p2i'; //
        } elseif ($a === 'POUND' && $b === 'EURO') {
            $choice = 'p2e'; //
        } elseif ($a === 'CA' && $b === 'POUND') {
            $choice = 'c2p'; //
        } elseif ($a === 'INR' && $b === 'POUND') {
            $choice = 'i2p'; //
        } elseif ($a === 'EURO' && $b === 'POUND') {
            $choice = 'e2p'; //
        } elseif ($a === 'DINAR' && $b === 'CA') {
            $choice = 'd2c'; //
        } elseif ($a === 'DINAR' && $b === 'INR') {
            $choice = 'd2i'; //
        } elseif ($a === 'DINAR' && $b === 'EURO') {
            $choice = 'd2e'; //
        } elseif ($a === 'DINAR' && $b === 'POUND') {
            $choice = 'd2p'; //
        } elseif ($a === 'CA' && $b === 'DINAR') {
            $choice = 'c2d'; //
        } elseif ($a === 'INR' && $b === 'DINAR') {
            $choice = 'i2d'; //
        } elseif ($a === 'EURO' && $b === 'DINAR') {
            $choice = 'e2d'; //
        } elseif ($a === 'POUND' && $b === 'DINAR') {
            $choice = 'p2d'; //
        }

        switch ($choice) {
            case "c2i":
                echo "<table><tr><th>Canadian $</th><th>Indian Rupee</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 56 . "</td></tr>";
                }echo "</table>";
                exit();
            case "i2c":
                echo "<table><tr><th>Indian Rupee</th><th>Canadian $</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x / 56 . "</td></tr>";
                }echo "</table>";
                exit();
            case "c2e":
                echo "<table><tr><th>Canadian $</th><th>European Euro</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.66 . "</td></tr>";
                }echo "</table>";
                exit();
            case "i2e":
                echo "<table><tr><th>Indian Rupee</th><th>European Euro</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.012 . "</td></tr>";
                }echo "</table>";
                exit();
            case "e2i":
                echo "<table><tr><th>European Euro</th><th>Indian Rupee</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 84.94 . "</td></tr>";
                }echo "</table>";
                exit();
            case "e2c":
                echo "<table><tr><th>European Euro</th><th>Canadian $</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 1.51 . "</td></tr>";
                }echo "</table>";
                exit();
            case "p2c":
                echo "<table><tr><th>British Pound</th><th>Canadian $</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 1.71 . "</td></tr>";
                }echo "</table>";
                exit();
            case "p2i":
                echo "<table><tr><th>British Pound</th><th>Indian Rupee</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 95.66 . "</td></tr>";
                }echo "</table>";
                exit();
            case "p2e":
                echo "<table><tr><th>British Pound</th><th>European Euro</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 1.13 . "</td></tr>";
                }echo "</table>";
                exit();
            case "c2p":
                echo "<table><tr><th>Canadian $</th><th>British Pound</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.59 . "</td></tr>";
                }echo "</table>";
                exit();
            case "i2p":
                echo "<table><tr><th>Indian Rupee</th><th>British Pound</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.010 . "</td></tr>";
                }echo "</table>";
                exit();
            case "e2p":
                echo "<table><tr><th>European Euro</th><th>British Pound</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.89 . "</td></tr>";
                }echo "</table>";
                exit();
            case "d2c":
                echo "<table><tr><th>Kuwaiti Dinar</th><th>Canadian $</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.0011 . "</td></tr>";
                }echo "</table>";
                exit();
            case "d2i":
                echo "<table><tr><th>Kuwaiti Dinar</th><th>Indian Rupee</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 240.15 . "</td></tr>";
                }echo "</table>";
                exit();
            case "d2e":
                echo "<table><tr><th>Kuwaiti Dinar</th><th>European Euro</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 2.83 . "</td></tr>";
                }echo "</table>";
                exit();
            case "d2p":
                echo "<table><tr><th>Kuwaiti Dinar</th><th>British Pound</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 2.51 . "</td></tr>";
                }echo "</table>";
                exit();
            case "c2d":
                echo "<table><tr><th>Canadian $</th><th>Kuwaiti Dinar</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.23 . "</td></tr>";
                }echo "</table>";
                exit();
            case "i2d":
                echo "<table><tr><th>Indian Rupee</th><th>Kuwaiti Dinar</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.0042 . "</td></tr>";
                }echo "</table>";
                exit();
            case "e2d":
                echo "<table><tr><th>European Euro</th><th>Kuwaiti Dinar</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.35 . "</td></tr>";
                }echo "</table>";
                exit();
            case "p2d":
                echo "<table><tr><th>British Pound</th><th>Kuwaiti Dinar</th></tr>";
                for ($x = $start; $x <= $end; $x = $x + $step) {
                    echo "<tr><td>$x</td><td>" . $x * 0.40 . "</td></tr>";
                }echo "</table>";
                exit();
        }
        ?>
    </body>
</html>

