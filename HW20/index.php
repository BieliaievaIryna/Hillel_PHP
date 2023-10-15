<?php

require_once 'DatabaseConnect.php';

try {
    $connect = DatabaseConnect::getInstance();
} catch (PDOException $exception) {
    echo $exception->getMessage();
    exit;
}

$sql = "CREATE TABLE `city` (
     `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
     `name_city` CHAR(150) NOT NULL UNIQUE
)";
$connect->query($sql);

$sql = "CREATE TABLE `clubs` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `name` CHAR(150) NOT NULL UNIQUE,
    `city_id` INT UNSIGNED NOT NULL,
    `address` CHAR(250) NOT NULL,
    `phone` CHAR(100) NOT NULL,
    FOREIGN KEY (`city_id`) REFERENCES `city`(`id`)
)";
$connect->query($sql);

$sql = "CREATE TABLE `category_equipment` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `name_category` CHAR(150) NOT NULL UNIQUE
)";
$connect->query($sql);

$sql = "CREATE TABLE `equipment` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `name` CHAR(150) NOT NULL,
    `brand` CHAR(150) NOT NULL,
    `line` CHAR(150) NOT NULL,
    `type` CHAR(150) NOT NULL,
    `description` TEXT NOT NULL,
    `category_id` INT UNSIGNED NOT NULL,
    `club_id` INT UNSIGNED NOT NULL,
    FOREIGN KEY (`category_id`) REFERENCES `category_equipment`(`id`),
    FOREIGN KEY (`club_id`) REFERENCES `clubs`(`id`)
)";
$connect->query($sql);

$sql = "INSERT INTO `city` (`name_city`) VALUES ('Kyiv'), ('Lviv'), ('Odesa')";
$connect->query($sql);

$sql = "INSERT INTO `clubs` (`name`, `city_id`, `address`, `phone`) VALUES ('Arsenalna', 1, 'str. 32/2 Knyazou Ostrozkih', '380443644528'),
                                                                   ('Dynamo', 1, 'str. M. Hrushevsky, 3', '380442224222'),
                                                                   ('Mazepa', 2, 'str. Hetman Mazepa, 1b', '380322324280'),
                                                                   ('Kotovsky', 3, 'str. Davyda Oistrakh, 32', '380487409101')";
$connect->query($sql);

$sql = "INSERT INTO `category_equipment` (`name_category`) VALUES ('Treadmill'),
                                                          ('Orbiter'),
                                                          ('Exercise bikes'),
                                                          ('Block simulators'),
                                                          ('Free weight simulators')";
$connect->query($sql);

$sql = "INSERT INTO `equipment` (`name`, `brand`, `line`, `type`, `description`, `category_id`, `club_id`) VALUES ('Treadmill', 'Precor', 'TRM 885 P80 with TV (ts)', 'Cardio', 'Precor TRM 885 P80 with TV (ts) Treadmill', 1, 1),
                                                                                                          ('Treadmill', 'Precor', 'TRM 885 P80 with TV (ts)', 'Cardio', 'Precor TRM 885 P80 with TV (ts) Treadmill', 1, 1),
                                                                                                          ('Treadmill', 'Precor', 'TRM 885 P80 with TV (ts)', 'Cardio', 'Precor TRM 885 P80 with TV (ts) Treadmill', 1, 2),
                                                                                                          ('Treadmill', 'Precor', 'TRM 885 P80 with TV (ts)', 'Cardio', 'Precor TRM 885 P80 with TV (ts) Treadmill', 1, 2),
                                                                                                          ('Treadmill', 'Precor', 'TRM 885 P80 with TV (ts)', 'Cardio', 'Precor TRM 885 P80 with TV (ts) Treadmill', 1, 3),
                                                                                                          ('Treadmill', 'Precor', 'TRM 885 P80 with TV (ts)', 'Cardio', 'Precor TRM 885 P80 with TV (ts) Treadmill', 1, 3),
                                                                                                          ('Treadmill', 'Precor', 'TRM 885 P80 with TV (ts)', 'Cardio', 'Precor TRM 885 P80 with TV (ts) Treadmill', 1, 4),
                                                                                                          ('Upright Bike', 'Precor', 'UBK 885 P80 with TV (ts)', 'Cardio', 'Precor UBK 885 P80 with TV (ts) Upright Bike', 3, 1),
                                                                                                          ('Upright Bike', 'Precor', 'UBK 885 P80 with TV (ts)', 'Cardio', 'Precor UBK 885 P80 with TV (ts) Upright Bike', 3, 4),
                                                                                                          ('Crosstrainer', 'Precor', 'EFX 885 P80 with TV (ts)', 'Cardio', 'Precor EFX 885 P80 with TV (ts) Crosstrainer', 2, 1),
                                                                                                          ('Crosstrainer', 'Precor', 'EFX 885 P80 with TV (ts)', 'Cardio', 'Precor EFX 885 P80 with TV (ts) Crosstrainer', 2, 1),
                                                                                                          ('Crosstrainer', 'Precor', 'EFX 885 P80 with TV (ts)', 'Cardio', 'Precor EFX 885 P80 with TV (ts) Crosstrainer', 2, 2),
                                                                                                          ('Crosstrainer', 'Precor', 'EFX 885 P80 with TV (ts)', 'Cardio', 'Precor EFX 885 P80 with TV (ts) Crosstrainer', 2, 3),
                                                                                                          ('Crosstrainer', 'Precor', 'EFX 885 P80 with TV (ts)', 'Cardio', 'Precor EFX 885 P80 with TV (ts) Crosstrainer', 2, 3),
                                                                                                          ('Crosstrainer', 'Precor', 'EFX 885 P80 with TV (ts)', 'Cardio', 'Precor EFX 885 P80 with TV (ts) Crosstrainer', 2, 4),
                                                                                                          ('Gravitron', 'Life Fitness', 'Pro 2', 'Strength', 'Life Fitness Pro 2 Gravitron', 4, 1),
                                                                                                          ('Shoulder Press', 'TechnoGym', 'Selection', 'Strength', 'TechnoGym Selection Shoulder Press', 4, 4),
                                                                                                          ('Abcoaster', 'AB Coaster', 'CS 3000', 'Free Weight', 'AB Coaster CS 3000 Abcoaster', 5, 2),
                                                                                                          ('High Row', 'Hammer Strength', 'Plate Loaded', 'Free Weight', 'Hammer Strength Plate Loaded High Row', 5, 3)";
$connect->query($sql);

$sql = "SELECT * FROM `clubs` WHERE `city_id` = 1";
$statement = $connect->query($sql);
echo '<pre>';
echo "CLUBS IN KYIV <br>";
print_r($statement->fetchAll());
echo '<pre>';

$sql = "SELECT * FROM `equipment` WHERE `category_id` = 2";
$statement = $connect->query($sql);
echo '<pre>';
echo "EQUIPMENT = ORBITER <br>";
print_r($statement->fetchAll());
echo '<pre>';

$sql = "SELECT * FROM `equipment` WHERE `brand` LIKE 'Prec%'";
$statement = $connect->query($sql);
echo "BRAND FILTER <br>";
echo '<pre>';
print_r($statement->fetchAll());
echo '<pre>';

$sql = "SELECT * FROM `clubs` ORDER BY `name`";
$statement = $connect->query($sql);
echo '<pre>';
echo "CLUBS ORDER BY NAME <br>";
print_r($statement->fetchAll());
echo '<pre>';

$sql = "SELECT * FROM `city` LIMIT 2";
$statement = $connect->query($sql);
echo '<pre>';
echo "ONLY TWO CITY <br>";
print_r($statement->fetchAll());
echo '<pre>';

$sql = "SELECT COUNT(`id`) as count_equipment FROM `equipment`";
$statement = $connect->query($sql);
echo '<pre>';
echo "COUNT OF EQUIPMENT <br>";
print_r($statement->fetchAll());
echo '<pre>';

$sql = "UPDATE `clubs` SET `name` = 'Kotovskogo' WHERE `id` = 4";
$connect->query($sql);

$sql = "DELETE FROM `equipment` WHERE `id` = 2";
$connect->query($sql);