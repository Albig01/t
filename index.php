<?php
session_start();
echo '<form action="" method="post">
    <div>
        LOGIN
        <ul>
            <li><label>name</label><input type="text" name="name"></li>
            <li><label>pass</label><input type="password" name="pass"></li>
            <li><input type="submit" value="login"></li>
        </ul>
    </div>
</form><br>';

require_once $$_SERVER['DOCUMENT_ROOT'] . "/config.php";
if(!empty($_POST['name']) && !empty($_POST['pass'])){
	if(array_key_exists($_POST['name'], $mLogin)){
		if($_POST['pass'] == $mLogin[$_POST['name']]){
			$filename = $_SERVER['DOCUMENT_ROOT'] . "/t/controllers/" . $_POST['name'] . ".php";
				if(!empty($filename) && file_exists($filename)){
				require_once $filename;
			} 
		}
	}else {
				require_once $$_SERVER['DOCUMENT_ROOT'] . "/controllers/404.php";
				
	}
} 
?>
