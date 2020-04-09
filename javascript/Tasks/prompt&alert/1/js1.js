// 1

let userNumber = +prompt("1. Введите число:", "");
let result1 = userNumber ** 2;
alert(result1);

// 2

let number1 = +prompt("2. number 1:");
let number2 = +prompt("number 2:");
let result2 = (number1 + number2) / 2;
alert("Среднее арифметическое: " + result2);

// 3

let side = +prompt("1. Введите сторону квадрата:", "");
let area = side ** 2;
alert("Площадь: " + area);

// 4

let kilometers = +prompt("Enter kilometers:", "");
const KM_TO_MILES = 0.621371;
alert(kilometers * KM_TO_MILES);

// 5

number1 = +prompt("5. number 1:");
number2 = +prompt("number 2");
let sum = number1 + number2;
let substr = number1 - number2;
let mult = number1 * number2;
let div = number1 / number2;
alert(sum + "\n" +
        "substraction: " + substr +
        "\n" +
        "multiplication: " + mult + 
        "\n" + "division: " + div);

// 6

let a = +prompt("a:", "");
let b = +prompt("b:", "");
let x = -(b/a);
alert(x);

// 7

hours1 = +prompt("hours:");
minutes1 = +prompt("minutes:");
const HOURS2 = 23;
const MINUTES2 = 60;
let hours3 = HOURS2 - hours1;
let minutes3 = MINUTES2 - minutes1;
alert(hours3 + "\n" + minutes3);
