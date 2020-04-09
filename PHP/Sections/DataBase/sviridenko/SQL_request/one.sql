-- выбрать всё из таблицы one
SELECT * 
FROM one;

-- выбрать только столбцы из таблицы one
SELECT FIO, ZP 
FROM one;

-- выбрать всех у кого з\п больше 1000 из таблицы one
SELECT * 
FROM one 
WHERE zp > 1000;

-- выбрать всех у кого з\п не равна 100 из таблицы one
SELECT * 
FROM one 
WHERE ZP <> 100;

--от 500 до 2000
SELECT * 
FROM one 
WHERE ZP > 500 AND ZP < 2000;

--работает врачом и зарплата больше 4000
SELECT * 
FROM one 
WHERE Dep = "Врач" AND ZP >4000;

--найти всех у кого зп не менее 1000
SELECT * 
FROM one 
WHERE NOT ZP < 1000;

-- отсортировать ORDER BY всех по зп 
SELECT * 
FROM one
ORDER BY ZP;

-- отсортировать всех по зп от большего к меньшему
SELECT * 
FROM one 
ORDER BY ZP 
DESC;

-- отсортировать по профессиям в алфавитном и по зп в порядке убывания
SELECT * 
FROM one 
ORDER BY Dep ASC, ZP DESC;

--переименование столбцов
SELECT number AS 'Номер', FIO AS 'ФИО', ZP AS 'зп', Dep AS 'Профессии' 
FROM one; 


--посчитать налоги для каждого работника
SELECT number AS 'Номер', FIO AS 'ФИО', ZP*0.13 AS 'налоги', Dep AS 'Профессии' FROM one; 

--посчитать зп вместе с налогами для каждого работника
SELECT number AS 'Номер', FIO AS 'ФИО', ZP-(ZP*0.13) AS 'налоги', Dep AS 'Профессии' FROM one; 

