<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calendar</title>
    </head>
    <body>
        Default Table setup
        <table>
            <?php
            for ($j = 0; $j < 7; $j++) {
                echo "<th>";
            }
            echo "<tr>";
            for($i = 1; $i <= 31; $i++) {
                echo "<td style='text-align:center; background-color:lightgreen; width:20px; height:20px; border:1px solid black;'>".$i."</td>";
                if ($i % 7 == 0) {
                    echo "</tr><tr>";
                }
            }
            echo "</tr>"
            ?>
        </table>
        
        <br>Table Starts on Wednesday
        <table>
            <?php
            $offset = 3;
            for ($j = 0; $j < 7; $j++) {
                echo "<th>";
            }
            
            echo "<tr>";
            
            for ($k = 0; $k < $offset; $k++) {
                echo "<td>"." "."</td>";
            }
            
            for($i = 1; $i <= 31; $i++) {
                echo "<td style='text-align:center; background-color:lightgreen; width:20px; height:20px; border:1px solid black;'>".$i."</td>";
                if ($i % 7 == $offset + 1) {
                    echo "</tr><tr>";
                }
            }
            echo "</tr>"
            ?>
        </table>
    </body>
</html>
