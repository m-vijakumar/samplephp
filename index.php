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
    </head>
    <body>
        <table>
            <tr>
            <th>&nbsp;&nbsp;&nbsp;</th> 
        <?php
        // put your code here
        for($i=1;$i<=12;$i++):
            echo '&nbsp;&nbsp;&nbsp;<th>'.$i.'&nbsp;</th>';
        endfor;
        echo '</tr><tr>';
            for($i=1;$i<=12;$i++){
                echo "<th>$i</th>";
                for($j=1;$j<=12;$j++){
                     ?><td>&nbsp;&nbsp;
            <?php  echo $i*$j; ?></td><?php 
                }
                echo "</tr><br>";
            }
       ?>
        </table>
    </body>
</html>
