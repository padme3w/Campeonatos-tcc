const punishmentDecrementButton1 = document.querySelector('#punishmentDecrementButton1');
const punishmentIncrementButton1 = document.querySelector('#punishmentIncrementButton1');
const punishmentDecrementButton2 = document.querySelector('#punishmentDecrementButton2');
const punishmentIncrementButton2 = document.querySelector('#punishmentIncrementButton2');
const punicaoPoints1 = document.querySelector('#punicaoPoints1');
const punicaoPoints2 = document.querySelector('#punicaoPoints2');

function punishmentDecrement1() {
    console.log('decrement');
        if (parseInt(punicaoPoints1.innerText) <= 0) {
            punicaoPoints1.innerHTML = "<p>" + 0 + "</p>";
        } else {
            punicaoPoints1.innerHTML = "<p>" + (parseInt(punicaoPoints1.innerText) - 1) + "</p>";
        }
}

function punishmentIncrement1() {
    console.log('increment');
    punicaoPoints1.innerHTML = "<p>" + (parseInt(punicaoPoints1.innerText) + 1) + "</p>";
}

function punishmentDecrement2() {
    console.log('decrement');
        if (parseInt(punicaoPoints2.innerText) <= 0) {
            punicaoPoints2.innerHTML = "<p>" + 0 + "</p>";
        } else {
            punicaoPoints2.innerHTML = "<p>" + (parseInt(punicaoPoints2.innerText) - 1) + "</p>";
        }
}

function punishmentIncrement2() {
    console.log('increment');
    punicaoPoints2.innerHTML = "<p>" + (parseInt(punicaoPoints2.innerText) + 1) + "</p>";
}

punishmentDecrementButton1.addEventListener('click', () => {
    punishmentDecrement1();
});

punishmentIncrementButton1.addEventListener('click', () => {
    punishmentIncrement1();
});

punishmentDecrementButton2.addEventListener('click', () => {
    punishmentDecrement2();
});

punishmentIncrementButton2.addEventListener('click', () => {
    punishmentIncrement2();
});