<!DOCTYPE html>
<html>
    <head>
        <meta charset = utf-8>
        <title>Мой первый блог</title>
        
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    
    
    
    
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&&id=<?=$_GET['id']?>">
                    <label>
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <label>
                        Дата
                        <input type="date" name="date" class="form-item" value="<?=$article['date']?>" required>
                    </label>
                    <label>
                        Содержимое
                        <textarea name="content" class="form-item" required>
                            <?=$article['content']?>
                        </textarea>
                    </label>
                    <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
        
        <footer>
                <p>Мой первый блог<br>
                Copyright &copy; 2015
                </p>
        </footer>
    </body>
</html>