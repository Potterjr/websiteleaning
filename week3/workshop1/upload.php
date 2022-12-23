<link rel="stylesheet" href="style.css">
<h1>
<?php
$target_dir = "img/";
$target_file = $target_dir.basename($_FILES["myfile"]["name"][0]);
$uploadOk = 1;
$imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_FILES["myfile"]))
{

    if ($_FILES["myfile"]["size"][0] > 100000 || $_FILES["myfile"]["size"][1] > 100000 ) {
		
        echo "Sorry, your file is too large 1MB(1mb=1000kb).<br>";
		
		echo 'file size :'.$_FILES['myfile']['size'][0].' KB<br>';
		echo 'file size :'.$_FILES['myfile']['size'][1].' KB';
		
    } 

    else if ($imageFileType != "jpg" && $imageFileType != "png" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
		echo 'file name :'.$_FILES['myfile']['name'][0];
		echo 'file name :'.$_FILES['myfile']['name'][1];
    }

    else{

		foreach($_FILES['myfile']['tmp_name'] as $key => $val)
		{
			$file_name = $_FILES['myfile']['name'][$key];
			$file_size =$_FILES['myfile']['size'][$key];
			$file_tmp =$_FILES['myfile']['tmp_name'][$key];
			$file_type=$_FILES['myfile']['type'][$key];  
			move_uploaded_file($file_tmp,"img/".$file_name);
			//echo '<img  src="img/'.$file_name.' "/>';
			
		}
	
	echo '<div class="grid-container">';
	echo '<div class="grid-item">';
	echo '<img src="img/'.$_FILES['myfile']['name'][0].' "/>'.'<br>';
	echo 'image name :'.$_FILES['myfile']['name'][0].",";
	echo 'file size :'.$_FILES['myfile']['size'][0].' KB';
	echo'</div>';

	echo '<div class="grid-item">';
	echo '<img class="img1" src="img/'.$_FILES['myfile']['name'][1].' "/>'.'<br>';
	echo 'image name :'.$_FILES['myfile']['name'][1].",";
	echo 'file size :'.$_FILES['myfile']['size'][1].' KB';
	
	echo'</div>';
	echo'</div>';
	echo '<a name="" id="" class="btn btn-primary" href="form_6306021411028.html" role="button">back</a>';
    } 
}

?>
</h1>

