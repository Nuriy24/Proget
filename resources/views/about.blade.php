<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Школа Кавказких танцев в Воронеже     🌟 Kavkazz.com</title>
<link rel=
    <!-- Подключение CSS файла -->
    <link href="<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <!-- Подключение CSS файла -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<body></html>
</head>
<body>
    <!-- Ваш контент страницы -->
    
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Школа танцев "Лезгинка Нур"</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Обеспечивает, что body занимает всю высоту */
}

header {
    background-color: #ff5733;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0; /* Явно указываем слева */
    right: 0; /* Явно указываем справа */
    z-index: 1000;
}

.logo {
    height: 50px;
}

nav {
    margin-top: 60px; /* без изменения, требуется для отступа под фиксированным header */
    background: #fff;
    padding: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #333;
}

.burger {
    display: flex;
    flex-direction: column;
    cursor: pointer;
}

.burger div {
    height: 3px;
    width: 30px;
    background-color: white;
    margin: 4px;
    transition: 0.3s;
}

.sidebar {
    display: none; /* Показывать по событию JavaScript */
    position: fixed;
    top: 60px;
    right: 0;
    background: #fff;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 200px;
}

.sidebar a {
    display: block;
    margin: 10px 0;
}

.content {
    margin-top: 80px; /* Отступ под header */
    padding: 20px;
    flex: 1; /* Позволяет контенту растягиваться, если нужно */
}

.gallery {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.photo {
    margin: 20px;
    cursor: pointer;
}

.description {
    margin-top: 20px;
    font-style: italic;
}

footer {
    background-color: #771500;
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
}
    </style>
</head>
    </div>
<body>
<header>
    <img src="https://yt3.googleusercontent.com/ytc/AIdro_nySrc1NjA8oDAQ6zfMnniTUcPl02wIecPIMFAXr_8BTw=s900-c-k-c0x00ffffff-no-rj" alt="Логотип" class="logo">
    <h1>Школа танцев "Лезгинка Нур"
      </nav>
    </div>
    </h1>
    <div class="burger" onclick="toggleSidebar()">
</header> <nav ><a href="#gallery">Галерея</a>
    <a href="#directions">Направления танцев</a>
    <a href="#prices">Цены</a>
    <a href="#shop">Магазин</a>
    <a href="#contact">Контакты</a></nav> 
</nav>
  </div>
    <h2 id="about">О школе</h2><p>Добро пожаловать в Школу танцев "Лезгинка Нур". У нас Вы сможете научиться танцевать и раскрыть свой талант!</p>
    <img src="https://avatars.mds.yandex.net/get-altay/13197739/2a000001918e57b01e24a0a8d9f0d6af18d7/XXXL" alt="Фото" width="1000"> <div class="main-block__button-text"> Записаться на занятие</div>
    <nav id="nav">
    <h2 id="gallery">Галерея</h2>
    <div class="gallery">
        <div class="photo" onclick="showDescription('Описание танца 1')">
            <img src="https://avatars.mds.yandex.net/get-altay/5254653/2a0000017b35400e7d22a5c19f3fb1971293/XXL_height" alt="Танец 1" width="300">
        </div>
        <div class="photo" onclick="showDescription('Описание танца 2')">
            <img src="https://avatars.mds.yandex.net/get-altay/11748256/2a000001918e57adf0cbff40953e8a63415a/XXXL" alt="Танец 2" width="300">
        </div>
        <div class="photo" onclick="showDescription('Описание танца 3')">
            <img src="https://avatars.mds.yandex.net/get-altay/13987456/2a000001918e57aa785cb72f18691795df21/XXXL" alt="Танец 3" width="300">
        </div>
    </div>
    <style>
        /* Основные стили */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
        }
        /* Блок для регистрации */
        .registration-box {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .registration-box:hover {
            transform: scale(1.05); /* Плавное увеличение при наведении */
        }

        .registration-link {
            font-size: 18px;
            color: #007bff;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .registration-link i {
            margin-left: 8px;
        }

        .register-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .register-button:hover {
            background-color: #218838;
        }

        /* Раздел с направлениями танцев */
        #dance-directions {
            background-image: url('path/to/your/image.jpg'); /* Замените на путь к вашему изображению */
            background-size: cover;
            background-repeat: no-repeat;
            padding: 40px;
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }

        #dance-directions h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        #dance-directions > div {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .dance-column {
            flex: 1 0 30%; /* Колонки для танцев */
            margin: 10px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 8px;
            text-align: center;
        }

        .dance-column h3 {
            margin-bottom: 10px;
        }

        /* Бургер-меню */
        .burger-menu {
            display: none;
            flex-direction: column;
            gap: 10px;
            background-color: rgba(0, 0, 0, 0.8); /* Черный фон */
            padding: 20px;
            position: absolute;
            top: 50px;
            right: 10px;
            border-radius: 8px;
        }

        .burger-menu a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            display: block;
            transition: color 0.3s ease;
        }

        .burger-menu a:hover {
            color: #ffd700; /* Цвет при наведении */
        }

        .burger-icon {
            display: flex;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .burger-icon div {
            width: 30px;
            height: 3px;
            background-color: white;
            border-radius: 5px;
        }
        .burger-menu.active {
            display: flex;
        }
        /* Стили для футера */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer .contacts p {
            margin: 5px 0;
        }
        footer a {
            color: #ffd700;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Навигация с бургер-меню -->
    <header>
        <div class="burger-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav class="burger-menu" id="burger-menu">
            <a href="#about">О школе</a>
            <a href="#gallery">Галерея</a>
            <a href="#contact">Контакты</a>
            <a href="register">Зарегистрироваться</a>
            <a href="adminpanel">Вход администратора</a>
       <nav

    >
            <a clsss='p-2 texst-dark' href="#/about">О школе</a>
            <a class='p-2' href="#gallery">Галерея</a>
            <a class='p-2' href="#contact">Контакты</a>
            <a class='btn btn-outline-warning' href="register">Зарегистрироваться</a>
            <a class='p-2' href="adminpanel">Вход администратора</a>
       <nav
        <!-- Направления танцев -->
        <h2 id="diretions">Направления танцев</h2>
           
            







        </nav>
    </header>
    <div class="container">

        <!-- Регистрация на занятия -->
        <div class="registration-box">
            <h2>Запиcь на занятие</h2>
            <p>Получите индивидуальные уроки и начните танцевать!</p>
            <a href="#registration-form" class="registration-link">
                Подробнее <i class="fas fa-arrow-right"></i>
            </a>
            
            <button class="register-button">Зарегистрироваться</button>
        </div>


     
    <!-- Контакты -->
    <footer id="contact">
        <div class="contacts">
            <p>Контакты:</p>
            <p>Телефон: <strong>8 (980) 247-43-97</strong></p>
            <p>Email: <a href="mailto:Lezginka-nur@yandex.ru">Lezginka-nur@yandex.ru</a></p>
        </div>
    </footer>
    <script>
        // Функция для открытия/закрытия меню
        function toggleMenu() {
            const menu = document.getElementById('burger-menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>




