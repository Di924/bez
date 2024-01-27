<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="/www/bez/css/menu.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/www/bez/js/menu.js"></script><?php 
    echo '
    <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light-50">
                <div class="container-fluid">
                    <a class="navbar-brand pull-left" href="/www/bez/index.php">Кабан</a>
                    <ul id="ul-link" class="navbar-nav">
                        <li class="nav-item"><a class="nav-link navbar-brand" href="#"> Услуги </a></li>
                        <li class="nav-item"><a class="nav-link navbar-brand" href="#"> Прейскурант </a></li>
                        <li class="nav-item"><a class="nav-link navbar-brand" href="#"> Контакты </a></li>
                        <li class="nav-item"><a class="nav-link navbar-brand" href="#"> О нас </a></li>
                    </ul>
                        
    ';
    if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
        echo '<a class="navbar-brand pull-right" href="/www/bez/logout.php">Выйти</a>
            </div> <!-- end container-fluid -->
        </nav>
    </div> <!-- end row -->
    <div id="wrapper">
    <div class="overlay"></div>';
    include_once(BASE_PATH . '/menu.php');
    }else {
        echo '<a class="navbar-brand pull-right" href="/www/bez/login.php">Войти</a>
            </div> <!-- end container-fluid -->
        </nav>
    </div> <!-- end row -->
    <div id="wrapper">
    <div class="overlay"></div>
    <!-- Page Content -->
        <div id="page-content-wrapper">';
    }
?>