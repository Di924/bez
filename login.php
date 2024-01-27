<?php
session_start();
require_once './config/config.php';
include_once('includes/header.php');
?>
<link rel="stylesheet" href="css/login.css">
    <div class="container-l">
        <div class="col">
            <div class="login-form">
                <div class="list-group list-group-horizontal" id="list-tab">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#list-1" role="tab">Вход</a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#list-2" role="tab">Регистрация</a>
                </div>
            </div>
            <div class="login-form">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade  show active" id="list-1" role="tabpanel">
                        <div class="mt-4 justify-content-center">
                            <h1>Вход</h1>
                            <form action="./auth.php" method="post" class="form loginform">
                                <input class="form-control" type="text" name="login" id="login"placeholder="Login"><br>
                                <input class="form-control" type="password" name="pass" id="pass" placeholder="Password"><br>
                                <button class="btn btn-outline-success" type="submit">Войти</button>
                            </form>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="list-2" role="tabpanel">
                        <div class="mt-4 align-items-center">
                            <h1>Форма регистрации</h1>
                            <form action="./check.php" method="post" class="form loginform">
                                <p>Имя</p>
                                <input class="form-control" type="text" name="name" id="name">
                                <p>Логин</p>
                                <input class="form-control" type="text" name="login" id="login">
                                <p>Пароль</p>
                                <input class="form-control" type="password" name="pass" id="pass"><br>
                                <button class="btn btn-outline-success" type="submit">Зарегистрироваться</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  include_once('includes/footer.php'); ?>