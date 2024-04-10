<?php
/*

настройка php_ini:
post_max_size - размер данных передаваемых POST
upload_max_filesize - максимальный размер загруженного файла

*/
require 'functions.php';
printR($_POST);
printR($_FILES);

if(!empty($_FILES) && !empty($_POST['path'])){

	foreach ($_FILES['upload']['error'] as $key => $error) {
		if($error == 0){
			$tmpName = $_FILES['upload']['tmp_name'][$key];
			$name = 'u/'.$_POST['path'].'/'.$_FILES['upload']['name'][$key];
			$upload = move_uploaded_file($tmpName, $name);
			if($upload){
				echo 'Файл '.$name.' загружен';
			}else{
				echo 'Ошибка загрузки '.$name;
			}
		}
	}

	
}