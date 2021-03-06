// Условия
// 1. Конструкция - это if, condition - условие: неравенство, равенство, всё что будет либо true либо false
/* if (condition) {

}

if (5 == '5') {} - // true, произойдёт выполнение действия
if (5 === '5') {} - // false, где в итогде действие не выполнится

// 1.1 {} - это блок кода. Их нужно ставить ТОЛЬКо если 1 действие.
/*  а. проще находить ошибки;
    б. проше понимать что к какому условию относится;
    в. проще модифицировать код, если нужно добавить несколько действий внутрь и чтобы не забыть {}
*/

// Пример:

// let myNumber;

// if (5 == '5') {
//         let myNumber = 5;
//         alert(myNumber);
// }

// alert('false');

// Пояснение. 
/*     let myNumber = 5; (21 строка)
       alert(myNumber);  (22 строка)
Это выполнится, если условие (5 == '5') - true, 
если в условии (5 === '5') будет false, то 21 и 22 - действия НЕ выполнятся, а 
выполнится ТОЛЬКО: alert('false'); (25 строка)

НО действия произойдут так:
если (5 == '5') - true, выполнится сначала 21 потом 22, а затем 25, потому что условий никаких нету, и потому что это обычное условие ЕСЛИ
(ЕСЛИ есть что-то, то это действие выполняется, ЕСЛИ нет, то не выполняет, так как нет дополнительной ветви)
*/

// Пример:

// let myNumber;

// if (5 == '5') {
//         let myNumber = 5; // (42)
//         alert(myNumber);  // (43)
// } else {
//         alert('false');
//         // ...; 
//         // ...;    
// }

// Пояснение
/* 1.2 else - ИНАЧЕ. Т.е ЕСЛИ условие (5 == '5') - true выполняются строки 42 и 43,
      ЕСЛИ условие (5 == '5') - false, то выполняться  будут, только то что в блоке else
      Выполнится ИЛИ что в блоке if, ИЛИ что в блоке else, НО никак не вместе!!!
*/

// Пример:

// let myNumber;

// if (5 == '5') {
//         let myNumber = 5; // 
//         alert(myNumber);  // 
// } else {
//         if (5 > 1) {

//         } else {

//         }
//         alert('false');
//         // ...; 
//         // ...;    
// }

// Пояснение
/* Все конструкции могут быть вложены друг в друга */


// ЗАДАЧИ

/* №1 Запросить у пользователя число и определить, оно поло-
жительное, отрицательное или ноль. т.е alert должен быть "+" ИЛИ "-" ИЛИ "0"*/

// I способ

// let userNumber = +prompt("Enter the number", "");
// if (userNumber > 0) {
//         alert("positive");
// } else {
//         if (userNumber < 0) {
//                 alert("negative");  
//         } else {
//                 alert("zero");
//         }

// }

// II способ

// let userNumber = +prompt("Enter the number", "");
// if (userNumber > 0) {
//         alert("positive");
// } 
// if (userNumber < 0) {
//         alert("negative");
// } 
// if (userNumber === 0) {
//         alert("zero");
// } 

// Пояснение. I способ (выполняется 1 условие)
/* Первая ветка - if, (userNumber > 0) - если наше число (userNumber) больше 0, то браузер считает, что alert - "+".
   Если число не больше 0, значит оно меньше (<) 0 либо равно 0.
   Таким образом, строим вторую ветку - else, в которой указывем, что (userNumber < 0) ИНАЧЕ alert("zero"); 


II способ (выполняется 3 условия) 
Браузер при выполнении каждого условия должен пройти ВСЕ условия, даже если ненужно проходить
какое-то из условий, к примеру если пришлось бы остановиться на alert("positive"), то ему прийдётся пройти дальше до последнего 

При I способе, если остановится на 89 строке, то остальную часть (вторую ветку) считывать не будет*/


/* №2 Запросить у пользователя его возраст и проверить кор-
ректность введенных данных (0–120 лет). т.е не меньше и не больше*/

// let userNumber = +prompt("Enter the age", "");
// if (userNumber >= 0 && userNumber <= 120) {
//         alert("correct");
// } else {
//         alert("incorrect"); 
// }

