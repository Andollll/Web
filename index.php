<?php
$conn = mysqli_connect('localhost', 'andol', 'goal0104', 'fire');
$sql = "SELECT * FROM analyst";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $name = htmlspecialchars($row['name']);
  $list = $list."<li><a href=\"index.php?id2={$row['id']}\">{$name}</a></li>";
}

?>



<!doctype html>
<html>
<head>
  <meta charset = "UTF-8">
 <title>Fire Rock</title>
</head>
<body>

  <h1 align=center style = "font-size :100px;"><a href = "index.php">Fire Rock</a></h1>
<hr/><br>


<table align="center" style="font-size:50px">
<col width="400"><col width="400"><col width="400">

    <h1><tr><th><a href="index.php?id=About us">About us</a></th>
      <th><a href="analyst.php">Analyst</a></th>
      <th>Information</th></tr></h1>
</table><br><br>
<hr/>
<p>
<h1>
  <?php if(isset($_GET['id'])){
    $filtered_id = htmlspecialchars($_GET['id']);
    echo "<center>".$filtered_id."</center>";
    echo file_get_contents("./aboutus");
  }
  else{
?>
    <img src="meteor.jpg" style ="width:100%; height:100%;">;
<?php
  }
   ?>
</h1>






</body>

 </html>
