CREATE TABLE `authors` (
  `id` int NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL
);


CREATE TABLE `books` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `author_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `published` bit NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(50) NOT NULL,
  FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`)
);

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
);


INSERT INTO authors (first_name, last_name) VALUES ("Frank", "Herbert"), 
("Yuval", "Harari"), ("Stephen", "King"), ("Noam", "Chomsky");


INSERT INTO books (author_id, title, price, published, quantity, image) VALUES 
(1, "Dune", 67.46, 1, 20, "img/dune.jpeg"), (2, "Sapiens", 71.60, 1, 11, "img/sapiens.jpeg"),
(3, "IT", 75.50, 1, 46, "img/it.jpeg”), (4, "Failed States ", 52.56, 1, 0, "img/who.jpeg");
