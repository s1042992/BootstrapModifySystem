<title>iTHome_Test</title>
    <meta http-equiv="content-type" charset="UTF-8" />

		<?php

		$db = new mysqli("localhost","root", "", "member");
		if ($db->connect_error) {
			die('無法連上資料庫：' . $db->connect_error);
		}
		$db->set_charset("utf8");
		
			
			
			$get_account=htmlspecialchars($_POST["account"]);
			$get_password=htmlspecialchars($_POST["password"]);
            
			/*$get_value3=htmlentities($_POST["carousel"],ENT_QUOTES,"UTF-8");
           echo "值:".$get_value3;*/
			
			$sql = "INSERT INTO user(user_name, user_pass) VALUES ('$get_account','$get_password')";
			if (mysqli_query($db, $sql)) {
				  echo "<br> New record created successfully";
			} else {
				  echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
			mysqli_close($db);

        ?>