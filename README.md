# Kata-TollsAndVehicles 💼

## Description
In this project we find a website to manage tolls where we can see two lists of different tolls and vehicles as well as being able to enter each of them.

## Proyect guide
As soon as we enter we see a home page where we can choose if we want to see the list of vehicles or tolls, when we enter one of these we will see a list, if we enter an element of the list we will see the information of this one. In the case of the cars we will also see how many tolls it has passed through and in the case of the tolls we will see how many cars have passed through it.

Correct answer
![Correct answer](postmanDNI1.png)

Wrong length answer
![Wrong length answer](postmanDNI2.png)

Wrong type answer
![Wrong type answer](postmanDNI3.png)

## Installation requierements
- XAMPP

- Install the composer

- Install NPM via Node.js

- Xdebug (to be able to see the coverage of the tests)

- Postman

## 💻 Installation
- Clone repository
```
https://github.com/Inma0711/Kata-TollsAndVehicles.git
```
- Install the composer

```
composer install
```
- Install Nodejs

```
npm install
```

-Create an ‘.env’ file using the ‘.env.example’ file as an example and modify the lines:

    DB_CONNECTION=mysql
    DB_DATABASE=katastation_db

-Generate all the tables and fake values:

```
php artisan migrate:fresh --seed
```
-Run Laravel:

```
php artisan serve
```
-Run npm:

```
npm run dev
```

## 📚 Database diagram
Here we find the project diagram which is made up of a single table
![DNI table](tableDNI.png)

## API Endpoints
- In this project we have this endpoint to be able to see the ID card letter:

```
http://127.0.0.1:8000/api
```

## Test
This project has 80% test coverage.

-To test the tests and see the coverage in the terminal:

```
  php artisan test --coverage
```
![test DNI](testDNI.png)

## 🛠️Technologies and Tools

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=777BB4&color=777BB4'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=4479A1&color=4479A1'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=Laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='phpMyAdmin' src='https://img.shields.io/badge/phpMyAdmin-100000?style=for-the-badge&logo=phpMyAdmin&logoColor=white&labelColor=6C78AF&color=6C78AF'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=Postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='XAMPP' src='https://img.shields.io/badge/XAMPP-100000?style=for-the-badge&logo=XAMPP&logoColor=white&labelColor=FB7A24&color=FB7A24'/></a>

## Author

This project was fully developed by: 

[Inmaculada Gonzalez Aguilar](https://github.com/Inma0711)