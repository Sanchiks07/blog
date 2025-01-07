-- 0.
DROP DATABASE IF EXISTS blog_ipb23;

-- 1. izveidot datubāzi
CREATE DATABASE blog_ipb23;

-- 2. izmantot datubāzi
USE blog_ipb23;

-- 3. iezveidot tabulu
CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(5200)
);

-- 4. ielikt saturu post tabulā
INSERT INTO posts
(content)
VALUES
("Lieldienas tuvojas!"),
("Mākonis sver aptuveni miljons tonnu."),
("Vai ūdens ir slpajš?");

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