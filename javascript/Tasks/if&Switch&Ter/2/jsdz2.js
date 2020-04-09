// 1 
// Запросить у пользователя его возраст и определить, кем он
// является: ребенком (0–2), подростком (12–18), взрослым
// (18_60) или пенсионером (60– ...).

// let age = +prompt("Enter the age ", "");

// if (age >= 0 && age <= 2) {
//        alert("Child");
// } else {
//        if (age >= 12 && age <= 18) {
//               alert("Teenager");
//        } else {
//               if (age >= 18 && age <= 60) {
//                      alert("Adult");
//               } else {
//                      if (age > 60) {
//                             alert("Retiree")
//                      }
//               }
//        }
// }

// 2 
// Запросить у пользователя число от 0 до 9 и вывести ему
// спецсимвол, который расположен на этой клавише (1–!,
// 2–@, 3–# и т. д).

// let number = +prompt("Enter the number ", "");

// if (number === 0) {
//        alert(")");
// } else {
//        if (number === 1) {
//               alert("!");
//        } else {
//               if (number === 2) {
//                      alert("@");
//               } else {
//                      if (number === 3) {
//                             alert("#");
//                      } else {
//                             if (number === 4) {
//                                    alert("$");
//                             } else {
//                                    if (number === 5) {
//                                           alert("%");     
//                                    } else {
//                                           if (number === 6) {
//                                                  alert("^");
//                                           } else {
//                                                  if (number === 7) {
//                                                         alert("&");
//                                                  } else {
//                                                         if (number === 8) {
//                                                                alert("*");
//                                                         } else {
//                                                                if (number === 9) {
//                                                                       alert("(");
//                                                                }
//                                                         }
//                                                  }
//                                           }
//                                    }
//                             }
//                      }
//               }
//        }
// }

// 3
// Запросить у пользователя трехзначное число и проверить,
// есть ли в нем одинаковые цифры.

// let number123 = +prompt("Введите трёхзначное число: ", "");
// let number3 = number123 % 10; 
// let number12 = Math.floor(number123 / 10); 
// let number2 = number12 % 10;
// let number1 = Math.floor(number12 / 10); 

// let result;
// result = (number1 === number2 && number1 === number3) ? "yes" : "no" && (number1 === number2) ? "yes" : "no" && (number1 === number3) ? "yes" : "no" && (number2 === number3) ? "yes" : "no";
// alert(result);

// 4
// Запросить у пользователя год и проверить, високосный он
// или нет. Високосный год либо кратен 400, либо кратен 4 и
// при этом не кратен 100.

// let year = +prompt("Введите год: ", "");
// let result;

// result = (year % 4 === 0 && year % 100 !== 0 || year % 400 === 0) ? "Високосный" : "Невисокосный";
// alert(result);

// 5
// Запросить у пользователя пятиразрядное число и определить, является ли оно палиндромом.

// let numberPol = +prompt("Введите пятиразрядное число: ", "");
// let number5 = numberPol % 10;
// let number1234 = Math.floor(numberPol / 10);
// let number4 = number1234 % 10;
// let number123 = Math.floor(number1234 / 10);
// let number3 = number123 % 10;
// let number12 = Math.floor(number123 / 10); 
// let number2 = number12 % 10;
// let number1 = Math.floor(number12 / 10); 
 
// let result;
// result = (number5 === number1 && number4 === number2) ? "палиндром" : "no";
// alert(result);

// 6  Уточнить
// Написать конвертор валют. Пользователь вводит количе-ство USD, выбирает,
// в какую валюту хочет перевести: EUR, UAN или AZN, и получает в ответ соответствующую сумму.

// let dollar = +prompt("Укажите сумму в $: ", "");
// let sign = prompt("Введите валюту, в которую вы хотите перевести. Валюту вводите большими латинскими буквами, как на примере (EUR, CNY, AZN): ", "");
// const _1DOLLAR = 2.11;
// const _1EURO = 2.34;
// const _1CNY = 0.3;
// const _1AZN = 1.24;

// result1 = (_1DOLLAR / _1EURO) * dollar;
// result2 = (_1DOLLAR / _1CNY) * dollar;
// result3 = (_1DOLLAR / _1AZN) * dollar;

// switch (sign) {

//     case "EUR":
//         alert(result1);
//         break;

//     case "CNY":
//         alert(result2);
//         break;

//     case "AZN":
//         alert(result3);
//         break;

//     default:
//         alert("ЧТо-то пошло не так");
//         break;
// }
