<?php
$con = mysqli_connect("127.0.0.1","ttt_wp","7c2n@He0KL0bXjWd8yh%V4aj1E?:S?B+","ttt_wp");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  //perform queries
  $result = mysqli_query($con, "SELECT * FROM wp_users");
?>

  <table border = "1">
    <tr>
        <th> Username </th>
        <th> Email </th>
        <th> Password </th>
    </tr>
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <tr>
      <td><?php echo $row['user_login'];?> </td>
      <td><?php echo $row['user_email'];?> </td>
      <td><?php echo $row['user_pass'];?> </td>
      </tr>
  <?php } ?>
  </table>
  <?php
  mysqli_close ($con);
  ?>
