<?php
include "dbconnection.php";
$DJImageVar=$_GET['DJNameS'];
$result = mysqli_query($db,"SELECT `DJImage` FROM  `djslogin` WHERE `DJname` = '$DJImageVar'");
?>
<?php if($result->num_rows > 0){ ?> 
  <?php while($row = $result->fetch_assoc()){ ?>
        <?php echo base64_encode($row['DJImage']); ?>    
    <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
<?php mysqli_close($db);
?>