/* №3 Запросить у пользователя число и вывести его модуль
(|7| = 7, |-7| = 7). */

// let userNumber = +prompt("Enter the number", "");
// let result;
// if (userNumber >= 0) {
//         result = userNumber;
// } else {
//         result = -userNumber;
// }
// alert(result);

// где result - переменная 


/* №4 Запросить у пользователя время (часы, минуты, секунды)
и проверить корректность введенных данных. (отдельно запрашиваем часы, потом минуты, потом секунды) */

// let hours = +prompt("Enter the hours: ", "");
// let minutes = +prompt("Enter the minutes: ", "");
// let seconds = +prompt("Enter the seconds: ", "");

// if (hours >= 0 && hours <= 23 && minutes >= 0 && minutes <= 59 && seconds >= 0 && seconds <= 59) {
//         alert("correct");
// } else {
//         alert("incorrect"); 
// }


/*  №5 Запросить координаты точки (x, y) и определить номер
четверти, в которую попала эта точка. Необходимо учесть
случаи попадания точки на оси X или Y или в начало
координат. */

// Запросить координаты точки (x, y)

// let xCoord = +prompt("x coord", "");
// let yCoord = +prompt("y coord", "");

// I
/* Нам нужно первое условие, которое будет определять однозначно, что это из всех точек обязательно получается I четверть
х > 0, y > 0 */

// if (xCoord > 0 && yCoord > 0) {
//         alert("I");
// } else {
//         // II
//         if (xCoord < 0 && yCoord > 0) {
//                 alert("II");
//         } else {
//                 // III
//                 if (xCoord < 0 && yCoord < 0) {
//                         alert("III");
//                 } else {
//                         // IV
//                         if (xCoord > 0 && yCoord < 0) {
//                                 alert("IV");
//                         } else {
//                                 // X axis
//                                 if (xCoord !== 0 && yCoord === 0) {
//                                         alert("X axis");
//                                 } else {
//                                         // Y axis
//                                         if (yCoord !== 0 && xCoord === 0) {
//                                                 alert("Y axis");
//                                         } else {
//                                                 // (0, 0)
//                                                 if (xCoord === 0 && yCoord === 0) {
//                                                         alert("0, 0");
//                                                 }
//                                         }
//                                 }
//                         }
//                 }
//         }
// }




/*2. Тернарный оператор - единственный оператор в JavaScript, принимающий три операнда. 
Он часто используется в качестве укороченного варианта условного оператора if.

Синтаксис
условие ? выражение1 : выражение2

условие - выражение, принимающее значение true или false.
выражение1, выражение2 - выражения, значения которых могут принадлежать любому типу. */

// Пример с последовательностью операций

// let x = 7;
// let result;

// if (x % 2 === 0) {
//         result = "even";
// } else {
//         result = "odd";
// }

/* В случае когда нам нужно выполнить не последовательность операций, а какую-то одну, при условии, 
выполняется либо одна операция, когда она правдивая (true) либо другая оперция, когда false. Для
этого и существует ТЕРНАРНЫЙ оператор. Это запись в одну строчку примера выше */

// Это будет выглядеть так:

// result = (condition) ? значение если true : значение если false

/* Три операнда (части): 
Первое: (condition) - это условие
Второе: значение если true 
Третье: значение если false */

// Пример в одну строчку

// let x = 7;

// let result = (x % 2 === 0) ? "even" : "odd";
// alert(result);

// Описание 

// : - else

/* Сначала проверяется условие - (x % 2 === 0) ? , затем условие как будто исчезает
и остаётся "even" : "odd", где взависимости от результата остаётся либо "even" либо "odd" */

// ЗАДАЧИ

// №1 Запросить 2 числа и вывести большее из них.

// let number1 = +prompt("1: ", "");
// let number2 = +prompt("2: ", "");

// let max = (number1 > number2) ? number1 : number2;
// alert(max);

// #2 Запросить 1 число и проверить, оно кратно 5 или нет.

// let number = +prompt("Число кратное 5: ", "");

// let result = (number % 5 === 0) ? "yes" : "no";
// alert(result);

