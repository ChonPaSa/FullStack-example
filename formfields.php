<?php
$fields = [];
$connect = mysqli_connect("localhost", "chonnet_root", "48clTrHYJyQKV3T2", "chonnet_webdev");

mysqli_query($connect, "SET NAMES utf8");

if (!$connect) {
    echo json_encode(mysqli_connect_errno());
    echo json_encode(mysqli_connect_error()); 
    exit;
}
else
{
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
}
mysqli_close($connect);
?>
