<html>
<head>
     <title>Top 10 Artists</title>
     <style>
        table{
                border-collapse: collapse;
                width:80%;
                margin-left: auto;
                margin-right: auto;
            }
        th,td{
            border: 2px solid black; 
            padding: 15px;
        }
        .head
        {
            background-color: black;
            font-weight: bold;
            color: azure;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 20px;
        }
        .head2
        {
            width: 17%;
            background-color: black;
            font-weight: bold;
            color: azure;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 20px;
        }
        p{
            margin-left: 200px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-top: 100px;
            font-size: 35px;
            
        }
        .txt{
        font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
            font-size: 20px;
        }
        .wrapper1 {
        width: 100%;
        max-width: 31.25rem;
        margin: 6rem auto;
        margin-left: 60%;
        margin-top: 30px;
      }
       .label {
        font-size: .625rem;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: +1.3px;
        margin-bottom: 1rem;
      }
    
    

        

     </style>
</head>
<body>

       <p>Top 10 Artists <p>

     <center>
          <form action=""method="POST"enctype="multipart/form-data">
          <table>
                    <thead>
                          <tr>
                               <th class="head">Artist</th>
                               <th class="head">Date of Birth</th>
                               <th class="head">Songs</th>
                         </tr>
                    </thead>
                    <?php
                          $connection=mysqli_connect("localhost","root","");
                          $db=mysqli_select_db($connection,'info');
                          
                          $sql = "SELECT * FROM`adata`";
                          $result= mysqli_query($connection,$sql);

                          while($row=mysqli_fetch_array($result))
                          {
                              ?>
                              <tr>
                                 <td class="txt"><?php echo $row['Artist_Name']; ?></td>
                                 <td class="txt"><?php echo $row['Date_of_Birth']; ?></td>
                                 <td class="txt"><?php echo $row['Bio']; ?></td>
                                 
                              </tr>

                              <?php 

                          } 

                    ?>
                </table>
                </form>
                </center>
                </body>
                </html>