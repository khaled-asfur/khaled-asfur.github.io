<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "lool";
$dbname = "clothes";
// Create connection


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    
   
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    } else{
      $type=$_POST["type"];
      $price=$_POST["price"];
      $color=$_POST["color"];
      $country=$_POST["country"];
      $image_path=upload_file() ;
      $image_id= insert_image($image_path);


        $sql ="INSERT INTO `clothes`.`items` (`type`, `price`, `color`, `country`, `image_id`, `user_id`) 
        VALUES ('$type', $price, '$color', '$country', $image_id, '1'); ";
        if ($conn->query($sql) === TRUE) {
            echo "New item added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    header('Location: profile.php'); 
}

function insert_image($image_path){
    global $conn;
    $sql="INSERT INTO `clothes`.`images` (url) VALUES ( \"$image_path\"); ";
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "image added successfully. Last inserted ID is: " . $last_id ."<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $last_id = $conn->insert_id;
   return $last_id;
}

function upload_file(){
    $canUpload = true;
    if(!isset($_FILES['itemImage'])){
        echo 'doesnt exists';
        $canUpload = false;
    }

    var_dump($_FILES['itemImage']);

    $fileName = 'images/'.$_FILES['itemImage']['name'];
    $type = $_FILES['itemImage']['type'];
    $allowedTypes = [
        'image/jpeg',
        'image/png',
        'image/jpg'
    ];

    if(!in_array($type,$allowedTypes)){
        echo 'not allowed';
        $canUpload = false;
    }
    if($canUpload){
    move_uploaded_file($_FILES['itemImage']['tmp_name'],$fileName);
}
return  $fileName;
}
?>