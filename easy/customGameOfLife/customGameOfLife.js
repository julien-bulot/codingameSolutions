var inputs = readline().split(' ');
const h = parseInt(inputs[0]);
const w = parseInt(inputs[1]);
const n = parseInt(inputs[2]);
const alive = readline();
const dead = readline();
var grid = [];
for (let i = 0; i < h; i++) {
    grid[i] = readline();
}

var pos = 0;
const stillAlive = [];
while (alive.indexOf('1', pos) != -1)
{
    pos = alive.indexOf('1', pos);
    stillAlive.push(pos);
    pos++;
}

const becomeAlive = [];
pos = 0;
while (dead.indexOf('1', pos) != -1)
{
    pos = dead.indexOf('1', pos);
    becomeAlive.push(pos);
    pos++;
}

var newGrid = Array.from(Array(h), () => new Array(w));  
for (let i = 0; i < n; i++)
{
    for (let j = 0; j < h; j++)
    {
        for (let k = 0; k < w; k++)
        {
            let nbNeighbours = 0;
            let x = j - 1;

            if (x >= 0)
            {
                for (let y = k - 1; y <= k + 1; y++)
                {
                    if (y >= 0 && y < w)
                    {
                        if (grid[x][y] == 'O')
                        {
                            nbNeighbours++;
                        }
                    }
                }
            }

            x = j;
            for (let y = k - 1; y <= k + 1; y++)
            {
                if (y >= 0 && y < w && y != k)
                {
                    if (grid[x][y] == 'O')
                    {
                        nbNeighbours++;
                    }
                }
            }

            x = j + 1;
            if (x < h)
            {
                for (let y = k - 1; y <= k + 1; y++)
                {
                    if (y >= 0 && y < w)
                    {
                        if (grid[x][y] == 'O')
                        {
                            nbNeighbours++;
                        }
                    }
                }
            }

            if (grid[j][k] == '.')
            {
                if (becomeAlive.indexOf(nbNeighbours) != -1)
                {
                    newGrid[j][k] = 'O';
                }
                else
                {
                    newGrid[j][k] = '.';
                }
            }
            else
            {
                if (stillAlive.indexOf(nbNeighbours) != -1)
                {
                    newGrid[j][k] = 'O';
                }
                else
                {
                    newGrid[j][k] = '.';
                }
            }
        }
    }

    grid = [];
    newGrid.forEach(function(line)
    {
        line = line.join('');
        grid.push(line);
    });
}

grid.forEach(function(line)
{
    console.log(line);
});
