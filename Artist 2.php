<html>
<head>
     <title>Adding Artist</title>
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
          <h1>Adding New Artist</h1>
          <form action=""method="POST" enctype="multipart/form-data">

               <label class="txt">Enter Artist Name :</label><br>
               <input type="text"name="Artist_Name"placeholder="Enter Artist Name"/><br>
               
               <label class="txt">Date of Birth :</label><br>
               <input type="text"name="Date_of_Birth"placeholder="Enter Date of Birth"/><br>
               
               <label class="txt">Enter Bio :</label><br>
               <input type="text"name="Bio"placeholder="Enter Artist Songs"/><br>

               <input class="btn1" type="submit"name="upload"value="Upload Data"/><br>

          </form>
     </center>

     </body>
</html>
                                                 
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'info');
if(isset($_POST['upload']))
{
    $Artist_Name=$_POST['Artist_Name'];
    $Date_of_Birth=$_POST['Date_of_Birth'];
    $Bio=$_POST['Bio'];
    
    $query="INSERT INTO`adata`(`Artist_Name`,`Date_of_Birth`, `Bio`)VALUES('$Artist_Name', '$Date_of_Birth', '$Bio')";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
         echo'<script type="text/javascript">alert("Data Uploaded")</script>';
    }
    else
    {
         echo'<script type="text/javascript">alert("Data Not Uploaded")</script>';
    }
}
?>