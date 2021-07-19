var inputs = readline().split(' ');
const W = parseInt(inputs[0]); // width of the building.
const H = parseInt(inputs[1]); // height of the building.

const N = parseInt(readline()); // maximum number of turns before game over.
var inputs = readline().split(' ');

const X0 = parseInt(inputs[0]);
const Y0 = parseInt(inputs[1]);

var X = X0;
var minX = 0;
var maxX = W - 1;

var Y = Y0;
var minY = 0;
var maxY = H - 1;

while (true) {
    const bombDir = readline(); // the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)

    if (bombDir.indexOf('U') != -1 || bombDir.indexOf('D') != -1)
    {
        if (bombDir.indexOf('U') != -1)
        {
            maxY = Y - 1;
        }
        else if (bombDir.indexOf('D') != -1)
        {
            minY = Y + 1;
        }
        Y = Math.round((minY + maxY) / 2);
    }

    if (bombDir.indexOf('L') != -1 || bombDir.indexOf('R') != -1)
    {
        if (bombDir.indexOf('L') != -1)
        {
            maxX = X - 1;
        }
        else
        if (bombDir.indexOf('R') != -1)
        {
            minX = X + 1;
        }
        X = Math.round((minX + maxX) / 2);
    }

    // the location of the next window Batman should jump to.
    console.log(X + ' ' + Y);
}
