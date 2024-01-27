
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<?php 
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/www/bez/config/config.php');
include_once(BASE_PATH . '/includes/header.php');
include_once(BASE_PATH . '/includes/addmenu.php');
?>

<div  class="container bg-light-50">
    <!--здесь подключаются страницы-->
    <div id="page-wrapper">
    <div style="max-width: 500px; margin-left: auto; margin-right: auto; margin-top: 20px;">

<!-- Сообщение которое будем показывать при успешной отправки формы -->
<div class="form-result d-none">Вы человек!</div>
<!-- Форма -->
<form id="form" action="/www/bez/captcha-main/assets/php/process-form.php" method="post" novalidate>
  <!-- Капча -->
  <div class="captcha">
    <div class="captcha__image-reload">
      <img class="captcha__image" src="/www/bez/captcha-main/assets/php/captcha.php" width="200" alt="captcha">
      <button type="button" class="captcha__refresh">Обновить</button>
    </div>
    <div class="captcha__group">
      <label for="captcha">Введите капчу</label>
      <input type="text" name="captcha" id="captcha">
      <div class="invalid-feedback"></div>
    </div>
  </div>
  <!-- Кнопка "Отправить" -->
  <button type="submit">Отправить</button>
</form>

</div>
<script src="/www/bez/captcha-main/cap.js"></script>

    </div>
    <!--/#page-wrapper -->
</div>
<!--/container -->
<?php include BASE_PATH.'/includes/footer.php'; ?>