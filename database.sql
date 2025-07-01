CREATE TABLE students (  
	id serial primary key, -- autonumeric 1,2,3,4,6,....
	full_name varchar,
	gender char, -- F, M
	birth_date date,
	deleted boolean default false
);

-- data types: integer, bigint, varchar, boolean, char, float
-- [column name] [data type] [primary key],

SELECT * FROM students;

INSERT INTO students (full_name, gender, birth_date) 
  VALUES ('marc', 'M', '2020-01-01');

UPDATE student SET full_name = 'marc2' WHERE id = 456;

DELETE FROM students WHERE id = 123456; -- physical delete
UPDATE student SET deleted = true WHERE id = 123456; -- logical delete
