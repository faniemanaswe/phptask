<!DOCTYPE html>
<html>
<body>
<title> Task 10</title>

<?php
include("menu.inc");
echo "<br /><br />";
?>

 <h2> TASK 	10 A </h2>
 <?php
 $uploadDir = getcwd(). DIRECTORY_SEPARATOR ;
 $filename = '';

$items = scandir($uploadDir);
$files = array();
foreach ($items as $item) {
    $item_path = $uploadDir . DIRECTORY_SEPARATOR . $item;
    if (is_file($item_path)){
        $files[] = $item;
    }
}
if (count($files)> 0 ) {
    echo "<p> Files in : $uploadDir </p>";
    echo '<ul>';
    foreach ($files as $file){
        echo '<li>'. $file .'</li>';
    }
    echo '</ul>'; 
} else {
echo "no files in directry ";
}

$my_file = 'newfile.php';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);

$my_file = 'newfile.php';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'Jude 1:21
21  keep yourselves in God’s love as you wait for the mercy of our Lord Jesus Christ to bring you to eternal life.'."<br>";
fwrite($handle, $data);

$my_file = fopen("newfile.php", "r") or die("Unable to open file!");
echo fread($my_file,filesize("newfile.php"));
fclose($my_file);



    $to = "ict-test@gmail.com";
    $subject = "Uploaded file";
    $body = file_get_contents("newfile.php");
    $txt = " dear sir/mam an requsted file content";
    $headers = "From: 54384508.com" . "\r\n" ;
    
    $success = mail($to,$subject,$body,$txt,$headers);
   if (!$success) {
  echo "Mail  " . $to . " failed .";
   }else {
  echo "Success : Mail was send to " . $to ;
   }
 
   rename("newfile.php","oldfile.php");


?>
<iframe src="Task10.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>