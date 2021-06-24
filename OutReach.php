<?php 
    include 'dbconnection.php';
    $query = "SELECT * FROM `outreachprogram` WHERE `OPName` = '$Outvariable'";
    $result = mysqli_query($db,$query);
?>
<?php if($result->num_rows > 0){ ?>    
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class="swiper-slide"> 
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['OPImage']); ?>" />
            </div>  
        <?php } ?>       
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
<?php mysqli_close($db);
?>