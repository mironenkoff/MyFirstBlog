<!DOCTYPE html>
<html>
    <head>
        <meta charset = utf-8>
        <title>Мой первый блог</title>
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    
    
    
    
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
        
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
            
        </div>
        
        <footer>
                <p>Мой первый блог<br>
                Copyright &copy; 2015
                </p>
        </footer>
    </body>
</html>