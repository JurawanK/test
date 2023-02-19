<!DOCTYPE html>
<html>

<body>
    <?php
    require("connect.php");
    $account_name=$_POST["account_name"];
    $ppassword=$_POST["ppassword"];
    $account_id="";
    //echo $account_name.$password;
    $sql = "SELECT * FROM databank WHERE password='$ppassword' AND account_name='$account_name'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $account_id=$row["account_id"];
    header( "location: data_people.php?account_id=$account_id");
  }
} else {
    header( "location: login.php");
}
    ?>
</body>
</html>