<?
//require_once 'reg.php';
//require_once 'login.php';
require_once 'database.php';

date_default_timezone_set("Europe/Moscow") ;
    if(isset($_POST['go_add']))
    {
        if (isset($_POST['title']))        {$title = $_POST['title']; if ($title == '') {unset($title);}}

        if (isset($_POST['date']))        {$date = $_POST['date']; if ($date == '') {unset($date);}}
        if (isset($_POST['small_text'])) {$small_text = $_POST['small_text']; if ($small_text == '') {unset($small_text);}}
        if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
        if (isset($_POST['author']))      {$author = $_POST['author']; if ($author == '') {unset($author);}}
        if (isset($_POST['id']))      {$id = $_POST['id'];}
        

        if ($_POST['title']!="" && $_POST['date']!="" && $_POST['small_text']!="" && $_POST['author']!="" )

        {

            if (mysql_query ("INSERT INTO news SET
            title='".$title."',
            date='".$date."',
            small_text='".$small_text."',
            text='".$text."',
            author='".$author."'"))
            {
                echo "<div class='clean-ok'>Новость успешно добавлена!<br><a href='/admin/index.php?f=news&mod=add'>Добавить ещё.</a></p></div>";
            }
            else
            {
                echo "<div class='clean-gray'>Неудалось обработать базой<div>";
                        $dar=mysql_error();
                echo $der;
            }


        }
        else
        {
            echo "<div class='clean-error'><p>Незаполнена вся инфа.</p></div>";
        }



    } ?>

<form name="form1" method="post" action="">

         <p>
           Введите название <br>
            <input type="text"  style="border:1px silver solid; width:160px;" name="title" id="title">

         </p>


         <p>
           Введите автора <br>
           <input name="author" style="border:1px silver solid; width:160px; type="text" id="author" value="Admin" >

         <p>



           Введите дату добавления <br>
           <input name="date"  style="border:1px silver solid; width:160px;" type="text" id="datepicker" value="<?php $date = date("m/d/Y"); echo $date; ?>">


<br>
<p>
           Краткая новость<br>
           <textarea style="width:650px; height:240px;" name="small_text" cols="80" ></textarea>

  </p>
         <p>
           Полная новость<br>
           <textarea style="width:650px; height:260px;"  name="text"  cols="80" ></textarea>

       </p>

     <input type="submit" class="buttons" name="go_add"  id="submit" value="Отправить">


</form>
                                                                                      
                                                                                      