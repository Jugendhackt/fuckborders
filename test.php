<?php
include('includes/lib/db.php');
$start = "
{
<pre>
\"http\" : \"202\";
\"accept\" : true;
\"data\" : {
\"checkpoints\" : [
";
$middle="";
$sth = mysqli_query($sql, "SELECT * FROM position");
while($row = mysqli_fetch_object($sth)) {
$middle = $middle . "
\"checkpoint\" : {
\"position\"  : {
\"north\" : ".$row->north.";
\"east\"  : ".$row->north.";
}; 
\"type\" : \"".$row->type."\";
\"notice\" : \"".$row->notice."\";
\"value\": ".$row->value.";
},";
}
$middle2=rtrim($middle, ",");
$end = "
]
}
}
</pre>
";
echo $start.$middle2.$end;