<?php
$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");

$bin = "";
$len = strlen($MESSAGE);
for ($i = 0; $i < $len; $i++)
{
    $bin .= str_pad(decbin(ord($MESSAGE[$i])), 7, "0", STR_PAD_LEFT);
}

$answer = "";
$len = strlen($bin);
$prebit = -1;
for ($i = 0; $i < $len; $i++)
{
    if ($prebit != $bin[$i])
    {
        if ($prebit != -1)
        {
            $answer .= " ";
        }
        if ($bin[$i] == "0")
        {
            $answer .= "00 0";
        }
        else
        {
            $answer .= "0 0";
        }
        $prebit = $bin[$i];
    }
    else
    {
        $answer .= "0";
    }
}

echo($answer . "\n");
?>