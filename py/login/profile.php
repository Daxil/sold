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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <a href="indexgo.php?main=1" class="label">reused.</a>

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
  <main >

    <div class="pageProf">
  <div class="mainProf">
  <a href="#" class="clik" onclick="event.preventDefault();" style="  text-decoration: none;"> <div class="mainInfo" style="position: relative; z-index: 1;">
      <div class="razdel">
      </div>
      <div class="avatar">
        <img class="avatar" src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/aad21f63923487.5ac191a1d5537.jpg" alt="">
      </div>
      <div class="name">
        <h6 class="smname">ЧАЧА</h6>
        <div class="stars">
          <img src="img/stars.png" alt="">
          <img src="img/stars.png" alt="">
          <img src="img/stars.png" alt="">
          <img src="img/stars.png" alt="">
          <img src="img/stars.png" alt="">
        </div>
      </div>
    </div>
</a>
    <div class="class" style="position: relative; z-index: 2;">
    <a href="#" style="text-decoration: none;" onclick="event.preventDefault();" class="infoButton">
      <div class="info col punkt">
        <h4 class="nameClass">Обо мне</h4>
      </div>
    </a>
    <a href="#" style="text-decoration: none;" onclick="event.preventDefault();" class="adresButton">
      <div class="adres punkt">
        <h4 class="nameClass">Адрес доставки</h4>
      </div>
      </a>
      <div class="oplata punkt">
        <h4 class="nameClass">Оплата</h4>
      </div>
      <div class="zakaz punkt">
        <h4 class="nameClass">Заказы</h4>
      </div>
      <div class="zamer punkt">
        <h4 class="nameClass">Замеры</h4>
      </div>
      <div class="alerts punkt">
        <h4 class="nameClass">Оповещения</h4>
      </div>
    </div>
  </div>
</div>
<div class="infoFull" >
  <div class="smenAvatarl">
    <div class="avataria" style="margin-top: 120px;">
      <img class="avatare" src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/aad21f63923487.5ac191a1d5537.jpg" alt="">
      <h6 style="margin-top:30px;   margin-left: 0px;">Сменить аватар:</h6>
    </div>
  </div>
  <div class="fullInfo">
    <h3>Name: ЧАЧА</h3>
    <h6>Mail: xdas28sanil</h6>

  </div>
  <div class="smeniInfo " >
    <h6 class="pad">Сменить ник:</h6>
    <input type="text" name="" value="">
    <h6 class="pad">Сменить почту:</h6>
    <input type="text" name="" value="">
    <h6 class="pad">Сменить пароль:</h6>
    <h6 class="pad">Введите действующий пароль:</h6>
    <input type="text" name="" value="">
    <h6 class="pad">И новый пароль</h6>
    <input type="text" name="" value="">
  </div>
</div>
<div id="adresFull" class="adresFull" >
  <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.251102883679!2d49.170953376397705!3d55.78887757309757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead8324f1aafb%3A0x9e01357bd6633df0!2z0JLQvtC70L7Rh9Cw0LXQstGB0LrQsNGPINGD0LsuLCA2LCDQmtCw0LfQsNC90YwsINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMDA3Mw!5e0!3m2!1sru!2sru!4v1691421911502!5m2!1sru!2sru" width="300" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="adresNadpis">
      <h3>Адрес доставки: </h3>
      <h5>Казань, Волочаевская 6</h5>
  </div>
  <div class="zapomnitAdres">
      <h5 style="margin-right:15px">Сменить адрес:</h5>
      <input type="text" name="" value="">
  </div>
  </div>
</div>
        </main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer class="page-footer">
    <div class="container bootom">

  <div class="spis" style="margin-left: 0px;">


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
      <script>
        var infoButton = document.querySelector('.infoButton');
var infoFull = document.querySelector('.infoFull');

infoButton.addEventListener('click', function() {
infoFull.classList.toggle('show');
});
        </script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
    const adresButtons = document.querySelectorAll('.adresButton');
    const adresFull = document.getElementById('adresFull');

    // Добавляем обработчик клика на каждую кнопку
    adresButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        // Если стиль 'display' равен 'block', изменяем на 'none', иначе меняем на 'block'
        if (adresFull.style.display === 'block') {
          adresFull.style.display = 'none';
        } else {
          adresFull.style.display = 'block';
        }
      });
    });
  });
        </script>
        <script>
        document.querySelector('.clik').addEventListener('click', function() {
    var classBlock = document.querySelector('.class');

    if (classBlock.style.opacity === '0') {
      classBlock.style.opacity = '1';
      classBlock.style.transition = 'opacity 0.5s';
    } else {
      classBlock.style.opacity = '0';
      classBlock.style.transition = 'opacity 0.5s';
    }
  });
        </script>

      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </html>
