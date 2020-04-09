
SELECT
    city,
    round(avg(comm), 2)
FROM
    salespeople
GROUP BY
    city;

--условие после ключевого слова В применяются к каждоый записи таблицы в отлельности. условия записаны после ключевого слова хеадин применятся к группам записи. поэтому инструкиця не используется 
-- без инстуркции гру бай. т.к. условие записываемые после хевинг применяются к группас записи это даёт возможность испольховать в условиях 
-- функции агрегирования.
-- вывести список городов в которых средний размр омиссионных продавцов больше 0,14.
SELECT
    city,
    round(avg(comm), 2)
FROM
    salespeople
GROUP BY
    city
HAVING
    avg(comm) > 0.14;

SELECT
    city,
    avg(rating)
FROM
    customers
GROUP BY
    city;

-- вывести список городов в которых минимальный рейтинг покупателей выше среднего всех покупателей
SELECT
    city,
    MIN(rating)
FROM
    customers
GROUP BY
    city
HAVING
    min(rating) > (
        Select
            avg(rating)
        FROM
            customers
    );

-- найти покупателей у которых рейтинг выше рейтинга любого покупателя из лондона 
SELECT
    *
FROM
    customers
WHERE
    rating > ALL(
        Select
            rating
        FROM
            customers
        WHERE
            city = 'Rome'
    );

-- вывести сумму заказов больше 1000
SELECT
    *
FROM
    orders
WHERE
    AMT > 1000;

SELECT
    city
FROM
    customers
WHERE
    cnum IN (
        Select
            cnum
        FROM
            orders
        WHERE
            amt > 5000
    );

-- написать запрос который выводит список городов в которых проживают клиенты. Из результата запроса удалить дублирующие города
SELECT
    DISTINCT city
FROM
    customers;

-- объединение таблиц 
SELECT
    *
FROM
    salespeople,
    ORDErs
WHERE
    salespeople.snum = orders.snum;

SELECT
    *
FROM
    customers,
    salespeople
WHERE
    salespeople.snum = customers.snum;

-- найти общую сумму всех заказов
SELECT
    sname, round(SUM(amt),2)
FROM
    salespeople,
    ORDErs
WHERE
    salespeople.snum = orders.snum
GROUP by
    sname;

-- посчитать количество заказаков у каждого продавца
SELECT
    sname, count(*)
FROM
    salespeople,
    ORDErs
WHERE
    salespeople.snum = orders.snum
GROUP by
    sname;

-- имя продавца с самыми низкими комиссионами из Лондона
SELECT
    sname
FROM
    salespeople
WHERE
    comm = ALL (
        Select
            min(comm)
        FROM
            salespeople
        WHERE
            city = 'London'
    );

-- 2 вариант (более корректный)
SELECT
    sname
FROM
    salespeople
WHERE
    city = 'London'
    AND comm = (
        Select
            min(comm)
        FROM
            salespeople
        WHERE
            city = 'London'
    );

-- найти средний рейтинг покупателей в каждом городе
SELECT
    avg(rating),
    city
FROM
    customers
GROUP BY
    city;

-- объединение 3-х таблиц
SELECT
    *
FROM
    salespeople,
    customers,
    orders
WHERE
    salespeople.snum = orders.snum
    AND customers.cnum = orders.cnum;

-- средний рейтинг покупателей для каждого продавца

SELECT
    sname,
    avg(rating)
FROM
    salespeople,
    customers,
    orders
WHERE
    salespeople.snum = orders.snum
    AND customers.cnum = orders.cnum
GROUP BY
    sname;

-- найти среднюю сумму заказов для каждого продавца на каждую дату
SELECT
    sname,
    odate,
    AVG(amt),
    COUNT(amt)
FROM
    salespeople,
    orders
WHERE
    salespeople.snum = orders.snum
GROUP BY
    sname, odate;

-- среднюю сумму заказов на каждое число
SELECT
    odate,
    AVG(amt)
FROM
    orders
GROUP BY
    odate;