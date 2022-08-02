<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="spices";


$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn){
    echo "connection failed:".mysqli_connect_error();
    exit;
}

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h3> Image store</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" name="submit" value="save">
        </form>
        <?php
        if(isset($_POST["submit"])){
           if(getimagesize($_FILES['image']['tmp_name'])==false){
            echo"please select image";
           }
           else{
            echo"store";
           }
        }
        else{
            echo"Please select image to save";
        }
        $sql="SELECT * FROM products";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo"<img width='300px' height='300px'
                src='data:image;base64,{$row["img"]}' alt='img'>";
                
                echo "<br><hr>";
            }
        }
        ?>
    </body>
</html>