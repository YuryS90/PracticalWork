--добавили только товар
INSERT INTO
    goods (name)
VALUES
('vodka');

--добавили товар и цену
INSERT INTO
    goods (name, price)
VALUES
('vodka', 100);

-- в таблице goods поменяли цену всем товарам
UPDATE
    goods
SET
    price = 100;

-- в таблице goods поменяли цену только товару под id №5 и №2
UPDATE
    goods
SET
    price = 22
WHERE
    id = 5
    OR id = 2;

-- удалил строку
DELETE FROM
    goods
WHERE
    id = 2;

-- для товаров, у которых цена больше 100 рублей, удалить цену 
UPDATE
    goods
set
    price = NULL
WHERE
    price > 100;

--установить цену орехам 12
UPDATE
    goods
SET
    price = 12
WHERE
    name = 'nuts';
