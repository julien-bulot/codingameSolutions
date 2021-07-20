<?php
/**
 * Don't let the machines win. You are humanity's last hope...
 **/

// $width: the number of cells on the X axis
fscanf(STDIN, "%d", $width);
// $height: the number of cells on the Y axis
fscanf(STDIN, "%d", $height);

for ($i = 0; $i < $height; $i++)
{
    $line[$i] = stream_get_line(STDIN, 31 + 1, "\n");// width characters, each either 0 or .
}

for ($i = 0; $i < $height; $i++)
{
    for ($j = 0; $j < $width; $j++)
    {
        if (strpos($line[$i], "0", $j) !== false)
        {
            $x1 = strpos($line[$i], "0", $j);
            $y1 = $i;
        }
        else
        {
            break;
        }

        if (strpos($line[$i], "0", $x1 + 1) !== false)
        {
            $x2 = strpos($line[$i], "0", $x1 + 1);
            $y2 = $i;
        }
        else
        {
            $x2 = -1;
            $y2 = -1;
        }

        if ($i < $height - 1)
        {
            for ($k = $i + 1; $k < $height; $k++)
            {
                if ($line[$k][$x1] == "0")
                {
                    $x3 = $x1;
                    $y3 = $k;
                    break;
                }
                else
                {
                    $x3 = -1;
                    $y3 = -1;
                }
            }
        }
        else
        {
            $x3 = -1;
            $y3 = -1;
        }

        $j = $x1;

        // Three coordinates: a node, its right neighbor, its bottom neighbor
        echo($x1 . " " . $y1 . " " . $x2 . " " . $y2 . " " . $x3 . " " . $y3 . "\n");
    }
}
?>