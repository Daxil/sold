<?php
include 'dbconnect.php';

// Проверяем, был ли запрос на выход
if(isset($_GET['logout'])) {
    // Удаляем переменную сессии с именем пользователя
    setcookie('login', '', time() - 3600, '/');
    header("Location: ./../login.php");
  exit();
}
if(isset($_GET['main'])) {
  header("Location: indexgo.php");
  exit();
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css\cart.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css\css.css?<?echo time();?>">
    <link rel="stylesheet" type="text/css" href="css\inCard.css?<?echo time();?>">
    <link rel="stylesheet" type="text/css" href="css\footer.css?<?echo time();?>">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/search.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="adoptaition\frstAdopt.css?<?echo time();?>">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
<header>
  <div class="main"style="display:inline-block;">
    <a href="indexgo.php" class="label">reused</a>

      <input type="text" name="" value="" placeholder="Поиск"class="search" ></input>
    <a href="#" class="sell">Продать</a>
    <a href="#" class="bar">Купить</a>
    <a href="profile.php" class="sell">Профиль</a>
      <a href="?logout=1" class="bar">Выйти</a>

  </div>
    <nav id="menu" style="position:inherit">
             <div class="menu-item">
                 <div class="menu-text">
                     <a href="#">Бренды</a>
                 </div>
                 <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Частые</h3>
                         <a href="#">Adidas</a>
                         <a href="#">Nike</a>
                         <a href="#">Levi's</a>
                         <a href="#">Evisu</a>
                     </div>
                     <div class="box">
                         <h3>Популярные сейчас</h3>
                         <a href="#">Chrome hearts</a>
                         <a href="#">Bape</a>
                         <a href="#">Stone Island</a>
                         <a href="#">Nike</a>
                     </div>


                 </div>
             </div>
             <div class="menu-item highlight">
                 <div class="menu-text">
                     <a href="#">Мужское</a>
                 </div>
                <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Your Journey</h3>
                         <a href="#">Get Started</a>
                         <a href="#">Learn the Basics</a>
                         <a href="#">Get Advanced</a>
                         <a href="#">Start Teaching</a>
                     </div>
                     <div class="box">
                         <h3>Your Tools</h3>
                         <a href="#">Turbo Editor</a>
                         <a href="#">Time Stopper</a>
                         <a href="#">Brain Enhancer</a>
                         <a href="#">Network Maker</a>
                     </div>

                 </div>
             </div>
             <div class="menu-item highlight">
                 <div class="menu-text">
                     <a href="#">Женское</a>
                 </div>
                <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Your Journey</h3>
                         <a href="#">Get Started</a>
                         <a href="#">Learn the Basics</a>
                         <a href="#">Get Advanced</a>
                         <a href="#">Start Teaching</a>
                     </div>
                     <div class="box">
                         <h3>Your Tools</h3>
                         <a href="#">Turbo Editor</a>
                         <a href="#">Time Stopper</a>
                         <a href="#">Brain Enhancer</a>
                         <a href="#">Network Maker</a>
                     </div>

                 </div>
             </div>
             <div class="menu-item">
                 <div class="menu-text">
                     <a href="#">Коллекции</a>
                 </div>
                 <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Your Journey</h3>
                         <a href="#">Get Started</a>
                         <a href="#">Learn the Basics</a>
                         <a href="#">Get Advanced</a>
                         <a href="#">Start Teaching</a>
                     </div>
                     <div class="box">
                         <h3>Your Tools</h3>
                         <a href="#">Turbo Editor</a>
                         <a href="#">Time Stopper</a>
                         <a href="#">Brain Enhancer</a>
                         <a href="#">Network Maker</a>
                     </div>

                 </div>
             </div>
             <div id="sub-menu-container">
                 <div id="sub-menu-holder">
                     <div id="sub-menu-bottom">

                     </div>
                 </div>
             </div>
         </nav>

  </div>
</header>
<br><br><br>
<main>
  <div class="CardPhoto">
    <div class="container">
    <div class="row row-cols-2" >

      <div class="col">
        <div class="mainPhoto">

        </div>
        </div>
      <div class="col" >
        <div class="mainText">
          <h2 class="NameItem">Geobasket</h2>
          <h4 class="brend">Rick Owens</h4>
          <div class="legitButton">
          <a href="#" class="infoLegit">
          <div class="row row-cols-2 legitBlok" style="margin-left: auto;
          margin-right: auto;">
            <div class="col stiker">
              <img src="https://cdn2.iconfinder.com/data/icons/emoji-pixel/64/2-smile-1024.png" alt="" class="smail">
            </div>

            <div class="col LegitText">
              <h5 class="verdict">LEGIT</h5>
            </div>
            <div class="leftInfo" style="width: 100%;">
              <h6>Станадртный легит проходит каждая вещь, но она не дает 100% гарантию оригинал , а лишь помогает отсеить очевидные подделки</h6>
            </div>
          </div>
          </a>
            </div>
          <br>
          <div class="otherData">
            <div class="adres">
              <h5>Адрес:</h5>
              <h6 class="adres">Санкт-Петербург, Серебристый б-р, 34к1</h2>
            </div>
            <br><br>
            <div class="haract">
              <h5>Харакатеристики</h5>
              <h6>Состояние: Отличное</h6>
              <h6>Раземер: М</h6>
              <h6>Цвет: Белый</h6>
              <h6>Item Id: 555016-300</h6>
            </div>
            <br><br>
          </div>
        </div>
      </div>
    </div>
    <div class="opisanie">
      <h5>Описание:</h5>
      <h6 class="textOpisanie"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
    </div>
  </div>
  </div>
  <div class="CardPhotoAdopt">
    <div class="container">
    <div class="row row-cols-1" >

      <div class="col">
        <div class="mainPhoto">

        </div>
        </div>
      <div class="col" >
        <div class="mainText">
          <h2 class="NameItem">Geobasket</h2>
          <h4 class="brend">Rick Owens</h4>
          <div class="legitButton">
          <a href="#" class="infoLegit">
          <div class="row row-cols-2 legitBlok" style="margin-left: auto;
          margin-right: auto;">
            <div class="col stiker">
              <img src="https://cdn2.iconfinder.com/data/icons/emoji-pixel/64/2-smile-1024.png" alt="" class="smail">
            </div>

            <div class="col LegitText">
              <h5 class="verdict">LEGIT</h5>
            </div>
            <div class="leftInfo" style="width: 100%;">
              <h6>Станадртный легит проходит каждая вещь, но она не дает 100% гарантию оригинал , а лишь помогает отсеить очевидные подделки</h6>
            </div>
          </div>
          </a>
            </div>
          <br>
          <div class="otherData">
            <div class="adres">
              <h5>Адрес:</h5>
              <h6 class="adres">Санкт-Петербург, Серебристый б-р, 34к1</h2>
            </div>
            <br><br>
            <div class="haract">
              <h5>Харакатеристики</h5>
              <h6>Состояние: Отличное</h6>
              <h6>Раземер: М</h6>
              <h6>Цвет: Белый</h6>
              <h6>Item Id: 555016-300</h6>
            </div>
            <br><br>
              <div class="opisanie">
                <h5>Описание:</h5>
                <h6 class="textOpisanie"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
              </div>
              <div class="">

              </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer class="page-footer">
    <div class="container bootom">
  <div class="row">
    <div class="col-sm-8" style="font-size: 21pt; margin-left: -80px; ">Для Клиентов</div>
    <div class="col-sm-4"  style="font-size: 21pt; margin-left: 60px;" >О нас</div>
  </div>
  <div class="spis" style="margin-left: -120px;">


  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Помощь и контакты</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Наша История</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Вопросы и ответы</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Вакансии</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Заказы и доставка</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Для продавцов</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Цены и оплата</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Политика конфедициальности</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Гарантии</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Условия пользования</a> </div>
  </div>
    </div>
</div>
  </footer>
</body>

    <script src="js.js?<?echo time();?>"></script>
    <script  src="card.js?<?echo time();?>"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
