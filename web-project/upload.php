
<?php 
$conn = new PDO('mysql:host=localhost; dbname=wmo','root', ''); 
?>
<?php
 
if (isset($_POST['Submit'])) {
 
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" .basename($_FILES["image"]["name"]) );			
$location=$_FILES["image"]["name"];
$fname=$_POST['title'];
$lname=$_POST['content'];
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO upload (title, content, image)
VALUES ('$fname', '$lname', '$location')";
 
$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='addnewteachers.html'</script>";
}
?>
