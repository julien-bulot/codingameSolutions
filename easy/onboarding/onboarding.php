<?php
/**
 * CodinGame planet is being attacked by slimy insectoid aliens.
 **/

while (TRUE)
{
    // $enemy1: name of enemy 1
    fscanf(STDIN, "%s", $enemy1);
    // $dist1: distance to enemy 1
    fscanf(STDIN, "%d", $dist1);
    // $enemy2: name of enemy 2
    fscanf(STDIN, "%s", $enemy2);
    // $dist2: distance to enemy 2
    fscanf(STDIN, "%d", $dist2);

    $name = $dist1 < $dist2 ? $enemy1 : $enemy2;

    // You have to output a correct ship name to shoot ("Buzz", enemy1, enemy2, ...)
    echo($name . "\n");
}
?>