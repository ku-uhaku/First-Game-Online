const board = document.querySelector(".board");

const boardWidth = board.offsetWidth;
const boardHiegth = board.offsetHeight;

const numberOfBox = (boardHiegth / 5) * (boardWidth / 5);
for (let i = 0; i < numberOfBox; i++) {
  let span = document.createElement("span");
  span.classList.add("box");
  board.appendChild(span);
}

let pickColor = "black";
const boxs = document.querySelectorAll(".box");
const timer = document.querySelector(".timer");
let canClick = true;
const boxClick = (e) => {
  if (canClick) {
    canClick = false;
    e.target.style.background = pickColor;
    let index = Array.from(boxs).indexOf(e.target);
    //how send index pickColor to index.php
    //////////// ??????????????? I dont wanna send it in the url :| ??????????????? ///////////

    let timeLeft = 10;
    const timerId = setInterval(() => {
      timer.innerText = "can you wait " + timeLeft + " seconds";
      timeLeft--;
      if (timeLeft < 0) {
        clearInterval(timerId);
        timer.innerText = "You can start again";
        canClick = true;
      }
    }, 1000);
  }
};
boxs.forEach((box) => {
  box.addEventListener("click", (e) => {
    boxClick(e);
  });
});

const colors = document.querySelectorAll(".color");
const changeColor = (e) => {
  pickColor = e.target.dataset.color;
};
colors.forEach((color) => {
  color.addEventListener("click", changeColor);
});
