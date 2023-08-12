<?php
$oldEmail = $_POST['mail']; // Получаем старую почту из формы
$newEmail = $_POST['new_email']; // Получаем новую почту из формы
$secretCode = generateSecretCode(); // Генерируем секретный код

if (!empty($newEmail) && $oldEmail != $newEmail) {
    // Отправить секретный код на старую почту
    sendCodeToEmail($oldEmail, $secretCode);

    // Сохранить новую почту в базу данных
    saveNewEmailToDatabase($newEmail);
}
?>
<?php
  function generateSecretCode() {
      // Генерация случайного секретного кода
      $secretCode = mt_rand(100000, 999999);
      return $secretCode;
  }

  function sendCodeToEmail($email, $code) {
      // Отправка письма на указанную почту со сгенерированным кодом
      $to = $email;
      $subject = 'Секретный код';
      $message = 'Ваш секретный код: ' . $code;
      mail($to, $subject, $message);
  }

  function saveNewEmailToDatabase($email) {
      // Сохранение новой почты в базе данных
      // Ваш код для сохранения в базу данных
  }
  ?>
