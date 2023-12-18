<?php
session_start();
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Официальная страница Spa world</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <div class="stock">Весь декабрь!Скидка на все услуги 5%!</div>
        <div class="user-login">
                    <?php
                    if (isset($_SESSION['authorized'])) {
                        echo '<div class="login">
                <a class="login_text" href="#">' . getCurrentUser() . '</a>
                <a class="exit" href="exit.php">Выйти</a>
                </div>';
                    } else {
                        echo '<div class="login">
                <a class="sign_in" href="login.php">Войти</a>
                </div>';
                    }
                    ?>
                </div>
                
                <div class="user-info">
                        <?php
                        if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
                            echo '<h2 class = "introduction_user">Здравствуйте,' . ' ' .getCurrentUser() . '!</h2>';
                        }
                        ?>
                </div>
        <h1 class="title">SPA WORLD</h1>
    </header>

    <main>
        <article class="container">

            <div class="left_part">
                <p>Мы рады приветствовать Вас! Наш салон предоставляет следующие виды услуг: массаж и spa-программы.</p>
                <p><img class= "img cabinet" src="img/cabinet.jpeg" alt="Кабинет"></p>
                <p>Мы используем индивидуальный подход к каждому клиенту.Перед выбором процедуры консультант подробно расскажет, какие виды услуг Вам могут подойти.</p>
                <p><img class= "img maska" src="img/maska.jpg" alt="Маска"></p>
            </div>
            
            <div class="right_part">
                <ol class="service">Услуги:
                   <li class="menu">
                        <ul>SPA-программы:
                            <li>Тропическое наслаждение(продолжительность сеанса-60 мин) - 5000 руб.</li>
                            <li>Полное расслабление(продолжительность сеанса-60 мин) - 6000 руб.</li>
                            <li>Beauty day Lite(продолжительность сеанса-60 мин) - 5000 руб.</li>
                            <li>Морская прогулка(продолжительность сеанса-60 мин) - 4000 руб.</li>
                        </ul>
                    </li>
                    <li class="menu">
                        <ul>Массажи:
                          <li>Классический (общий) массаж (продолжительность сеанса-40 мин) - 1800 руб.</li>
                          <li>Массаж с применением восточных практик(продолжительность сеанса-40 мин) - 3200 руб.</li>
                          <li>Массаж лечебный для суставов(продолжительность сеанса-20 мин) - 2000 руб.</li>
                          <li>Массаж-антистресс(продолжительность сеанса-30 мин) - 3500 руб.</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </article>
    </main>

    <footer>
        <div class="footer">
            Тел. +7 (499) 955-49-67 <br>
            Адрес: г.Москва, ул.Академика Королева,12
        </div>
    </footer>

</body>
</html>