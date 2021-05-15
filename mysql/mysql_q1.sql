Question SQL1 - Submission file: mysql_q1.sql

Countries

The following table contains companies and the country of their headquarters:

TABLE companies
   id INTEGER PRIMARY KEY, name VARCHAR (30) NOT NULL,
   country VARCHAR (30) NOT NULL


Write a query that will return all countries, without duplication, in alphabetical order.


///

SELECT DISTINCT country FROM companies
   ORDER BY name DESC;