const MESSAGE = readline();

var bin = '';
var len = MESSAGE.length;
for (let i = 0; i < len; i++)
{
    bin += MESSAGE.charCodeAt(i).toString(2).padStart(7, "0");
}

var answer = '';
var len = bin.length;
var prebit = -1;
for (let i = 0; i < len; i++)
{
    if (prebit != bin[i])
    {
        if (prebit != -1)
        {
            answer += ' ';
        }
        if (bin[i] == '0')
        {
            answer += '00 0';
        }
        else
        {
            answer += '0 0';
        }
        prebit = bin[i];
    }
    else
    {
        answer += '0';
    }
}

console.log(answer);
