Question SQL2 - Submission file: mysql_q2.sql

Restaurant Menu

A restaurant stores its menu in the following table:

TABLE menu

itemName VARCHAR (50) PRIMARY KEY NOT NULL,

category VARCHAR (50) NOT NULL price DECIMAL (5.2)

Write an update statement that will increase of all menu items that are in either the “Soups” or “Salads” categories by 10%.



////

UPDATE menu 
SET price = price * 1.1 
WHERE category in ('Soups', 'Salads);