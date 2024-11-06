CREATE DATABASE mini_shop;
USE mini_shop;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    is_active BOOLEAN DEFAULT TRUE
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    category_id INT,
    supplier_id INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE,
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE CASCADE
);

INSERT INTO categories (name) VALUES
('Мягкие игрушки'),
('Конструкторы'),
('Настольные игры'),
('Электронные игрушки'),
('Игрушечные автомобили');

INSERT INTO suppliers (name) VALUES
('Игрушки от Деда Мороза'),
('Весёлый малыш'),
('Игрушки для всех');

INSERT INTO products (name, description, category_id, supplier_id, price) VALUES
('Плюшевый медведь', 'Мягкий плюшевый медведь, подходящий для детей от 3 лет', 1, 1, 10.00),
('Конструктор LEGO', 'Классический конструктор для развития логики и моторики', 2, 2, 25.00),
('Настольная игра "Монополия"', 'Популярная экономическая настольная игра', 3, 3, 15.00),
('Робот-собака', 'Интерактивная игрушка, имитирующая действия настоящей собаки', 4, 1, 40.00),
('Игрушечный гоночный автомобиль', 'Машинка с мотором и световыми эффектами', 5, 2, 20.00),
('Мягкий зайчик', 'Плюшевая игрушка в виде зайца', 1, 3, 8.00),
('Конструктор магнитный', 'Развивающий магнитный конструктор', 2, 1, 18.00),
('Игра "Уно"', 'Настольная карточная игра для всей семьи', 3, 2, 5.00),
('Игрушечный робот-трансформер', 'Трансформирующийся робот из популярной серии', 4, 3, 30.00),
('Автомобиль на радиоуправлении', 'Машинка с пультом управления', 5, 1, 35.00);
