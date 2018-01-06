<?php
$servername = "127.0.0.1";
$username = "root";
$password = "lool";
$dbname = "clothes";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_GET["type"])){
    $cloth_type= $_GET["type"];
    setcookie("cl_type", $cloth_type, time() + (86400 * 30),'C:\\' , "/");
}
else if(isset($_COOKIE["cl_type"])){
    $cloth_type=$_COOKIE["cl_type"]; 
}
else {
    $cloth_type="all";
}
//echo "cloth type= ". $cloth_type;
function get_image_url($img_id){
   
    global $conn;
    
   
        $sql2="SELECT url FROM images where images.id=$img_id;";
        $result2=$conn->query($sql2)   ; 
        if($result2->num_rows >0){
            while($row2 = $result2->fetch_assoc()) {
            return $row2["url"];
            }
        }else{
            return " There is no image have such id!";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add item</title>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- my style -->
    <link rel="stylesheet" href="css/add_item_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
               
  
                  <!-- end of header -->
  <div style="margin-left:5%;margin-right:4%; "class="container-flued">

         <!-- header and prodile picture-->
    <div class="row"style=" margin-right: 2%!important;">
      <div class="header">
          <nav class="mynav navbar navbar-expand-lg navbar-light bg-light">
              <a class=" sign-out navbar-brand" href="#"> <i class="fa fa-sign-out " aria-hidden="true"></i> </a>
              <div class="info">
                <p class="name font-weight-bold"><strong>Honest mole</strong></p> 
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p class="  font-weight-normal">Arrabeh - abu baker street </p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p class="  font-weight-normal"> 0598745623 </p>
              </div>
              <div class="profile-image" style="    ">
                  <img class=" img-circle" height="180" width="180" style="
                  border: solid 1px black; padding: 3px;background: #403c3c;" src="images/logo3.jpg">
              </div>

          </nav> 
        </div>         
    </div>
    <div class="row main-div" style="">
      
      <div class="row">
                                  <!-- types div-->
          <div class="col-sm-3 types ">
            <div class= "">
                <div class="list-group">
                    <!-- javascript:window.location.reload(true) : to reload the same page when clicking on the item type-->
                    <a href="profile.php?type=trousers" class=" <?php if ($cloth_type=="trousers")echo "active"?> mylist-group list-group-item list-group-item-action">Trousers</a>
                    <a href="profile.php?type=t-shirt" class=" <?php if ($cloth_type=="t-shirt")echo "active"?> mylist-group list-group-item list-group-item-action ">T-shirts</a>
                    <a href="profile.php?type=tring" class=" <?php if ($cloth_type=="tring")echo "active"?> mylist-group list-group-item list-group-item-action">Trings</a>
                    <a href="profile.php?type=sport" class=" <?php if ($cloth_type=="sport")echo "active"?> mylist-group list-group-item list-group-item-action">Sport</a>
                    <a href="profile.php?type=dress" class=" <?php if ($cloth_type=="dress")echo "active"?> mylist-group list-group-item list-group-item-action">Dresses</a>
                    <a href="profile.php?type=all" class=" <?php if ($cloth_type=="all")echo "active"?> mylist-group list-group-item list-group-item-action">All categories</a>
                   <!--<a href="javascript:window.location.reload(true)" class=" mylist-group list-group-item list-group-item-action">Dresses</a>-->
                    <!-- we can use this js code to relaod page "javascript:window.location.reload(true)" -->
                 <?php  ?>
                  </div>
            </div>
            <div class="add">
            
          <div><button  type="button"class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
               <i class="fa fa-plus" aria-hidden="true"></i>
          </button></div>
          </div>
          </div>
         
          <div class="col-sm-9 content" style="" >
              
              <?php // Check connection
                     // echo "cloth type= ". $cloth_type;
                    
                   
                    if ($conn->connect_error) {
                        echo("Connection failed: " . $conn->connect_error);
                    } else{
                    if(isset($_GET["type"])){
                        $cloth_type= $_GET["type"];
                        if($cloth_type=="all"){
                            $sql="SELECT * FROM items";}
                        else{
                            $sql="SELECT * FROM clothes.items where type='$cloth_type';"  ; }                  
                    }
                    else{
                    $sql = "SELECT * FROM items";
                    }
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        $number_of_items=0;
                        while($row = $result->fetch_assoc()) {
                            $number_of_items++;
                            //"price:  " . $row["price"]. "color:  " . $row["color"]. "country:  " . $row["country"]. "<br>";
                            $image_id=$row["image_id"];
                            $image_url= get_image_url($image_id);
                            if(($number_of_items-1)%3==0 || $number_of_items==1){
                                echo '<div class="row" >';
                            }
                ?>              
              <div class="col-sm-4 ">
                  <div class="item" style=" ">
                      <div class="item-pic" >
                              <img class=" img-responsive img-rounded" style="border-radius: 20px; max-height: 210px;"src="<?php echo $image_url;?>">
                      </div>
                     <div class="item-info ">
                        <p class="p-2"> <?php echo $row["type"] ?></p>
                        <p> <?php echo $row["price"]." NIS" ?> </p>
                        <p> <?php echo $row["color"] ?> </p>
                        <p> <?php echo $row["country"] ?> </p>
                     </div>
                 </div>
                </div>
                <?php 
                if( $number_of_items%3==0 ){
                    echo '</div >';
                }
                    }
                } else {
                    echo "There are no elements in the database";
                }
                $conn->close();
                } ?>
              </div>
          </div>

        </div>
    </div> 
                                    <!-- Dialog start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" >
                  <button type="button" style="    position: relative;float: left;right: 316px; top: -7px;"class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Add item</h4>
                </div>
                <div class="modal-body" style="display:flex;justify-content:center;align-items:center;">
                  <div style="max-width: 400px;">
                    <form method="POST" action="addToDB.php"enctype="multipart/form-data" >
                        <div class="form-group">
                            <label >Choose item type</label>
                            <select name ="type"class="form-control" id="exampleFormControlSelect1">
                              <option>trousers</option>
                              <option>t-shirt</option>
                              <option>tring</option>
                              <option>sport</option>
                              <option>dress</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Item price</label>
                          <input type="text" class="form-control" name="price" id="price">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Item color</label>
                            <input type="text" name="color" class="form-control"  >
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Item country</label>    
                          <input type="text" name="country" class="form-control"   >    
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Choose item image </label>
                            <input type="file" name="itemImage" class="form-control-file" id="exampleFormControlFile1">
                        </div>    
      
                        <button type="submit" class="btn btn-block btn-primary">Add item</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>                            
                     
  </div>
    




    <script src="js/profile.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>