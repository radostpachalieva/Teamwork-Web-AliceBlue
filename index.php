<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alice Blue</title>
        <link type="text/css" rel="stylesheet" href="reset.css" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css.map" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css.map" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

        <script language="javascript" type="text/javascript" src="js/On-Click.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/npm.js"></script>

        <!--It has to go in js file-->
        <script language="javascript" type="text/javascript">
            function showHide(shID) {
                if (document.getElementById(shID)) {
                    if (document.getElementById(shID + '-show').style.display != 'none') {
                        document.getElementById(shID + '-show').style.display = 'none';
                        document.getElementById(shID).style.display = 'block';
                    }
                    else {
                        document.getElementById(shID + '-show').style.display = 'inline';
                        document.getElementById(shID).style.display = 'none';
                    }
                }
            }
        </script>
        <!------------------------------------->
    </head>
    <body>
        <header>
            <nav>

            </nav>
        </header>

        <section>
            
            <!--Radost-->
            <h2 id="newsh">- Новини -</h2>
            <div id="news">

                <article>
                    <div class="news-image">
                        <img src="images/Picture1.jpg" />
                    </div>
                    <header class="news-title">
                        Нов безплатен курс по "Основи на програмирането" започва от 28 март
                    </header>

                    <p>
                        Вече е активно кандидатстването за нов безплатен подготвителен курс по "Основи на програмирането" в СофтУни (ниво #0).
                        <a href="#" id="example-show" class="showLink" onclick="showHide('example');
                                return false;">Още..</a>
                    </p>
                    <p id="example" class="more">
                        Всички желаещи могат да кандидатстват до 24 март 23:59 ч., и ще започнат обучението си с програмния език C# от 28 март. Кандидатите могат да изберат дали да се обучават в присъствена или онлайн форма.
                        Подготвителният курс ще се провежда два пъти седмично - всяка събота и всеки вторник следобед. По време на подготвителното си обучение, кандидат-студентите ще се научат на фундаментите в програмирането, като включените теми са Математика за програмисти, Въведение в програмирането, Примитивни типове данни и променливи, Оператори и изрази, Вход и изход от конзолата, Условни конструкции, Цикли, C# за напреднали.
                        Курсът ще приключи на 18 април, а приемният изпит ще се състои на 25 април. Всички, които успешно вземат изпита, могат да станат наши студенти и да започнат ниво #1 от 4 май 2015 г.
                        <a href="#" id="example-hide" class="hideLink" onclick="showHide('example');
                                    return false;">Скрий</a>
                    </p>
                </article>
            </div>
            <!--End Radost-->
            
            <!--Tihomira-->
            <h2 id="newsh">- Галерия -</h2>
            <div id="gallery">

            </div>
            <!--End Tihomira-->
            
            <!--Ali-->
            <h2 id="newsh">- Екип -</h2>
            <div id="team">

            </div>
            <!--End Ali-->
            
            <!--Borislav-->
            <h2 id="newsh">- Контакти -</h2>
            <div id="contact">

            </div>
            <!--End Borislav-->
        </section>
    </body>
</html>
