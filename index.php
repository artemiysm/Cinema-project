<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style2.css">
</head>
<body>
<div class="header">
    <header>
        <nav>
            <ul>
                <li><a href="#">Пушкинская карта</a></li>
                <li><a href="#">О нас</a></li>
                
                    <img class="logo2" src="assets/image/logo.png" alt="">
                <li><a href="#">Новости</a></li>
                <li><a href="pages/sign_up.html">Авторизация</a></li>

            </ul>
            
        </nav>
        
    </header>
</div>
        <div class="promo">
            <img class="promo-img"  src="assets/image/promo.jpg">
        </div>
            
    <div class="images">    
        

    <div class="card">
                <img src="assets/image/" class="card-img">
        </div> 
            
<?php
// Параметры для подключения
$db_host = "127.127.126.26"; 
$db_user = "root"; // Логин БД
$db_password = "^ruS7]u56^£L"; // Пароль БД
$db_base = 'kino'; // Имя БД
$db_table = "picture"; // Имя Таблицы БД
$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
      // Устанавливаем корректную кодировку
$db->exec("set names utf8");
?>

<?php
$sql = SELECT * FROM picture;
$result = execute($sql);
while ($array = $result -> fetch(PDO::FETCH_ASSOC))
{

         echo   '<div class="card">
                <img src="assets/image/'.$array['picture'].'" class="card-img">
        </div>';
} 
?>


        <div class="card">
            <img src="assets/image/sumerki.jpg" class="card-img">
        </div> 


    
        <div class="card">
            <img src="assets/image/gari potter 3.jpg" class="card-img">
        </div> 
    

    
        <div class="card">
            <img src="assets/image/50 оттенков серого.jpg" class="card-img">
        </div> 
        

    
        <div class="card">
            <img src="assets/image/raven.jpg" class="card-img">
        </div> 
    

    
        <div class="card">
            <img src="assets/image/anabel.jpg" class="card-img">
        </div> 
    

   
        <div class="card">
            <img src="assets/image/joker.jpg" class="card-img">
    </div> 
    

    
        <div class="card">
            <img src="assets/image/killer akame.jpg" class="card-img">
        </div> 

        
            <div class="card">
                <img src="assets/image/atack titans.jpg" class="card-img">
            </div> 
       

        
            <div class="card">
                <img src="assets/image/luntik.jpg" class="card-img">
            </div> 
        

       
            <div class="card">
                <img src="assets/image/elvin and burunduk.jpg" class="card-img">
            </div> 


        
      
        
    </div>

    <div class="footer">
        <footer>
            <nav>
                <ul>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Подарочные карты</a></li>
                    <div class="logo-card"></div>
                        
                    <li><a href="#">Расмотрение претензий</a></li>
                    <img class="logo2" src="assets/image/logo.png" alt="">        
                    </ul>
            </nav>
        </footer>
    </div>
    
        
    
     
</div>
</body>
</html>