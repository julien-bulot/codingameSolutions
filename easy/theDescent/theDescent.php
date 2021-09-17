<?php
/**
 * The while loop represents the game.
 * Each iteration represents a turn of the game
 * where you are given inputs (the heights of the mountains)
 * and where you have to print an output (the index of the mountain to fire on)
 * The inputs you are given are automatically updated according to your last actions.
 **/

while (TRUE)
{
    for ($i = 0; $i < 8; $i++)
    {
        // $mountainH: represents the height of one mountain.
        fscanf(STDIN, "%d", $mountainH[$i]);
    }

    $max = max($mountainH);
    $index = array_search($max, $mountainH);

    echo($index . "\n"); // The index of the mountain to fire on.
}
?>