<?php
fscanf(STDIN, "%d", $L);
fscanf(STDIN, "%d", $H);
$T = strtoupper(stream_get_line(STDIN, 256 + 1, "\n"));
for ($i = 0; $i < $H; $i++)
{
    $ROW[$i] = stream_get_line(STDIN, 1024 + 1, "\n");
}

$answer = "";
$len = strlen($T);
for ($i = 0; $i < $H; $i++)
{
    for ($j = 0; $j < $len; $j++)
    {
        if (!ctype_alpha($T[$j]))
        {
            $pos = 26 * $L;
        }
        else
        {
            $pos = (ord($T[$j]) - ord("A")) * $L;
        }
        $k = $pos;    
        while ($k < $pos + $L)
        {
            $answer .= $ROW[$i][$k++];
        }
    }
    $answer .= "\n";
}

echo($answer);
?>