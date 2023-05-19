const overthrowDecrementButton1 = document.querySelector('#overthrowDecrementButton1');
const overthrowIncrementButton1 = document.querySelector('#overthrowIncrementButton1');
const overthrowDecrementButton2 = document.querySelector('#overthrowDecrementButton2');
const overthrowIncrementButton2 = document.querySelector('#overthrowIncrementButton2');
const quedaPoints1 = document.querySelector('#quedaPoints1');
const quedaPoints2 = document.querySelector('#quedaPoinst2');

function overthrowDecrement1(){
    console.log('decrement');
    if(parseInt(player1TotalPoints.innerText, quedaPoints1) <= 0) {
      player1TotalPoints.innerHTML = "<p>" + 0 + "</p>";
      quedaPoints1.innerHTML = "<p>" + 0 + "</p>";
    } else {
      player1TotalPoints.innerHTML = "<p>" + (parseInt(player1TotalPoints.innerText) - 2) + "</p>";
      quedaPoints1.innerHTML = "<p>" + (parseInt(quedaPoints1.innerText) - 2) + "</p>";
    }
}
function overthrowIncrement1(){
  console.log('increment');
  player1TotalPoints.innerHTML = "<p>" + (parseInt(player1TotalPoints.innerText) + 2) + "</p>";
  quedaPoints1.innerHTML = "<p>" + (parseInt(quedaPoints1.innerText) + 2) + "</p>";
}

function overthrowDecrement2(){
  console.log('decrement');
  if(parseInt(player2TotalPoints.innerText, quedaPoints2) <= 0) {
    player2TotalPoints.innerHTML = "<p>" + 0 + "</p>";
    quedaPoints2.innerHTML = "<p>" + 0 + "</p>";
  } else {
    player2TotalPoints.innerHTML = "<p>" + (parseInt(player2TotalPoints.innerText) - 2) + "</p>";
    quedaPoints2.innerHTML = "<p>" + (parseInt(quedaPoints2.innerText) - 2) + "</p>";
  }
}
function overthrowIncrement2(){
console.log('increment');
player2TotalPoints.innerHTML = "<p>" + (parseInt(player2TotalPoints.innerText) + 2) + "</p>";
quedaPoints2.innerHTML = "<p>" + (parseInt(quedaPoints2.innerText) + 2) + "</p>";
}

overthrowDecrementButton1.addEventListener('click', () => {
  overthrowDecrement1();
});
  
overthrowIncrementButton1.addEventListener('click',() => {
  overthrowIncrement1();
});

overthrowDecrementButton2.addEventListener('click', () => {
  overthrowDecrement2();
});

overthrowIncrementButton2.addEventListener('click',() => {
  overthrowIncrement2();
});
  