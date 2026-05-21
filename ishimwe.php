<?php
include "insert.php";
$select = mysqli_query($conn, "SELECT * FROM pote_data");
?>

<style>
    body{
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        text-align: center;
    }

    h1{
        background: #2c3e50;
        color: white;
        padding: 15px;
        width: 50%;
        margin: 20px auto;
        border-radius: 10px;
    }

    table{
        margin: auto;
        border-collapse: collapse;
        width: 70%;
        background: white;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }

    th{
        background: #3498db;
        color: white;
        padding: 10px;
    }

    td{
        padding: 10px;
    }

    tr:nth-child(even){
        background: #f2f2f2;
    }

    tr:hover{
        background: #dff9fb;
    }
</style>

<?php
if(mysqli_num_rows($select) > 0){
?>
<h1>DASHBOARD</h1>

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
    echo "<h3 style='color:red;'>No data found</h3>";
}
?>