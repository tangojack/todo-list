<?php
//Connect to database
  $conn=mysqli_connect('sophia.cs.hku.hk', 'vmiranda', 'avemaria') or die('Error! '. mysqli_error($conn));

  //Select database
  mysqli_select_db($conn, 'vmiranda') or die('Error! '. mysqli_error($conn));

  //Construct your SQL query here
  $query = 'SELECT * FROM checklist LIMIT '.$_GET['lastRecord'].', 3';
  $result = mysqli_query($conn, $query) or die('Error! '. mysql_error($conn));
  while($row = mysqli_fetch_array($result)) {
    print "<div class=\"note\" id=".$row['id'].">";
    print "<span onclick=\"changeState(this)\">".$row['doneOrNot']."</span><h3>".$row['title']."</h3><br><h4>".$row['datetime']."</h4><p>".$row['taskdescription']."</p>"; //Add code to display the notes
    print "</div>";
  }
  mysqli_close($conn);
?>
