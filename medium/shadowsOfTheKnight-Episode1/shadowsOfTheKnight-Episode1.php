<?php
// $W: width of the building.
// $H: height of the building.
fscanf(STDIN, "%d %d", $W, $H);

// $N: maximum number of turns before game over.
fscanf(STDIN, "%d", $N);

fscanf(STDIN, "%d %d", $X0, $Y0);

$X = $X0;
$minX = 0;
$maxX = $W - 1;

$Y = $Y0;
$minY = 0;
$maxY = $H - 1;

while (TRUE)
{
    // $bombDir: the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)
    fscanf(STDIN, "%s", $bombDir);

    if (strpos($bombDir, "U") !== false || strpos($bombDir, "D") !== false)
    {
        if (strpos($bombDir, "U") !== false)
        {
            $maxY = $Y - 1;
        }
        else if (strpos($bombDir, "D") !== false)
        {
            $minY = $Y + 1;
        }
        $Y = round(($minY + $maxY) / 2);
    }

    if (strpos($bombDir, "L") !== false || strpos($bombDir, "R") !== false)
    {
        if (strpos($bombDir, "L") !== false)
        {
            $maxX = $X - 1;
        }
        else if (strpos($bombDir, "R") !== false)
        {
            $minX = $X + 1;
        }
        $X = round(($minX + $maxX) / 2);
    }

    // the location of the next window Batman should jump to.
    echo($X . " " . $Y . "\n");
}
?>