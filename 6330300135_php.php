<!DOCTYPE html>
<html>
<body>
<?php
function hello($name){
    echo "Hello $name";
}
      $fruits = array (
        array(1,"apple",10,"https://pngimg.com/uploads/apple/apple_PNG12409.png"),
        array(2,"banana",20,"/banana.jpg"),
        array(3,"blueberry",30,"blueberry.jpg"),
        array(4,"cantaloupe",40,"cantaloupe.jpg"),
        array(5,"grapes",50,"grapes.jpg"),
        array(6,"mango",60,"mango.jpg"),
        array(7,"melon",70,"melon.jpg"),
        array(8,"orange",80,"orange.jpg"),
        array(9,"strawberry",90,"strawberry.jpg"),
        array(10,"watermelon",100,"watermelon.jpg")
      );
      // echo "
      //       <table border='1' width='100%'>
      //           <tr><td>ลำดับ</td><td>ภาษา</td></tr>
      //           <tr><td>1.</td><td>PHP</td></tr>
      //           <tr><td>2.</td><td>HTML</td></tr>
      //           <tr><td>3.</td><td>CSS</td></tr>
      //           <tr><td>4.</td><td>JavaScript</td></tr>
      //           <tr><td>5.</td><td>SQL</td></tr>
      //       </table>
      //    ";
      echo "</table>";
      echo "<table border='1'>";
      echo "<tr><td>id</td><td>name</td><td>price</td><td>picture</td>";
      for($i=0;$i<10;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
        //echo "<p style='color:rgb($r,$g,$b)'>This is loop$i</p>";
        //echo "<p style='color:rgb($r,$g,$b)'>" .$fruits[$i][1]. "</p>";
        //echo "<tr><td>" .$fruits[$i][1]. "</td></tr>";
        $three=3;
        echo "<tr>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][0]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][1]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][2]. "</p></td>
        <td><img src=".$fruits[$i][3]." width=100 height=100></td>
        </tr>";
      }
      // for ($row = 0; $row < 10; $row++) {
      //   for ($col = 0; $col < 10; $col++) {
      //     echo "<p>".$fruits[$row][$col]."</p>";
      //   }
      // }
?>
</body>
</html>