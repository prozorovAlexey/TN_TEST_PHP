# TN_TEST_PHP
I PHP
Примеры комманд:
php ./vendor/bin/console user developer
php ./vendor/bin/console can developer writeCode

II MySQL

a. Для заданного списка товаров получить названия всех категорий, в которых представлены товары
выбираю для нескольких товаров (9, 14, 6, 7, 2);

SELECT name
FROM categories
WHERE categories.id IN (
	SELECT cat_id 
	FROM goods,
	WHERE goods.id IN (9, 14, 6, 7, 2));

b. Для заданной категории получить список предложений всех товаров из этой категории и ее дочерних категорий; 
Выбираю все товары из категории компьютеры (id = 2) и подкатегории (3 ноутбуки, 4 планшеты, 5 гибриды)

SELECT name
FROM goods
WHERE cat_id == 2 OR cat_id IN (
	SELECT id
	FROM categories
	WHERE parent_cat_id == 2 AND name IN (3 ноутбуки, 4 планшеты, 5 гибриды))

c. Для заданного списка категорий получить количество предложений товаров в каждой категории; 
Выбираю количество товаров из категорий 7,8,9 

 SELECT cat_id, COUNT(cat_id) 
 FROM goods
 WHERE cat_id IN (7,8,9)
 GROUP BY cat_id;

d. Для заданного списка категорий получить общее количество уникальных предложений товара;
Выбираю количество уникальных товаров из категорий 3, 4, 5

SELECT COUNT(DISTINCT good_name) 
FROM goods
WHERE cat_id IN (3,4,5)

e.  Для заданной категории получить ее полный путь в дереве (breadcrumb, «хлебные крошки»). 
Получаю полный путь для категории 4 уровня 

SELECT
    child1.id as level1,
    child2.id as level2,
    child3.id as level3,
    child4.id as level4,
FROM adlist parent
    LEFT JOIN adlist AS child1 ON child1.id=parent.id
    LEFT JOIN adlist AS child2 ON child2.id=child1.owner
    LEFT JOIN adlist AS child3 ON child3.id=child2.owner
    LEFT JOIN adlist AS child4 ON child4.id=child3.owner
