const guardDecrementButton1 = document.querySelector('#guardDecrementButton1');
const guardIncrementButton1 = document.querySelector('#guardIncrementButton1');
const guardDecrementButton2 = document.querySelector('#guardDecrementButton2');
const guardIncrementButton2 = document.querySelector('#guardIncrementButton2');
const guardaPoints1 = document.querySelector('#guardaPoints1');
const guardaPoints2 = document.querySelector('#guardaPoints2');

function guardDecrement1(){
    console.log('decrement');
    if(parseInt(player1TotalPoints.innerText, guardaPoints1.innerText) <= 0) {
      player1TotalPoints.innerHTML = "<p>" + 0 + "</p>";
      guardaPoints1.innerHTML = "<p>" + 0 + "</p>";
    } else {
      player1TotalPoints.innerHTML = "<p>" + (parseInt(player1TotalPoints.innerText) - 3) + "</p>";
      guardaPoints1.innerHTML = "<p>" + (parseInt(guardaPoints1.innerText) - 3) + "</p>";
    }
}
function guardIncrement1(){
  console.log('increment');
  player1TotalPoints.innerHTML = "<p>" + (parseInt(player1TotalPoints.innerText) + 3) + "</p>";
  guardaPoints1.innerHTML = "<p>" + (parseInt(guardaPoints1.innerText) + 3) + "</p>";
}

function guardDecrement2(){
  console.log('decrement');
  if(parseInt(player2TotalPoints.innerText, guardaPoints2) <= 0) {
    player2TotalPoints.innerHTML = "<p>" + 0 + "</p>";
    guardaPoints2.innerHTML = "<p>" + 0 + "</p>";
  } else {
    player2TotalPoints.innerHTML = "<p>" + (parseInt(player2TotalPoints.innerText) - 3) + "</p>";
    guardaPoints2.innerHTML = "<p>" + (parseInt(guardaPoints2.innerText) - 3) + "</p>";
  }
}
function guardIncrement2(){
  console.log('increment');
    player2TotalPoints.innerHTML = "<p>" + (parseInt(player2TotalPoints.innerText) + 3) + "</p>";
    guardaPoints2.innerHTML = "<p>" + (parseInt(guardaPoints2.innerText) + 3) + "</p>";
}

guardDecrementButton1.addEventListener('click', () => {
    guardDecrement1();
});
  
guardIncrementButton1.addEventListener('click',() => {
    guardIncrement1();
});

guardDecrementButton2.addEventListener('click', () => {
  guardDecrement2();
});

guardIncrementButton2.addEventListener('click',() => {
  guardIncrement2();
});
  