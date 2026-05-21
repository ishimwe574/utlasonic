<?php
include "insert.php";
$select = mysqli_query($conn, "SELECT * FROM pote_data");
if(mysqli_num_rows($select) > 0){
?>
<h1><u>DASHBOARD</u></h1>

<table border="5">
    <tr>
        <th>ID</th>
        <th>Motion Detected</th>
        <th>Time</th>
    </tr>

<?php
while($row = mysqli_fetch_assoc($select)){
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['motion_detected']; ?></td>
        <td><?php echo $row['time']; ?></td>
         
    </tr>

<?php
}
?>

</table>

<?php
} else {
    echo "No data found";
}
?>