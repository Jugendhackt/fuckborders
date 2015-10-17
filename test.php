<?php
include('includes/lib/db.php');
$sth = mysqli_query($sql, "SELECT firstname FROM testtest");
while($row = mysqli_fetch_object($sth)) {
echo "{\"http\" : \"true\";"accept" : true;
    "data" : {
        "checkpoints" : [
            "checkpoint" : {
                "position"  : {
                    "north" : 79.9016492;
                    "east"  : 6.8632761;
                };
                
                "type"      : "peristent";
                "notice"    : "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata";
                "value"     : 0.01;
            },";
}
?>