// 1 
// Запросите у пользователя его имя и выведите в ответ:
// «Привет, его имя!».

person = prompt("Привет, Ваше имя?", "");
alert("Привет, " + person);

// 2
// Запросите у пользователя год его рождения, посчитайте,
// сколько ему лет и выведите результат. Текущий год укажите
// в коде как константу.

year1 = +prompt("Год рождения: ", "");
const YEAR2 = 2019;
let year3 = YEAR2 - year1;
alert(year3);

// 3
// Запросите у пользователя длину стороны квадрата и вы-
// ведите периметр такого квадрата.

let side = +prompt("Введите длину стороны квадрата: ", "");
let perimeter = side * 4;
alert("Периметр равен: " + perimeter);

// 4
// Запросите у пользователя радиус окружности и выведите
// площадь такой окружности.

let radius = +prompt("Введите радиус окружности: ", "");
const PI = 3.14;
let area = PI * radius ** 2; 
alert("Площадь круга равна: " + area);

// 5
// Запросите у пользователя расстояние в км между двумя
// городами и за сколько часов он хочет добраться. Посчи-
// тайте скорость, с которой необходимо двигаться, чтобы
// успеть вовремя.

let distance = +prompt("Укажите расстояние (км) между города А и города Б: ", "");
let time = +prompt("За сколько часов вы хотите добраться? ", "");
let speed = distance / time;
alert("Ваша скорость должна составлять (км/ч): " + speed);

// 6
// Реализуйте конвертор валют. Пользователь вводит долла-
// ры, программа переводит в евро. Курс валюты храните в
// константе.

let dollar = +prompt("Укажите сумму в $, которую нужно перевести в EU: ", "");
const _1EURO = 2.34;
const _1DOLLAR = 2.11;
let euro = (_1DOLLAR / _1EURO) * dollar;
alert("Евро будет составлять: " + euro);

// 7
// Пользователь указывает объем флешки в Гб. Программа
// должна посчитать сколько файлов размером в 820 Мб по-
// мещается на флешку.

let memory = +prompt("Укажите объём флешки в Gb: ", "");
const _1GB = 1024;
const _1FILE_MB = 820;
let numberOfFiles = (memory * _1GB) / _1FILE_MB;
alert("Количество файлов, размером в 820 Mb, составит: " + numberOfFiles);

// 8
// Пользователь вводит сумму денег в кошельке и цену одной
// шоколадки. Программа выводит сколько шоколадок может
// купить пользователь и сколько сдачи у него останется.

let amountOfMoney = +prompt("Сумма денег, руб: ", "");
let _1priceChoco = +prompt("Сумма одной шоколадки, руб: ", "");
let quantity = Math.floor(amountOfMoney / _1priceChoco);
let balance1 = quantity * _1priceChoco;
let balance2 = amountOfMoney - balance1;
alert("Вы можете купить шоколадок, шт: " + quantity + "\n" +
       "Сдачи у Вас останется, руб: " + balance2);

// 9
// Запросите у пользователя трехзначное число и выведите
// его задом наперед. Для решения задачи вам понадобится
// оператор % (остаток от деления).

let number123 = +prompt("Введите трёхзначное число, чтобы вывести его задом наперёд: ", "");
let number3 = number123 % 10; // трёхзнач число мы делим на 10 с остатком, где третья цифра будет в остатке
let number12 = Math.floor(number123 / 10); // делим на 10 и округляем до меньшего целого (2-х знач число получилось)
let number2 = number12 % 10;// 2-х знач число мы делим на 10 остатком, где вторая цифра будет в остатке 
let number1 = Math.floor(number12 / 10); // делим на 10 и округляем до меньшего целого (1-о знач число получилось)
let number321 = "" + number3 + number2 + number1; // переводим в строчку "" получеам типо 321
alert(number321);

// 10
// Запросите у пользователя целое число и выведите в ответ,
// четное число или нет. В задании используйте логические
// операторы. В задании не надо использовать if или switch.

let num = +prompt("Введите целое число: ", "");
let numberEven = num % 2 === 0;
let result = numberEven && "Чётное число " || "Нечётное число";
alert(result);











