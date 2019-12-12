


<form action="import.php" method="post" enctype="multipart/form-data">
<input type="file" name="file1">
<input type="submit" value="Import">
<?php 
if (isset ($_FILES['file1'])) {
    echo "File uploaded";
    header('Location: search.php');
}
?>

</form>