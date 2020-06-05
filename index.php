<?php 
$dir = getcwd(); 

if (is_dir($dir)){ 
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		$command = escapeshellcmd($file);
		$output = exec($command); 
		flush(); echo "<b>filename:</b>  " . $file . "<br>";
		if($output!==0){
			echo 'Pass <br>';	
			flush ();echo $output . "<br>";
		}
		else{
			echo 'Fail<br><br>';
		}
	}
    closedir($dh);
  }
}
?>
