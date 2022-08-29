<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Fixed table header</title>
  <lunk rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">

  
      

  
</head>
<body>
  <section>
  <style>table{
  width:100%;
  table-layout: fixed;
  background-color: rgba(255,255,255,0.1);
  border-radius: 10px;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
  border-radius: 10px;
  border-color: transparent;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 10px;
  border-color: transparent;
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #000000, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}</style>
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th></th>
          <th>&nbsp;&nbsp;name</th>
          <th>&nbsp;&nbsp;email</th>
          <th>&nbsp;&nbsp;phone</th>
          <th>&nbsp;&nbsp;state</th>
          <th>&nbsp;&nbsp;update</th>
          <th>&nbsp;&nbsp;delete</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php 

        require('dbconnect.php');

        $query1=mysqli_query($con,"select * from burning");
        while($row=mysqli_fetch_array($query1))
        {
    ?>
    
    <tr>
      <td></td>
      <td> <?php echo $row['name']; ?></td>
      <td> <?php echo $row['email']; ?></td>
      <td> <?php echo $row['phone']; ?></td>
      <td> <?php echo $row['state']; ?></td>
      <td><i class="fa fa-pencil-square-o"></i></td>
      <td><i class="fa fa-trash"></i></td>
    </tr>  
    <?php } ?> 
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="scrr.js"></script>

</body>
</html>
