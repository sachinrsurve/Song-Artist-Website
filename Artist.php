<html>
<head>
     <title>Top 10 Songs</title>
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
            margin-bottom: 2%;
            margin-top: 120px;
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
      .searchBar {
       width: 100%;
       display: flex;
       flex-direction: row;
       align-items: center;
       margin-top : -55px;
     }
     #searchQueryInput {
       width: 100%;
       height: 2.8rem;
       background: #f5f5f5;
       outline: none;
       border: none;
       border-radius: 1.625rem;
       padding: 0 3.5rem 0 1.5rem;
       font-size: 1rem;
     }
     #searchQuerySubmit {
       width: 3.5rem;
       height: 2.8rem;
       margin-left: -3.5rem;
       background: none;
       border: none;
       outline: none;
       }
       #searchQuerySubmit:hover {
       cursor: pointer;
       }
        .wrapper {
	   position: absolute;
	   top: auto;
	   left: 83.5%;
	   transform: translate(-50%, -50%) rotateY(180deg);
	   display: flex;
       }
       .wrapper input {
	    display: none;
       }
       .wrapper label {
	    display: block;
	    cursor: pointer;
	    width: 30px;
       }
       .wrapper label:before {
	    content: '★';
	    position: relative;
	    display: block;
	    font-size: 40px;
	    color: black;
       }
       .wrapper label:after {
	       content: '★';
	       position: absolute;
	       display: block;
	       font-size: 40px;
	       color: rgb(255, 208, 0);
	       top: 0;
	       opacity: 0;
	       transition: .6s;
        }
       .wrapper label:hover:after, .wrapper label:hover~label:after, .wrapper input:checked~label:after {
	    opacity: 1;
        }
        .button {
         border: none;
         color: white;
         padding: 16px 52px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         font-weight: bold;
         margin: 4px 2px;
         transition-duration: 0.4s;
         cursor: pointer;
         margin-left: 60%;
         top: 5px;
       }
       .button10 {
         border: none;
         color: white;
         padding: 1px 52px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         font-weight: bold;
         margin: 4px 2px;
         transition-duration: 0.4s;
         cursor: pointer;
         margin-left: 10%;
         top: 5px;
       }

        .button1 {
          background-color: rgb(251, 255, 0); 
          color: black; 
          border: 2px solid #000000;
        }
        .button11 {
          background-color: rgb(229, 206, 0); 
          color: black; 
          border: 2px solid #000000;
        }

        .button1:hover {
          background-color: #ff00bf;
          color: white;
        }
        .button11:hover {
          background-color: #ff00bf;
          color: white;
        }

  
     </style>
</head>
<body>
<a href="Artist 4.php"><button class="button10 button11">Add User</button></a>
<div class="wrapper1">
            <div class="searchBar">
              <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
              <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                </svg>
              </button>
            </div>
          </div>

          <p>Top 10 Songs <a href="artist 1.php"><button class="button button1">Add Song</button></a></p>

     <center>
          <form action=""method="POST"enctype="multipart/form-data">
          <table>
                    <thead>
                          <tr>
                               <th class="head">Artwork</th>
                               <th class="head">Song</th>
                               <th class="head">Date of Release</th>
                               <th class="head">Artist</th>
                               <th class="head2">Rating</th>
                         </tr>
                    </thead>
                    <?php
                          $connection=mysqli_connect("localhost","root","");
                          $db=mysqli_select_db($connection,'info');
                          
                          $sql = "SELECT * FROM`data`";
                          $result= mysqli_query($connection,$sql);

                          while($row=mysqli_fetch_array($result))
                          {
                              ?>
                              <tr>
                                 <td class="txt"><?php echo'<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Images" style = "widht: 200px; height: 200px;">'; ?> </td>
                                 <td class="txt"><?php echo $row['Song']; ?></td>
                                 <td class="txt"><?php echo $row['Date_of_Release']; ?></td>
                                 <td class="txt"><?php echo $row['Artist']; ?></td>
                                 <td><div class="wrapper">
                                 <input type="radio" name="rate" id="rate1">
                                 <label for="rate1"></label>
                                 <input type="radio" name="rate" id="rate2">
                                 <label for="rate2"></label>
                                 <input type="radio" name="rate" id="rate3">
                                 <label for="rate3"></label>
                                 <input type="radio" name="rate" id="rate4">
                                 <label for="rate4"></label>
                                 <input type="radio" name="rate" id="rate5">
                                 <label for="rate5"></label>
                   </div></td>
                              </tr>

                              <?php 

                          } 

                    ?>
                </table>
                </form>
                </center>

                
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