UEFA 2016 [![Build Status](https://travis-ci.org/GoncharenkoVladimir/Football-Manager.svg?branch=dev)](https://travis-ci.org/GoncharenkoVladimir/Football-Manager)

Після успішного виходу збірної України на Євро 2016, до нашої команди звернувся клієнт із замовленням.
Він хоче, щоб ми зробили невеличкий сайт всіх збірних, що пройшли на Євро 2016.
На головній сторінці, ми мали турнірну сітку із заповненими збірними. При натисканні на якусь команду, відкривався її
короткий огляд: список гравців, тренерський склад, останні зіграні матчі, тощо. При натисканні на якогось із гравців
чи тренера, можна було переглянути його коротку біографію. При натисканні на прапор команди - короткий опис про країну.

Отож після певних перемовин, було вирішено розбити даний проект на декілька частин.

Частина 1.

1. Встановити Symfony2.
2. Продумати логіку і зробити схему всього вашого додатка.
3. На основі п.2 створити контролери і написати на них роутинг для всіх частин
4. Контролери мають приймати реквест, і віддавати респонс про те, що на цій сторінці буде знаходитись, наприклад:
головна сторінка має багато посилань на різні збірні команд, ця інформація має бути прописана звичайним HTML у
відповідному шаблоні (ніяких даних з контролера не має передаватися).
5. Роутинг має бути сконфігурований таким чином, щоб всі URL параметри були відвалідовані в самому роутингу (згадуємо
 про requirements).
6. На всі наші контролери мають бути написані юніт-тести.

P.S. Якщо у когось будуть виникати питання стосовно ТЗ, клієнт просив залишати відгуки у цій темі. Він обов’язково їх
читатиме і буде уточнювати ТЗ через викладачів.

P.S. 2 Ресурси для ознайомлення і розумів:
- http://symfony.com/doc/current/book/controller.html
- http://symfony.com/doc/current/book/routing.html
- http://symfony.com/doc/current/best_practices/creating-the-project.html
- http://symfony.com/doc/current/best_practices/configuration.html
- http://symfony.com/doc/current/best_practices/business-logic.html
- http://symfony.com/doc/current/best_practices/controllers.html﻿

========================================================================================================================

Частина 2.

1. Встановити nodejs, bower, gulp or grunt.
2. Встановити один із  Css-фреймворків (Bootstrap, Zurb Foundation, SemanticUI, etc.) через Bower і згенерувати відповідні 
ресурси у директорію web (css, js, images, fonts, etc.).
3 Написати twig-темплейти для контроллерів із попередньої частини і оформити у стилі вибраного CSS-фреймворка.
4. Створити моделі до ваших об'єктів (команда, гравець, тренер, гра, і т.д.) 
5. Для заповнення моделей даними, радимо використати бібліотеку дл генерації контента (https://github.com/fzaninotto/Faker)
6. Всі моделі мають генеруватися у відповідному контролері і  передаватися у відповідні темплейти.
7. Зробити навігацію у темплейтах.
8. Адаптувати ваші тести 
9. Підключити travis-ci, scrutinizer-ci

P.S. корисні посилання:
http://symfony.com/doc/current/book/page_creation.html
http://symfony.com/doc/current/book/templating.html
http://symfony.com/doc/current/best_practices/templates.html
http://symfony.com/doc/current/cookbook/assetic/index.html
https://www.npmjs.com/
http://bower.io/
http://gulpjs.com/

https://scrutinizer-ci.com/﻿