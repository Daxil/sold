<?php

session_start(); // Запустить сессию, если еще не запущена
include 'dbconnect.php';
include 'process.php';


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

// Проверяем, был ли отправлен новый выбранный URL изображения
if(isset($_POST['image'])){
  // Обновляем значение выбранного изображения в куки
  setcookie('image', $_POST['image'], time()+24*60*60*30);
  // Перенаправляем пользователя на ту же страницу, чтобы обновить отображение
  header("Location: " . $_SERVER['REQUEST_URI']);
  exit();
}

if(isset($_COOKIE['image'])){
  $selectedImage = $_COOKIE['image'];
} else {
  $selectedImage = 'img/ava.png';
}

// Проверяем подключение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Проверяем, была ли нажата кнопка "Сохранить"
if(isset($_POST['save_adres'])) {
  // Получаем новые данные из input'а
  $newAdres = $_POST['adres'];

  // Проверяем, что поле не пустое
  if(isset($newAdres)) {
    // Обновляем данные в базе данных
    $updateSql = "UPDATE users SET adres='$newAdres'";
    if (mysqli_query($conn, $updateSql)) {
    } else {
      echo "Ошибка при обновлении данных: " . mysqli_error($conn);
    }
  } else {
  }
}

$adresSql = "SELECT adres FROM users";
$adresResult = mysqli_query($conn, $adresSql);

// Проверяем результат запроса
if (mysqli_num_rows($adresResult) > 0) {
  while ($row = mysqli_fetch_assoc($adresResult)) {
    $adres = $row["adres"];
  }
} else {
  echo "0 results";
}
// Проверяем, была ли нажата кнопка "Сохранить"
if(isset($_POST['save'])) {
  // Получаем новые данные из input'ов
  $newName = $_POST['name'];
  $newFullname = $_POST['fullname'];

  // Проверяем, что поля не пустые
  if(!empty($newName) && !empty($newFullname)) {
    // Обновляем данные в базе данных
    $updateSql = "UPDATE users SET name='$newName', fullname='$newFullname'";
    if (mysqli_query($conn, $updateSql)) {
    } else {
      echo "Ошибка при обновлении данных: " . mysqli_error($conn);
    }
  } else {
  }
}

$nameSql = "SELECT name FROM users";
$nameResult = mysqli_query($conn, $nameSql);

// Проверяем результат запроса
if (mysqli_num_rows($nameResult) > 0) {
  while ($row = mysqli_fetch_assoc($nameResult)) {
    $name =  $row["name"];
  }
} else {
  echo "0 results";
}

$fullnameSql = "SELECT fullname FROM users";
$fullnameResult = mysqli_query($conn, $fullnameSql);

// Проверяем результат запроса
if (mysqli_num_rows($fullnameResult) > 0) {
  while ($row = mysqli_fetch_assoc($fullnameResult)) {
    $fullname =  $row["fullname"];
  }
} else {
  echo "0 results";
}

$mailSql = "SELECT mail FROM users";
$mailResult = mysqli_query($conn, $mailSql);

// Проверяем результат запроса
if (mysqli_num_rows($mailResult) > 0) {
  while ($row = mysqli_fetch_assoc($mailResult)) {
    $mail= $row["mail"];
  }
} else {
  echo "0 results";
}
// Получаем введенный пароль и новый пароль из input'ов
$currentPassword = $_POST['currentPassword'];
$newPassword = $_POST['newPassword'];

