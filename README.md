# WT
## Лабораторная работа №1
### Задание
1. Выбрать тематику сайта.
2. Сделать набросок структуры страниц (расположение заголовка, меню, основной области, боковых блоков, подвала и т.д.).
3. Разработать набор веб-страниц (`HTML`, `CSS`) выбранной тематики. Наполнить страницу содержимым соответствующим предметной области выбранного сайта. На одной из страниц обязательно должна быть форма. Использовать блочную вёрстку.
4. Каждый набор должен включать не менее пяти страниц разного типа (титульная, новости, поиск, карта сайта, каталог товаров и тому подобное).

### Особое задание
Организовать WI-Fi сеть (локальную) и предусмотреть запуск разработанного сайта/страницы на другом устройстве или компьютере.

## Лабораторная работа №2
### Общее задание
На экран вывести ссылки меню с названиями (например  "О компании", "Услуги", "Прайс", "Контакты"). При клике по ссылке меняется и остается измененным цвет фона вокруг активной ссылки. Весь код на одной странице. Не использовать `javascript`. Использовать `GET-запросы`.

### Задания по вариантам
**Вариант 1**: Пользователь вводит в поле формы названия городов через запятую. После отправки отсортируйте города по алфавиту, первые буквы должны быть в верхнем регистре, остальные в нижнем. Если в запросе будут одинаковые города, они не должны повторяться.

## Лабораторная работа №3
### Задания по вариантам
**Вариант 1**: Работа с файлом с информацией о товарах.
Создать файл `list.csv` (разделитель полей запятая). На странице создать форму для добавления в базу информации о товарах: id, name (название), price (цена), description (описание). На экран вывести список имен товаров (в виде ссылок). При клике по ссылке - справа от списка показать информацию о товаре (id, name, price, description). Также дополнительно показать "price" со скидкой 15%. Округлить до 2 цифр после запятой.

## Лабораторная работа №4
### Задания по вариантам
**Вариант 1**: Напишите регулярное выражение, которое будет определять корректность адреса электронной почты в формате, например, `name@server.сom`, `name.surname@subserver.server.com` и т.д.. Поместите его в функцию, принимающую аргументом строку с электронной почтой. Возвратите соответствующие значения результата проверки. Данные принимать через форму (Имя, E-mail). Корректные адреса вместе с именем записывать в текстовый файл.

## Лабораторная работа №5
### Общее задание
Это задание предполагает освоение общей структуры таблиц MySQL, типов полей, атрибутов, индексов (ключей), знакомство с основными SQL-запросами – поэтому рекомендуется применять приложение PhpMyAdmin.
* Создайте БД с кодировкой UTF8 (utf8_general_ci). Создайте 2 таблицы (тематика таблиц на усмотрение студента) с полями включающие поле с индексом (ключом) PRIMARY с автоинкрементом, 1-2 поля с уникальным индексом  (ключом), 1-2 поля в одной из таблиц которое может быть связано с другой таблицей. Допустим, одна таблица данных о регистрации авторов и содержит, например, поля id, name, password, ip_registration, data_registration, а другая, к примеру,  содержит тематические статьи с полями id, author_id (имеется ввиду отсылка на id зарегистрированного автора из 1-й таблицы), title, text, image, data_publications, hide, opinion и т.п. Подобрать корректные и оптимальные типы данных и длину для соответствующих полей, такие как varchar, text, int, double, bigint, enum, boolean, data, timestamp и т.п.
* Сделать небольшое первичное заполнение/редактирование/выделения через PhpMyAdmin. Изучить соответствующие SQL-команды.
* Изучить импорт/экспорт файла БД в формат SQL.
* Создать скрипт PHP для доступа к созданной БД. Определить константы для доступа к БД (localhost, имя, пароль, имя БД). Подключиться к БД, обработать ошибку подключения с соответствующим сообщением, установить кодировку UTF8, вывести всю БД и (или) часть полей с применением сортировки на экран в табличном виде. Рекомендуется также вывести объединенные данные из двух таблиц (например, имена авторов и соответствующие заголовки размещенных ими статей).

### Задания по вариантам
**Вариант 6**: Написать скрипт, получающий через форму e-mail пользователя, проверяющий его корректность и добавляющий его в таблицу БД в случае, если такого e-mail там ещё нет.

## Лабораторная работа №6
### Задания по вариантам
**Вариант 9**: Написать скрипт, позволяющий определять "путь пользователя по сайту" (какие страницы он посетил, в какой последовательности, в какие моменты времени). При этом пользователь не регистрируется и не авторизуется на сайте.

## Лабораторная работа №7
### Задания по вариантам
**Вариант 2**: Выведите форму на сайте со следующими полями: «Получатели», «Тема», «Текст сообщения» и кнопкой «Отправить». В поле «Получатели» введите через пробел или другой установленный раздельный символ (, или ;) адреса электронной почты получателей. Получите все данные из формы, проверьте их правильность, при ошибке выведите соответствующее сообщение, оставив  введенные в полях формы, при успешном результате проверки - разошлите письмо. Сохраните в текстовом файле список получателей.

## Лабораторная работа №8
### Задания по вариантам
**Вариант 3**: Написать скрипт, собирающий статистику по используемым посетителями ресурса операционным системам. Выводить результаты в виде HTML-таблицы со списком операционных систем, отсортированным по убыванию количества пользующихся ими посетителей сайта.
