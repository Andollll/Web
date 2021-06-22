<?php
$conn = mysqli_connect('localhost', 'andol', 'goal0104', 'fire');
$sql = "SELECT * FROM analyst";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $name = htmlspecialchars($row['name']);
  $list = $list."<li><a href=\"anlyst.php?name={$row['id']}\">{$name}</a></li>";
}
/*




$result2 = mysqli_query($conn, $sql);
$list2 ='';
while($row = mysqli_fetch_array($result2)){
  $profile = htmlspecialchars($row['profile']);
  $list2 = $list2.$profile;
}
*/

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
      <th><a href="anlyst.php">Analyst</a></th>
      <th>Information</th></tr></h1>
</table><br><br>
<hr/>
<p>

<table border ="1">
  <tr>
<col width="500"><col width="1800">

   <h1 align=center>Analyst</h1>
  <?php
  echo "<td rowspan='2' align= 'left'>";
  echo "<h2 style='font-size:50px;'>".$list."</h2>";

?>

</td>

<td width='1800' height='100'>
  <?php

      if(isset($_GET['name'])){
        $filtered_id2 =mysqli_real_escape_string($conn, $_GET['name']);
        $sql = "SELECT * FROM analyst WHERE id={$filtered_id2}";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article =array(
          'name' => $row['name'],
          'profile' => $row['profile']
        );
       $article['name'] = htmlspecialchars($row['name']);
        $article['profile'] = htmlspecialchars($row['profile']);

       echo "<h1 align=center>".$article['name']."</h1>";
     }
      //echo "<h2 style='font-size:50px;'>".$list."</h2>";
    //  $sql = "SELECT * FROM analyst WHERE id={$filtered_id2}";
    //  $result2 = mysqli_query($conn, $sql);
    //  $row = mysqli_fetch_array($result);
echo "</td>";
echo "</tr>";

echo "<tr>";

echo "<td>";
if(isset($_GET['name'])){
        echo "<h1 align=center>".$article['profile']."</h1>";
      }
        echo "</td>";





?>

</table>
</h1>






</body>

 </html>