// Проверяем, что поля не пустые
if(!empty($currentPassword) && !empty($newPassword)) {
  // Получаем текущий пароль из базы данных
  $passwordSql = "SELECT pass FROM users";
  $passwordResult = mysqli_query($conn, $passwordSql);
  $row = mysqli_fetch_assoc($passwordResult);
  $currentPasswordDB = $row['pass'];

  // Сравниваем введенный пароль с паролем из базы данных
  if($currentPassword == $currentPasswordDB) {
    // Если пароли совпадают, обновляем пароль в базе данных
    $updatePasswordSql = "UPDATE users SET pass='$newPassword'";
    if (mysqli_query($conn, $updatePasswordSql)) {
      echo "Пароль успешно изменен";
    } else {
      echo "Ошибка при изменении пароля: " . mysqli_error($conn);
    }
  } else {
    echo "Введенный пароль неверный";
  }
} else {
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr" style="height:1080px;">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css\cart.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css\css.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css\prof.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css\footer.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="adoptaition\frstAdopt.css?<?echo time();?>">
    <link rel="stylesheet" type="text/css" href="adoptaition\profAdop.css?<?echo time();?>">
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
<img src="img/hend.png" class="bg" style="z-index:222;">
<img src="img/hend.png" class="bgAdopt" >
<img src="img/zazig.png" class="bg2" style="z-index:222;">
<img src="img/zip.png" class="bg3" style="z-index:222;">
<div class="profil">
  <div class="avatar">
    <div class="avat" style="background-image:url('<?php echo $selectedImage; ?>')">
      <a href="#" onclick="event.preventDefault();" class="focus">
        <img src="<?php echo $selectedImage; ?>" class="ava" alt="" style="z-index: -123123;">
      </a>
    </div>
    <div class="name">
      <h3 class="person-name"><?php echo $name; ?></h3>
    </div>

    <div class="ava-change">
      <div class="container">
        <div class="row row-cols-3">
          <a href="#"  onclick="updateImage('img/ava.png');">
            <div class="col bearbrick">
              <img src="img/ava.png" alt="" class="bearbrick-ava" width="130" height="130">
            </div>
          </a>
          <a href="#"  onclick="updateImage('bearbrick/1.jpg');">
            <div class="col bearbrick">
              <img src="bearbrick/1.jpg" alt="" class="bearbrick-ava" width="130" height="130">
            </div>
          </a>
          <a href="#"  onclick="updateImage('bearbrick/2.jpeg');">
            <div class="col bearbrick">
              <img src="bearbrick/2.jpeg" alt="" class="bearbrick-ava" width="130" height="130">
            </div>
          </a>

            <a href="#"   onclick="updateImage('bearbrick/5.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/5.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"  onclick="updateImage('bearbrick/6.jpg');" >
              <div class="col bearbrick">
                <img src="bearbrick/6.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/7.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/7.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"  onclick="updateImage('bearbrick/8.jpg');" >
              <div class="col bearbrick">
                <img src="bearbrick/8.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/9.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/9.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/10.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/10.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/11.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/11.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"  onclick="updateImage('bearbrick/12.jpg');" >
              <div class="col bearbrick">
                <img src="bearbrick/12.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/13.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/13.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/14.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/14.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/15.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/15.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/18.jpg');">
              <div class="col bearbrick">
                <img src="bearbrick/18.jpg" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
            <a href="#"   onclick="updateImage('bearbrick/17.png');">
              <div class="col bearbrick">
                <img src="bearbrick/17.png" alt="" class="bearbrick-ava" width: 130px; height: 130px;>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="info">
      <div class="mainInfo circle">
        <a href="#"  onclick="event.preventDefault();">
          <img class="mainInfo-icon" src="img/user.png" alt="" style="z-index: -123123;">
        </a>
      </div>
      <div class="zakaz circle">
        <a href="#"  onclick="event.preventDefault();" >
          <img class="mainInfo-icon" src="img/zakaz.png" alt="" style="z-index: -123123;">
        </a>
      </div>
      <div class="zamery circle">
        <a href="#"  onclick="event.preventDefault();">
          <img class="mainInfo-icon" src="img/zamer.png" alt="" style="z-index: -123123;">
        </a>
      </div>
      <div class="adres circle">
        <a href="#"  onclick="event.preventDefault();">
          <img class="mainInfo-icon" src="img/planet.png" alt="" style="z-index: -123123;">
        </a>
      </div>

    </div>
    <form method="POST">
    <div class="mainInfo-change">
      <div class="name-surname">
        <input type="text" name="name" class="input-name" value="<?php echo $name ?>">
  <input type="text" name="fullname" class="input-name" value="<?php echo $fullname ?>">
      </div>
      <div class="mail-full">
        <input type="mail" name="" class="input-mail" value="<?php echo $mail; ?>">
      </div>
      <div class="pass-full" >
        <label>Введите действующий пароль</label>
       <input type="password" name="currentPassword" class="pass-mail" value="...">
       <label>Введите новый пароль</label>
       <input type="password" name="newPassword" class="pass-mail" value="...">
   </div>
   <button type="submit" class="save" name="save">Сохранить</button>
    </div></form>
  <div class="container ">
    <div class="zakazInfo-change">
    <div class="row">
      <div class="col-md-3">
        <a href="card.php"  style= class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div><div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="card.php" style="text-decoration: none; display:block; width:210px;" class="cardAll">
          <div class="el-wrapper">
            <div class="box-up">
              <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
              <div class="img-info">
                <div class="info-inner">
                  <span class="p-name">I feel like Pablo</span>
                  <span class="p-company">Yeezy</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>  </div>
  </div>
  <div class="zamerInfo-change">
    <div class="row">
      <div class="col-md-6 zamer-top">
        <div class="block1" style="  background-image: url('img/body.jpg')">

          </div>
      </div>
      <div class="col-md-6 zamer-top">
        <div class="block2"  style="  background-image: url('img/shtani.png')"></div>
      </div>
    </div>
  </div>
  <div class="adresInfo-change">
  <div id="map" style="height: 250px; width: 100%;"></div>
    <div class="adres-pole">
      <form method="post">
    <input type="text" name="adres" value="<?php echo $adres; ?>" class="input-adres" placeholder="Введите адрес доставки" id="adres" required>
    <button type="submit" class="save-adres" name="save_adres">Сохранить</button>
  </form>
</div>
  </div>
</body>
<script src="js.js?<?echo time();?>"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  var focusLink = document.querySelector('.focus');
  var avaChangeDiv = document.querySelector('.ava-change');

  focusLink.addEventListener('click', function() {
    if (avaChangeDiv.style.display === 'block') {
      avaChangeDiv.style.display = 'none';
    } else {
      avaChangeDiv.style.display = 'block';
    }
  });
});
</script>

