<?php
// java holds this file
$img = file_get_contents("images/a1.mp3");

// java sent this
$encode = base64_encode($img);


$test = gzdeflate("i hate you");

$test2 = gzdeflate($test);


echo strlen($test2);


//echo "<img src='data:image/png;base64, $encode' style='width:400px;'>";
echo "<audio controls>
<source src='data:audio/mp3; base64, $encode'></source>
</audio>";
?>