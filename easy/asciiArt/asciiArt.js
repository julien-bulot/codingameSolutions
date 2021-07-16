const L = parseInt(readline());
const H = parseInt(readline());
const T = readline().toUpperCase();
const ROW = [];
for (let i = 0; i < H; i++) {
    ROW[i] = readline();
}

const len = T.length;
var answer = '';
var pos = 0;
for (let i = 0; i < H; i++)
{
    for (let j = 0; j < len; j++)
    {
        if (T.charCodeAt(j) < 'A'.charCodeAt(0) || T.charCodeAt(j) > 'Z'.charCodeAt(0))
        {
            pos = 26 * L;
        }
        else
        {
            pos = (T.charCodeAt(j) - 'A'.charCodeAt(0)) * L;
        }
        let k = pos;
        while (k < pos + L)
        {
            answer += ROW[i][k++];
        }
    }
    answer += "\n";
}

console.log(answer);
