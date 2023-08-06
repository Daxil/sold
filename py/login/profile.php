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
        <link rel="stylesheet" type="text/css" href="css\prof.css?<?echo time();?>">
        <link rel="stylesheet" type="text/css" href="css\footer.css?<?echo time();?>">
        <link rel="stylesheet" type="text/css" href="adoptaition\frstAdopt.css?<?echo time();?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <a href="indexgo.php?main=1" class="label">reused</a>

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
<img src="img/bg.png" class="bg" alt="">
<img src="img/balePen.png" class="bgAdopt" alt="">
  <main>

  <div class="pageProf" style="  z-index: -1;">
            <div class="bottProf">

              <div class="grid" style="row-gap: 0;" >
                  <div class="g-col-6 avatar">
                  <div class="AvatarLink">

                    </div>
                    <?php
                  echo " ". htmlspecialchars($_COOKIE['login']);
                     ?>
                  </div>

                  <div class="g-col-6 сolect"><a href="#" class="data"><img src="img\order.png" alt="" class="iconsi">Заказы</a></div>
                  <div class="g-col-6 сolect"><a href="#" class="data"><img src="img\adres.png" alt="" class="iconsi">Адресная книга</a></div>
                  <div class="g-col-6 сolect"><a href="#" class="data"><img src="img\otzivi.png" alt="" class="iconsi">Отзывы</a></div>
                  <div class="g-col-6 сolect"><a href="#" class="data"><img src="img\size.jpg" alt="" class="iconsi">Мои замеры</a></div>
                  <div class="g-col-6 сolect"><a href="#" class="data"><img src="img\money.png" alt="" class="iconsi">Оплата</a></div>
                  <div class="g-col-6 сolect"><a href="#" class="data"><img src="img\alert.png" alt="" class="iconsi">Оповещения</a></div>



</div>
            </div>
          </div>




        </main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
   </script>
        <script src="js.js?<?echo time();?>"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </html>
