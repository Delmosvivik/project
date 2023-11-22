let button1 = document.getElementById("plus");
let button2 = document.getElementById("minus");
let button3 = document.getElementById("multiply");
let button4 = document.getElementById("divide");
let input1 = document.getElementById("number");
let input2 = document.getElementById("number2");
let output = document.getElementById("result");

function plus() {
    let number = Number(input1.value);
    let number2 = Number(input2.value);
    let result = number + number2;
    output.value = result;
}
button1.addEventListener("click", plus);

function minus() {
    let number = Number(input1.value);
    let number2 = Number(input2.value);
    let result = number - number2;
    output.value = result;
}
button2.addEventListener("click", minus);

function multiply() {
    let number = Number(input1.value);
    let number2 = Number(input2.value);
    let result = number * number2;
    output.value = result;
}
button3.addEventListener("click", multiply);

function divide() {
    let number = Number(input1.value);
    let number2 = Number(input2.value);
    let result = number / number2;
    output.value = result;
}
button4.addEventListener("click", divide);