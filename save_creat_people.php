<?php include 'connect.php'; ?>
<?php
    $id_card=$_POST["id_card"];
    $titlename=$_POST["titlename"];
    $fullname=$_POST["fullname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $birthday=$_POST["birthday"];
    $age=$_POST["age"];
    $account_name=$_POST["account_name"];
    $mmoney=$_POST["mmoney"];
    $aaddress=$_POST["aaddress"];
    $ppassword=$_POST["ppassword"];
    $email=$_POST["email"];
    mysqli_query($conn, "INSERT INTO databank (id_card,titlename,fullname,phone,email,birthday,age,account_name,mmoney,aaddress,ppassword)
    VALUES('$id_card','$titlename','$fullname','$phone','$email','$birthday','$age','$account_name','$mmoney','$aaddress','$ppassword')");
    if (mysqli_affected_rows($conn) > 0) {
        echo '<p>Account Created</p>';
        echo '<a href= "login.php">Back to login</a';
    }else{
        echo 'Account not Created';
        echo mysqli_error($conn);
    }
?>