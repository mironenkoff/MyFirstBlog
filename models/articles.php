<?php

    function articles_all($link)
    {
        //Запрос
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        if (!$result) die(mysqli_error($link));
        
        //Извлечение из БД
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

    function articles_get($link, $id_article){
          //Запрос
        $query = sprintf ("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);
        if (!$result) die(mysqli_error($link));
        
        //Извлечение из БД
       
            $article = mysqli_fetch_assoc($result);
    
        return $article;      
        
    }
    
    function articles_new($link, $title, $date, $content){
        //Подготовка
        $title = trim($title);
        $content = trim($content);
        //Проверка
        if($title == '')
            return FALSE;
        //Запрос
        $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
        $query = sprintf($t, mysqli_real_escape_string($link, $title),
                mysqli_real_escape_string($link, $date),
                mysqli_real_escape_string($link, $content));
        echo $query;
        $result = mysqli_query($link, $query);
        if(!$result)
            die (mysql_error ($link));
        return TRUE;
    }

    function articles_edit($link, $id, $title, $date, $content){
        //Подготовка
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
        //Проверка
        if($title == '')
            return FALSE;
        //Запрос
        $sql = "UPDATE articles SET title = '%s', date = '%s', content = '%s' WHERE id = '%d'";
        $query = sprintf($sql, mysqli_real_escape_string($link, $title),
                mysqli_real_escape_string($link, $date),
                mysqli_real_escape_string($link, $content),
                $id);
        echo $query;
        $result = mysqli_query($link, $query);
        if(!$result)
            die (mysql_error ($link));
        return mysqli_affected_rows($link);
    }
    
    function articles_delete($link, $id){
         //Подготовка
        $id = (int)$id;
        //Проверка
        if($id == 0)
            return FALSE;
        //Запрос
        $delete = "DELETE FROM articles WHERE id = '%d'";
        $query = sprintf($delete, $id);
        echo $query;
        $result = mysqli_query($link, $query);
        if(!$result)
            die (mysql_error ($link));
        return mysqli_affected_rows($link);
    }
    function articles_intro($text, $len = 500){
        return mb_substr($text, 0, $len);
    }
?>