/* №3 Запросить у пользователя название планеты. Если поль-
зователь ввел «Земля» или «земля», то вывести «Привет,
землянин!», в остальных случаях вывести «Привет, ино-
планетянин!». */

// let planet = +prompt("Planet name: ", "");
// let planet = earth;
// let planet = earth1;

// let result1 = (planet = earth) ? "Привет, землянин" : "Привет, инопланетянин"; 
// alert(result1);



/*3. SWITCH - Инструкция switch сравнивает выражение со случаями, перечисленными внутри неё, а затем выполняет соответствующие инструкции.
Опрератор выбора из большого количества вариантов. Когда у нас есть  ограниченный выбор конкретных
вариантов: либо зима, либо осень, либо весна, т.е огранеченный выбор сезонов. Сюда можно отнести и месяцы */

// Конструкция синтаксиса

// switch (key) {
//     case value:

//         break;

//     default:
//         break;
// }

// Например 

// let season = +prompt("Enter the season: ", "");
// switch (season) {
//     case "winter":
//         // последовательность команд
//         // последовательность команд
//         // последовательность команд
//         break;

//     case "spring":
//         // последовательность команд
//         // последовательность команд
//         // последовательность команд
//         break;

//     case "summer":
//         // последовательность команд
//         // последовательность команд
//         // последовательность команд
//         break;

//     case "autumn":
//         // последовательность команд
//         // последовательность команд
//         // последовательность команд 
//         break;

//     default:
//         // какие-то инструкции, условие
//         // какие-то инструкции, условие
//         // какие-то инструкции, условие
//         break;
// }

// Пояснение

/* switch - выбрать, (key) - это наш ключ (season), case - ограниченный набор (случай), 
т.е при условии, например, зима. break - этот оператор выходит из опции winter,
если break не поставить, то браузер перейдёт к следующей строчке (case "spring")
и даже если не совпадает браузер выполнит всё для spring, пока не наткнётся на break.
Если пользователь не ввел из всех сезонов ни один, то выполнится та часть которая - default*/

// ЗАДАЧА
// №1 Запросить у пользователя номер месяца и вывести на экран его название.
/* prompt("Enter the number month: ", "") - это запись prompt в строку, тогда
делать нужно строки, например, case "1". Если делать числа, а не строки, то 
ставим перед prompt "+" - +prompt("Enter the number month: ", ""), тогда
после case ставится число без кавычек! Например case 1. 
ОБЯЗАТЕЛЬНО, тип (строка или число) должны совпадать! Если сделать строку и число,
то браузер ничего не найдёт, т.к это строгое неравенство!  */

// let month = +prompt("Enter the number month: ", "");
// switch (month) {

//     case 1:
//         alert("January");
//         break;

//     case 2:
//         alert("February");
//         break;

//     case 3:
//         alert("March");
//         break;

//     case 4:
//         alert("April");
//         break;

//     case 5:
//         alert("May");
//         break;

//     case 6:
//         alert("June");
//         break;

//     case 7:
//         alert("July");
//         break;

//     case 8:
//         alert("August");
//         break;

//     case 9:
//         alert("September");
//         break;

//     case 10:
//         alert("October");
//         break;

//     case 11:
//         alert("November");
//         break;

//     case 12:
//         alert("December");
//         break;

//     default:
//         alert("You entered incorrectly");
//         break;
// }

/* №2 Реализовать калькулятор. Пользователь вводит 2 числа и
знак (+ - * /). В зависимости от введенного знака решить
пример и вывести результат. */

// let number1 = +prompt("Enter the number1: ", "");
// let number2 = +prompt("Enter the number2: ", "");
// let sign = prompt("Enter the sign (+ - * /): ", "");
// let result1;
// let result2;
// let result3;
// let result4;
// result1 = number1 + number2;
// result2 = number1 - number2;
// result3 = number1 * number2;
// result4 = number1 / number2;


// switch (sign) {

//     case "+":
//         alert(result1);
//         break;

//     case "-":
//         alert(result2);
//         break;

//     case "*":
//         alert(result3);
//         break;

//     case "/":
//         alert(result4);
//         break;

//     default:
//         alert("ЧТо-то пошло не так");
//         break;
// }






