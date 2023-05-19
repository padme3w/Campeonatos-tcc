const advantageDecrementButton1 = document.querySelector('#advantageDecrementButton1');
const advantageIncrementButton1 = document.querySelector('#advantageIncrementButton1');
const advantageDecrementButton2 = document.querySelector('#advantageDecrementButton2');
const advantageIncrementButton2 = document.querySelector('#advantageIncrementButton2');
const vantagemPoints1 = document.querySelector('#vantagemPoints1');
const vantagemPoints2 = document.querySelector('#vantagemPoints2');

function advantageDecrement1() {
    console.log('decrement');
        if (parseInt(vantagemPoints1.innerText) <= 0) {
            vantagemPoints1.innerHTML = "<p>" + 0 + "</p>";
        } else {
            vantagemPoints1.innerHTML = "<p>" + (parseInt(vantagemPoints1.innerText) - 1) + "</p>";
        }
}

function advantageIncrement1() {
    console.log('increment');
        vantagemPoints1.innerHTML = "<p>" + (parseInt(vantagemPoints1.innerText) + 1) + "</p>";
}

function advantageDecrement2() {
    console.log('decrement');
        if (parseInt(vantagemPoints2.innerText) <= 0) {
            vantagemPoints2.innerHTML = "<p>" + 0 + "</p>";
        } else {
            vantagemPoints2.innerHTML = "<p>" + (parseInt(vantagemPoints2.innerText) - 1) + "</p>";
        }
}

function advantageIncrement2() {
    console.log('increment');
        vantagemPoints2.innerHTML = "<p>" + (parseInt(vantagemPoints2.innerText) + 1) + "</p>";
}

advantageDecrementButton1.addEventListener('click', () => {
    advantageDecrement1();
});

advantageIncrementButton1.addEventListener('click', () => {
    advantageIncrement1();
});

advantageDecrementButton2.addEventListener('click', () => {
    advantageDecrement2();
});

advantageIncrementButton2.addEventListener('click', () => {
    advantageIncrement2();
});