<?php
include('includes/lib/db.php');
$sth = mysqli_query($sql, "SELECT firstname FROM testtest");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
echo json_encode($rows);
?>