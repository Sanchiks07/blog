-- 0.
DROP DATABASE IF EXISTS blog_ipb23;

-- 1. izveidot datubāzi
CREATE DATABASE blog_ipb23;

-- 2. izmantot datubāzi
USE blog_ipb23;

-- 3. iezveidot tabulu
CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(5200),
	category_id INT
);

-- 4. ielikt saturu post tabulā
INSERT INTO posts
(content, category_id)
VALUES
("Lieldienas tuvojas!", 1),
("Mākonis sver aptuveni miljons tonnu.", 1),
("Vai ūdens ir slpajš?", 2),
("14. uzdevums ir elle", 1);

SELECT * FROM posts;

-- 5. Izvedo jaunu tabulu "categories"
CREATE TABLE categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	category_name VARCHAR(25)
);

INSERT INTO categories
(category_name)
VALUES
("Svētki"),
("Mūzika"),
("Sports");

SELECT * FROM categories;