<?php
// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
if ($n == 0)
{
    echo("0\n");
}
else
{
    $result = 5527;
    $inputs = explode(" ", fgets(STDIN));
    for ($i = 0; $i < $n; $i++)
    {
        $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
        if (abs($t) < abs($result) || abs($t) == abs($result) && $t > 0)
        {
            $result = $t;
        }
    }
    echo($result . "\n");
}
?>