# Laravel работа с API
Разбираюсь с инструментами [Laravel](https://laravel.com/) для работы с API.

[Основная страница проекта](https://laboratorynotices.wordpress.com/2023/07/14/laravel-10-%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%b0-%d1%81-api/).

## Doker
Для теста был использован [Docker](https://www.docker.com).

# API

Реализована лишь одна версия API.
Для API в адресной строке зарезервирован префикс `/api`.

## Группы (Groups)

Для управления групп используется префикс `/groups`.

|Метод	|URL	|Действие	|
|-------|-----|---------|
|`GET`|`{URL}/api/groups`|Отображает все группы|
|`GET`|`{URL}/api/groups/{ID}`|Отображает одну из групп с ключом *ID*|
|`POST`|`{URL}/api/groups?name={название}`|Создаёт новую группу с переданным названием|
|`POST`|`{URL}/api/groups/{ID}?_method=PUT&name={название}`|Изменяет группу с ключом *ID*, передаём ей новое название. Дополнительно надо передавать значение *_method=PUT*|
|`POST`|`{URL}/api/groups/{ID}?_method=DELETE`|Удаляет группу с ключом *ID*. Дополнительно надо передавать значение *_method=DELETE*|

