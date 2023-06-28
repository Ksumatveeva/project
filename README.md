ПОЯСНИТЕЛЬНАЯ ЗАПИСКА
к итоговой аттестационной работе на тему
«Разработка web-ресурса с использованием технологий HTML, CSS, JavaScript (какие-то еще если использовали)»
на примере web-ресурса: https://hanzelin.p-host.in/project/index.html
 Васильевой Ксении Леонидовны группы №: 0155
программы профессиональной переподготовки
«Frontend разработка»

Веб-ресурс предназначен для предоставления информации потенциальным клиентам о компании, о стоимости грузовых перевозок с помощью расчета стоимости грузоперевозки в зависимости от объема, веса груза и километража. Также для клиентов есть  форма обратной связи с помощь базы данных MySQL, разработана политика конфиденциальности с помощью онлайн-конструктора политики обработки персональных данных https://tilda.cc/ru/privacy-generator/.
Этап разработки начинался с создания проекта с использованием фреймворка Bootstrap ver 4.6 (далее “фреймворк”). Так же был подключен шрифт ‘Inter’, в т.ч. шрифт Font Avesome.
Веб ресурс создавался с использованием системы сеток фреймворка “Container”, “Container-fluid”, а также дополнительных готовых компонентов фреймворка. Создается база данных на стороне хостинга для получения, записи данных пользователей.
В проект веб ресурса входят 2 страницы в формате html,и 1 файла php в папке php, папка с картинками “img”.
С помощью онлайн-редактора Figma создан логотип компании Global logistic, добавлен в header и footer.

Сайт является одностраничным, для удобного перехода в нужный раздел меню, установлены якорные ссылки.
 Добавлена интерактивная карта местоположения офиса компании.
В разделе о компании представлена форма обратной связи для клиентов, где клиент вводит свои данные, данные: имя, фамилия, email, телефон, при желании может указать цель обращения,  они передаются в БД MySQL.
В следующем разделе применен шрифт Font Avesome для наглядного
понимания всех преимуществ компании. На данной странице, кроме подключенного фреймворка, подключается анимация через ресурс. В результате чего происходит вылет  заголовка с левой стороны страницы, а преимущества с правой.
Раздел «Цены» представляет собой форму расчета стоимости грузоперевозки исходя из стоимости: 1 кг - 9руб.; 1 куб - 1000руб.; 1км- 15руб. Также клиент может добавить дополнительные услуги, такие как: погрузка – 2000руб., доставка до места -1500руб., доставка опасного груза -2000руб. 
Добавлена форма отслеживания местонахождения груза, но не реализована, т.к. проект является учебным.
Расчет стоимости перевозки производился с помощью Java Script. Для расчета получаем все id c помощью document.getElementById, допускаем стоимость 1кг, 1м3, 1 км. Добавляем элемент range, который позволит задать расстояние. Вызываем событие range onchange, после того как пользователь отпустит ползунок, получим заданное им значение. Далее сверяем на пустоту элементы weight и volume, и проверяем установлен ли флажок на дополнительные услуги , получаем сумму стоимости перевозки путем арифметических операций. Функция isNaN определяет, введено ли клиентом числовое значение.
В следующем разделе добавлены отзывы клиентов с использованием фреймворка и иконочного шрифта. Далее следует раздел контакты.
В footer добавлен логотип, созданный с помощью онлайн-редактора Figma. Разработана политика конфиденциальности, есть возможность перейти по ссылке на нее и вернуться обратно.
Данный проект является учебным, компания вымышлена.
Тестирование работоспособности веб ресурса проводилось не в автоматическом режиме, т.е. без написания тестов. 



 
 
