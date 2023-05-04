const decrementButton1 = document.querySelector('#mountDecrementButton1');
const incrementButton1 = document.querySelector('#mountIncrementButton1');
const decrementButton2 = document.querySelector('#mountDecrementButton2');
const incrementButton2 = document.querySelector('#mountIncrementButton2');
const player1TotalPoints = document.querySelector('#player1TotalPoints');
const player2TotalPoints = document.querySelector('#player2TotalPoints');

function mountDecrement1(){
    console.log('decrement');
    if(parseInt(player1TotalPoints.innerText) <= 0) {
      player1TotalPoints.innerHTML = "<p>" + 0 + "</p>";
    } else {
      player1TotalPoints.innerHTML = "<p>" + (parseInt(player1TotalPoints.innerText) - 4) + "</p>";
    }
}
function mountedIncrement1(){
  console.log('increment');
  player1TotalPoints.innerHTML = "<p>" + (parseInt(player1TotalPoints.innerText) + 4) + "</p>";
}

function mountDecrement2(){
    console.log('decrement');
    if(parseInt(player2TotalPoints.innerText) <= 0) {
      player2TotalPoints.innerHTML = "<p>" + 0 + "</p>";
    } else {
      player2TotalPoints.innerHTML = "<p>" + (parseInt(player2TotalPoints.innerText) - 4) + "</p>";
    }
}
function mountedIncrement2(){
  console.log('increment');
  player2TotalPoints.innerHTML = "<p>" + (parseInt(player2TotalPoints.innerText) + 4) + "</p>";
}

decrementButton1.addEventListener('click', () => {
  mountDecrement1();
});

incrementButton1.addEventListener('click',() => {
  mountedIncrement1();
});

decrementButton2.addEventListener('click', () => {
  mountDecrement2();
});

incrementButton2.addEventListener('click',() => {
  mountedIncrement2();
});