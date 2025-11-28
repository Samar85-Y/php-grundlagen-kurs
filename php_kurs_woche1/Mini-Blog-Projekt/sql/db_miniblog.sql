-- MINIBLOG DB – Schema 

CREATE DATABASE IF NOT EXISTS miniblog
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_general_ci;
USE miniblog;


-- Users Table
CREATE TABLE tbl_users (
    users_id INT PRIMARY KEY AUTO_INCREMENT,
    users_forename VARCHAR(50) NULL,
    users_lastname VARCHAR(50),
    users_email VARCHAR(100) UNIQUE,
    users_password VARCHAR(255),
    users_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    users_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


--Posts Table
CREATE TABLE tbl_posts (
    posts_id INT PRIMARY KEY AUTO_INCREMENT,
    posts_users_id_ref INT,
    posts_categ_id_ref INT,
    posts_header VARCHAR(50),
    posts_content TEXT,
    posts_image VARCHAR(255) NULL,
    posts_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    posts_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (posts_users_id_ref) REFERENCES tbl_users(users_id),
    FOREIGN KEY (posts_categ_id_ref) REFERENCES tbl_categories(categ_id)
);



--Categories Table
CREATE TABLE tbl_categories (
    categ_id INT PRIMARY KEY AUTO_INCREMENT,
    categ_name VARCHAR(50),
    categ_desc VARCHAR(255) NULL
);


INSERT INTO tbl_categories (categ_name, categ_desc) VALUES
('Lifestyle', 'Alles rund um Lifestyle'),
('Technik', 'Technik & Gadgets'),
('Reisen', 'Reiseberichte und Tipps'),
('Food', 'Rezepte und Food-Trends');
