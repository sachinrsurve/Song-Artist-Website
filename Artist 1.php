<html>
<head>
     <title>Adding New Song</title>
     <style>
body{
    background-color:lightblue;
}
input{
    width:50%;
     height:5%;
     border:1px;
     border-radius:05px;
     padding:8px 15px 8px 15px;
     margin:10px 0px 15px 0px;
     box-shadow:1px 1px 2px 1px grey;
     font-weight:bold;
}
.txt{

    font-weight: bold;
    font-size: 20px;
}
        h1{
            
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom: 5%;
            margin-top: 2%;
            font-size: 35px;
            
        }
        .btn
        {
            text-align: center;
            cursor: pointer;
        }
        .btn1
        {
            text-align: center;
            cursor: pointer;
        }

     </style>
</head>
<body>
     <center>
          <h1>Adding New Song</h1>
          <form action=""method="POST" enctype="multipart/form-data">
               <label class="txt">Choose an Artwork :</label><br>
               <input type="file"name="image"id="image"/><br>

               <label class="txt">Enter Song Name :</label><br>
               <input type="text"name="song"placeholder="Enter Song Name"/><br>
               
               <label class="txt">Enter Date of Release :</label><br>
               <input type="text"name="dor"placeholder="Enter Date of Release"/><br>
               
               <label class="txt">Enter Artist Name :</label><br>
               <input type="text"name="artist"placeholder="Enter Artist Name"/><br>

               <input class = "btn1" type="submit"name="upload"value="Upload Data"/><br>
               <a href="artist 2.php"><input class = "btn" name="Add"value="Add an Artist"/></a><br>

          </form>
     </center>

     </body>
</html>
                                                 
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'info');
if(isset($_POST['upload']))
{
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $song=$_POST['song'];
    $dor=$_POST['dor'];
    $artist=$_POST['artist'];
    
    $query="INSERT INTO`data`(`image`, `Song`,`Date_of_Release`, `Artist`)VALUES('$file','$song', '$dor', '$artist')";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
         echo'<script type="text/javascript">alert("Data Uploaded")</script>';
    }
    else
    {
         echo'<script type="text/javascript">alert("Image Profile Not Uploaded")</script>';
    }
}
?>