<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css\cart.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css\css.css?<?echo time();?>">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/search.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
<header>
  <div class="main"style="display:inline-block;">
    <a href="index.php" class="label">SOLD|EX</a>

    <input type="text" name="" value="" placeholder="Поиск"class="search" ></input>
    <a href="#" class="sell">Продать</a>
    <a href="#" class="bar">Купить</a>
    <a href="login.php" class="bar">Войти</a>
    <a href="reg.php" class="reg">Регистрация</a>
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

    <h1>Профиль</h1>

    <?php
    $name = $_GET['name'];

    echo "Имя пользователя: " . htmlspecialchars($name);
    ?>
  </body>

      <script src="js.js?<?echo time();?>"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </html>
