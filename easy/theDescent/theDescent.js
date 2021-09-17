/**
 * The while loop represents the game.
 * Each iteration represents a turn of the game
 * where you are given inputs (the heights of the mountains)
 * and where you have to print an output (the index of the mountain to fire on)
 * The inputs you are given are automatically updated according to your last actions.
 **/

while (true) {
    const mountainH = [];
    for (let i = 0; i < 8; i++) {
        mountainH[i] = parseInt(readline()); // represents the height of one mountain.
    }

    let max = Math.max(...mountainH);
    let index = mountainH.indexOf(max);

    console.log(index);     // The index of the mountain to fire on.
}
