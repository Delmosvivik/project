let input = document.querySelector(".field__input");
let btn = document.querySelector(".field__btn");
let check = document.querySelector(".result__check__out");
let help = document.querySelector(".result__help__out");
let count = document.querySelector(".result__count__out");

let item = 0;
let randNum = 1 + Math.floor(Math.random() * 20);

btn.onclick = function (evt) {
   evt.preventDefault();
   userNum = input.value;
   if (userNum > randNum) {
      check.textContent = "Пока что не угадали ...";
      help.textContent = "Попробуй взять число поменьше"
      item++;
      count.textContent = item;
   } else if (userNum < randNum) {
      check.textContent = "Пока что не угадали ...";
      help.textContent = "Попробуй взять число побольше"
      item++;
      count.textContent = item;
   } else {
      check.textContent = "Поздравляю! Ты угадал!";
      help.textContent = "То, что нужно!";
      item++;
      count.textContent = item;
   }
};