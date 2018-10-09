<?php

$con = mysqli_connect("localhost","root","","antrian_grapari");

$sql = "SELECT no_loket FROM loket where status_loket IS NULL";
$result = mysqli_query($con, $sql);

echo "<select name='username'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['no_loket'] ."'>" . $row['no_loket'] ."</option>";
}
echo "</select>";
?>