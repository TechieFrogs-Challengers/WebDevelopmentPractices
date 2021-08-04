
<?php
    $conn = mysqli_connect("localhost", "root", "", "regData");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
    $id=$_REQUEST['userid'];
	echo "$id";
    $query = "DELETE FROM data WHERE username='$id';"; 
    $result = mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Reservation Deleted Successfully')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/PHPPrograms/SQL/ViewData.php">
    <?php
   
    }
else{
    echo "<font color='red'>Failed to Delete Reservation";
}  
?>