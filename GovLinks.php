<?php 
    include 'dbconnection.php';
    $query = "SELECT * FROM `governmentlinks`";
    $result = mysqli_query($db,$query);
?>
<?php if($result->num_rows > 0){ ?> 
  <?php while($row = $result->fetch_assoc()){ ?>
            <a target="_blank" rel="noreferrer" href="<?php echo $row['GLLink'] ?>">
            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['GLImage']); ?>" alt="Govlinks"></a>         
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
<?php mysqli_close($db);
?>