<script>
function updateImage(image) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector(".ava").src = image;
      document.querySelector(".avat").style.backgroundImage = 'url("' + image + '")';
    }
  };
  xhttp.open("POST", "", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("image=" + image);
}
</script>
<script>
document.querySelector('.mainInfo.circle').addEventListener('click', function() {
  var mainInfoChange = document.querySelector('.mainInfo-change');
  closeAllBlocks('.mainInfo-change');
  if (mainInfoChange.style.display === 'none') {
    mainInfoChange.style.display = 'block';
  } else {
    mainInfoChange.style.display = 'none';
  }
});

document.querySelector('.zakaz.circle').addEventListener('click', function() {
  var mainInfoChange = document.querySelector('.zakazInfo-change');
  if (mainInfoChange.style.display === 'block') {
    mainInfoChange.style.display = 'none';
  } else {
    closeAllBlocks('.zakazInfo-change');
    mainInfoChange.style.display = 'block';
  }
});

document.querySelector('.zamery.circle').addEventListener('click', function() {
  var mainInfoChange = document.querySelector('.zamerInfo-change');
  closeAllBlocks('.zamerInfo-change');
  if (mainInfoChange.style.display === 'block') {
    mainInfoChange.style.display = 'none';
  } else {
    mainInfoChange.style.display = 'block';
  }
});

document.querySelector('.adres.circle').addEventListener('click', function() {
  var mainInfoChange = document.querySelector('.adresInfo-change');
  closeAllBlocks('.adresInfo-change');
  if (mainInfoChange.style.display === 'block') {
    mainInfoChange.style.display = 'none';
  } else {
    mainInfoChange.style.display = 'block';
  }
});

function closeAllBlocks(excludeSelector) {
  var blocks = document.querySelectorAll('.mainInfo-change, .zakazInfo-change, .zamerInfo-change, .adresInfo-change');
  for (var i = 0; i < blocks.length; i++) {
    if (blocks[i].style.display === 'block' && blocks[i].classList.value !== excludeSelector.replace('.', '')) {
      blocks[i].style.display = 'none';
    }
  }
}
</script>


<!-- JavaScript код для отображения адреса на яндекс картах -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
  ymaps.ready(init);

  function init() {
    var myMap = new ymaps.Map("map", {
      center: [0, 0], // Начальные координаты карты
      zoom: 15 // Уровень масштабирования карты
    });

    var myPlacemark = new ymaps.Placemark([0, 0], {}, {
      preset: 'islands#redDotIcon' // Стиль маркера
    });

    myMap.geoObjects.add(myPlacemark);

    ymaps.geocode('<?php echo $adres; ?>', {
      results: 1
    }).then(function (res) {
      var firstGeoObject = res.geoObjects.get(0);
      var coordinates = firstGeoObject.geometry.getCoordinates();

      myPlacemark.geometry.setCoordinates(coordinates);
      myMap.setCenter(coordinates);
    });
  }
</script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=2d51505f-7693-4243-8656-9684b0eb0aba&lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
