const n = parseInt(readline()); // the number of temperatures to analyse
if (n == 0)
{
    console.log('0');
}
else
{
    var result = 5527;
    var inputs = readline().split(' ');
    for (let i = 0; i < n; i++) {
        const t = parseInt(inputs[i]);// a temperature expressed as an integer ranging from -273 to 5526
        if (Math.abs(t) < Math.abs(result) || Math.abs(t) == Math.abs(result) && t > 0)
        {
            result = t;
        }
    }
    console.log(result);
}
