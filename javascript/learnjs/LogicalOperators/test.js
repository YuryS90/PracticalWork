// let hour = 11;

// if (hour < 10 || hour > 18) {
//   alert( 'Офис закрыт.' );
// } else {
//     alert ( 'Офис открыт.' );
// }

// let hour = 12;
// let minute = 30;

// if (hour == 12 && minute == 30) {
//   alert( 'The time is 12:30' );
// }

// if (1 && 0) { // вычисляется как true && false
//     alert("не сработает, так как результат ложный");
// } else {
//     alert('результат ложный');
// }

// alert( 2 && 3 && 4); // 0

// let x = 1;
// (x > 0) && alert( 'Greater than zero!' );

// alert( 1  || 2 || 3);

// alert( alert(1) && alert(0) );

// let age = prompt("Ввести число", "");
// if (!(age >= 14 && age <=90)) {
//     alert("Правильно");
// } else {
//     alert("No");
// }

// if (age < 14 || age > 90) alert("Без НЕ");

// let mess = prompt("Введите логин", "");

// let admin = "Админ";
// if (mess = admin) {
//     prompt("Введите пароль");
// }


// задача на логин и пароль
let userName = prompt("Кто там?", '');

if (userName == 'Админ') {

    let pass = prompt('Пароль?', '');

    if (pass == 'Я главный') {
        alert('Здравствуйте!');
    } else if (pass == '' || pass == null) {
        alert('Отменено');
    } else {
        alert('Неверный пароль');
    }

} else if (userName == '' || userName == null) {
    alert('Отменено');
} else {
    alert("Я вас не знаю");
}


