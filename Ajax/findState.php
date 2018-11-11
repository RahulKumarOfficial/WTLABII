<?php
        $country=intval($_GET['country']);
        $con=mysqli_connect('localhost:3306','rahul','','country');
        $sql="select stateID,stateName from state where countryID='$country'";
        $result=mysqli_query($con,$sql);
?>
<select name="s_name" onchange="getCity(<?php echo $country?>,this.value)">
        <option>Select State</option>
<?php
        while($row=mysqli_fetch_array($result))
        { ?>
        <option value=<?php echo $row['stateID']?>><?php echo $row['stateName']?></option>
        <?php } ?>
</select>
