<?php
include "dbconnection.php";
$compare_u=$_GET['imagetagvalue'];
$query = "SELECT `HMImage` FROM `homepage` WHERE `HomeImagelabel` = '$compare_u'";
$result = mysqli_query($db,$query);
?>
<?php if($result->num_rows > 0){ ?> 
  <?php while($row = $result->fetch_assoc()){ ?>
            <?php echo base64_encode($row['HMImage']); ?>            
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
<?php mysqli_close($db);
?>