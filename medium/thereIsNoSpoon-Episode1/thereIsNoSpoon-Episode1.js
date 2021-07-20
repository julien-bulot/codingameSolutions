/**
 * Don't let the machines win. You are humanity's last hope...
 **/

const width = parseInt(readline()); // the number of cells on the X axis
const height = parseInt(readline()); // the number of cells on the Y axis

const line = [];
for (let i = 0; i < height; i++) {
    line[i] = readline(); // width characters, each either 0 or .
}

// Write an action using console.log()
// To debug: console.error('Debug messages...');
var x1;
var y1;
var x2;
var y2;
var x3;
var y3;

for (let i = 0; i < height; i++)
{
    for (let j = 0; j < width; j++)
    {
        if (line[i].indexOf('0', j) != -1)
        {
            x1 = line[i].indexOf('0', j);
            y1 = i;
        }
        else
        {
            break;
        }

        if (line[i].indexOf('0', x1 + 1) != -1)
        {
            x2 = line[i].indexOf('0', x1 + 1);
            y2 = i;
        }
        else
        {
            x2 = -1;
            y2 = -1;
        }

        if (i < height - 1)
        {
            for (let k = i + 1; k < height; k++)
            {
                if (line[k][x1] == '0')
                {
                    x3 = x1;
                    y3 = k;
                    break;
                }
                else
                {
                    x3 = -1;
                    y3 = -1;
                }
            }
        }
        else
        {
            x3 = -1;
            y3 = -1
        }

        j = x1;

        // Three coordinates: a node, its right neighbor, its bottom neighbor
        console.log(x1 + ' ' + y1 + ' ' + x2 + ' ' + y2 + ' ' + x3 + ' ' + y3);
    }
}
