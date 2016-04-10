<?php
	$conn = new mysqli("localhost","root","","testdatabase");
	$conn->set_charset('utf8');

	$reports = $conn->query("SELECT picture,topic,content,reporter FROM special_reports");
	    
	while($report = $reports->fetch_assoc()) 
	{
	    	
	}
   
	$conn->close();
?>