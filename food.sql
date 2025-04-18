-- Создание базы данных
CREATE DATABASE IF NOT EXISTS food;
USE food;

-- Создание таблицы restaurants
CREATE TABLE restaurants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    type VARCHAR(50)
);

-- Вставка тестовых данных
INSERT INTO restaurants (name, type) VALUES
('Кафе Вкус', 'Кафе'),
('Пицца Дом', 'Пиццерия'),
('Суши Бар', 'Суши'),
('Бургер Кинг', 'Фастфуд'),
('Столовая №1', 'Столовая'),
('Ресторан Луна', 'Ресторан'),
('Кофе Хаус', 'Кофейня'),
('Шаурма у Дяди', 'Фастфуд'),
('Пекарня Хлеб', 'Пекарня'),
('Траттория', 'Пиццерия');