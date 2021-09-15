<?php
fscanf(STDIN, "%d %d %d", $h, $w, $n);
$alive = stream_get_line(STDIN, 9 + 1, "\n");
$dead = stream_get_line(STDIN, 9 + 1, "\n");
for ($i = 0; $i < $h; $i++)
{
    $grid[] = stream_get_line(STDIN, $w + 1, "\n");
}

$pos = 0;
while (strpos($alive, "1", $pos) !== false)
{
    $pos = strpos($alive, "1", $pos);
    $stillAlive[] = $pos;
    $pos++;
}

$pos = 0;
while (strpos($dead, "1", $pos) !== false)
{
    $pos = strpos($dead, "1", $pos);
    $becomeAlive[] = $pos;
    $pos++;
}

for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $h; $j++)
    {
        for ($k = 0; $k < $w; $k++)
        {
            $nbNeighbours = 0;
            $x = $j - 1;
            if ($x >= 0)
            {
                for ($y = $k - 1; $y <= $k + 1; $y++)
                {
                    if ($y >= 0 && $y < $w)
                    {
                        if ($grid[$x][$y] == "O")
                        {
                            $nbNeighbours++;
                        }
                    }
                }
            }

            $x = $j;
            for ($y = $k - 1; $y <= $k + 1; $y++)
            {
                if ($y >= 0 && $y < $w && $y != $k)
                {
                    if ($grid[$x][$y] == "O")
                    {
                        $nbNeighbours++;
                    }
                }
            }

            $x = $j + 1;
            if ($x < $h)
            {
                for ($y = $k - 1; $y <= $k + 1; $y++)
                {
                    if ($y >= 0 && $y < $w)
                    {
                        if ($grid[$x][$y] == "O")
                        {
                            $nbNeighbours++;
                        }
                    }
                }
            }

            if ($grid[$j][$k] == ".")
            {
                if (in_array($nbNeighbours, $becomeAlive))
                {
                    $newGrid[$j][$k] = "O";
                }
                else
                {
                    $newGrid[$j][$k] = ".";
                }
            }
            else
            {
                if (in_array($nbNeighbours, $stillAlive))
                {
                    $newGrid[$j][$k] = "O";
                }
                else
                {
                    $newGrid[$j][$k] = ".";
                }
            }
        }
    }

    $grid = [];
    foreach ($newGrid as $line)
    {
        $line = implode("", $line);
        $grid[] = $line;
    }
}

foreach ($grid as $line)
{
    echo($line . "\n");
}
?>