--К оператору Select относится оператор between, оператор IN, оператор LIKE
--без оператора between
--вывести всех работников у которых зп находится в пределах от 2 до 7777
SELECT
    *
FROM
    people
WHERE
    salary >= 2
    AND salary <= 7777;

--с оператором between
SELECT
    *
FROM
    people
WHERE
    salary between 2
    AND 7777;

----------------------------------------------------------------------------
-- оператор IN
-- найти всех работников, которые работают строителем или бомжом
-- без
SELECT
    *
FROM
    people
WHERE
    dep = 'Строитель'
    OR dep = 'БОМЖ';

-- c
SELECT
    *
FROM
    people
WHERE
    dep IN('Бомж', 'президент');

----------------------------------------------------------------------------
-- оператор LIKE
SELECT
    *
FROM
    people
WHERE
    Name LIKE 'Ми%';

--вывести всех сотрудников, которые работают в отделе, название которого содержит ровно 4 символа
SELECT
    *
FROM
    people
WHERE
    dep LIKE '____';

----------------------------------------------------------------------------
-- функции агрегирования 
SELECT
    max(salary),
    min(salary),
    avg(salary),
    sum(salary)
FROM
    people;

SELECT
    COUNT(salary)
FROM
    people;

SELECT
    COUNT(*)
FROM
    people;

----------------------------------------------------------------------------
-- удалил у Михалыча зп
UPDATE
    people
SET
    salary = 800000000
WHERE
    name = 'Михалыч';

----------------------------------------------------------------------------
--вложенные запросы
-- Предположим, нужно найти всех у кого зарплата выше среднего.
SELECT
    *
FROM
    people
WHERE
    salary >(
        SELECT
            avg(salary)
        FROM
            people
    );

--найти работника с самой высокой зп
SELECT
    *
FROM
    people
WHERE
    salary =(
        SELECT
            max(salary)
        FROM
            people
    );

-- вывести инфу о сотрудниках, имеющих зп больше средней зп среди строителей
SELECT
    *
FROM
    people
WHERE
    salary > (
        SELECT
            avg(salary)
        FROM
            people
        WHERE
            dep = 'строитель'
    );



-- оператор LIKE
SELECT
    *
FROM
    people
WHERE
    Name LIKE '_г%';

-- оператор LIKE
SELECT
    *
FROM
    people
WHERE
    Name LIKE '%ыч %';

-- при групперовке все записи в таблице разбиваются на группы с одинаковым значением в том поле по которому  производится группировка.
--в выводе запроса могут использоваться только те поля по котоым производится группировка. по остальным полям могут выводиться их групповые характеристики: минимум, максимум, средннее и т.д.
SELECT
    dep,
    AVG(salary)
FROM
    people
GROUP BY
    dep;

