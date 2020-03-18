<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Математика</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="wrapper">
            <div class="content">
                <header>
                    <?php include('nav.html') ?>
                    <a class="button-signin" href="signin.php"><button>Войти</button></a>    
                </header>

                <div class="home" >
                    <h1 class="home-title">MATHEMATICS</h1>
                </div>

                <div class="choose-training">
                    <a class="item-training" href="schoolchildren.php">
                        <button>
                            <img src="assets/img/For schoolchildren.svg" alt="Parabola">
                            <h3>Для школьников</h3> 
                        </button>
                    </a>
                    <a class="item-training" href="students.php">
                        <button>
                            <img src="assets/img/For students.svg" alt="Function">
                            <h3>Для студентов</h3> 
                        </button>
                    </a>
                </div>
            </div>

            <?php include('footer.html') ?>
        </div>

    </body>
</html>