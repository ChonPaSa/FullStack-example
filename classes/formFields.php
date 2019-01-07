<?php
$fields = [];
$connect = mysqli_connect("localhost", "xxx", "xxx", "xxx");

mysqli_query($connect, "SET NAMES utf8");
$sql = "select name, label from formfields";
$result = mysqli_query($connect,$sql);

if (mysqli_num_rows($result) > 0)
{
    // output data in fields array
    while($row = mysqli_fetch_assoc($result)) 
    {
        $fields[]=$row;
     }
} 

echo json_encode($fields);

mysqli_close($connect);
?>
