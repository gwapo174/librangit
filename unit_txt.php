<?php
	require("database.php");
		//case#1: Inserting data using valid SQL insert command
		$dbObj = new database();
		//$result= $dbObj->execute("INSERT INTO user(name,username,email,password) VALUES ('libran','rondel','Rondel.libran@yahoo.com','rondellibran')");
		//echo "Case1 result:".$result;
		
		
		//$result = $dbObj->execute("UPDATE user SET name='rondel' WHERE id=");
		//echo "Case2 result:".$result;
		
		
		//$result= $dbObj->execute("SELECT * FROM user");
		//echo "Case3 result:".$result;
		
		
		//$result= $dbObj->execute("DELETE FROM user WHERE id=1");
		//echo "Case4 result:".$result;
		
		
		//case#5 Inserting data using invalid SQL insert command
	   //$result= $dbObj->execute("INSERT INTO user(username,email,password) VALUES ('rondel','Rondel.libran@yahoo.com','rondellibran')");
	  //echo "Case5 result:".$result;
	  
	  
		//$result = $dbObj->execute("UPDATE user SET name='rondel' WHERE id=");
		//echo "Case6 result:".$result;
		
		//$result= $dbObj->execute("SELECT FROM user");
		//echo "Case7 result:".$result;
		
		$result= $dbObj->execute("DELETE FROM user WHERE id1");
		echo "Case8 result:".$result;
		
		
		
		
	
	
	
?>