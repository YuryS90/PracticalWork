let userName = 'Вася';
function showMessage() {

  userName = "Петя"; // (1) изменяем значение внешней переменной, без let

  let message = 'Привет, ' + userName;
  alert(message);
}
alert( userName ); // Вася перед вызовом функции
showMessage();
alert( userName ); // Петя, значение внешней переменной было изменено функцией


// =====================================================================================
let userName = 'Вася';
function showMessage() {

  let userName = "Петя"; // объявляем локальную переменную с помощью let

  let message = 'Привет, ' + userName; // Петя
  alert(message);
}
// функция создаст и будет использовать свою собственную локальную переменную userName
showMessage();
alert(userName); // Вася, не изменилась, функция не трогала внешнюю переменную
