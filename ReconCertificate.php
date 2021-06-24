<?php 
    include 'dbconnection.php';
    $query = "SELECT * FROM `pnrecognitions`";
    $result = mysqli_query($db,$query);
?>
<?php if($result->num_rows > 0){ ?> 
    <?php while($row = $result->fetch_assoc()){ ?>
        <div class="Reccard">
            <div class="Recbox">
                <div class="Reccontents">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['PNRImage']); ?>" alt="Recognitions"/>
                </div>
            </div>
        </div> 
    <?php } ?>    
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
<?php mysqli_close($db);
?>