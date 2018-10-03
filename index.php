<!DOCTYPE html>
<?php
/*
* Author: Tyler Smith
* Date:   09/18/2018
*/
?> 

    <head>
        <meta charset="UTF-8">
        <title>Statistical analysis of results from rolling a six-sided die</title>
        <style>
            .center {
                margin: auto;
                position: relative;
                width: 25%;
                text-align: center;
            }
            
            .centerHeading{
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <h2 class="centerHeading">Statistical analysis of results from rolling a six-sided die</h2>
        
        <?php
        // Initialize variables
        $frequency1 = 0;
        $frequency2 = 0;
        $frequency3 = 0;
        $frequency4 = 0;
        $frequency5 = 0;
        $frequency6 = 0;
        
        // Loop 5000 times for dice roll
        for($i = 0; $i < 5000; $i++)
        {
            $face = rand(1, 6);
            switch ($face){
                case 1:
                    $frequency1++;
                    break;
                case 2:
                    $frequency2++;
                    break;
                case 3:
                    $frequency3++;
                    break;
                case 4:
                    $frequency4++;
                    break;
                case 5:
                    $frequency5++;
                    break;
                case 6:
                    $frequency6++;
                    break;
            }
        }
        ?>
        
        <!-- Table displaying frequencies -->
        <table class="center" border="1">
            <thead>
                <tr>
                    <th>Face</th>
                    <th>Frequency</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?php echo $frequency1 ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><?php echo $frequency2 ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><?php echo $frequency3 ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><?php echo $frequency4 ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><?php echo $frequency5 ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><?php echo $frequency6 ?></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Refresh button -->
        <br>
        <input class="centerHeading" type="submit" value="Refresh" onclick="window.location.reload()" style="display: block; margin: 0 auto;" />
    </body>