Question SQL3 - Submission file: mysql_q3.sql

Cheapest Product

Given the following data defination, write a query that selects all the product names which have the lowest price:

TABLE products
   id INTEGER NOT NULL PRIMARY KEY, name INTEGER NOT NULL,
   price INTEGER NOT NULL



///

SELECT name 
FROM products 
WHERE pice = (SELECT MIN(price) FROM products);