<?php //
# Open the image
$fp = fopen("../../img/42.png", "rb");
# set the content headers
if ($fp){
header("Content-Type: image/png");

# Dump the image to the browser.
fpassthru($fp);
exit;
}
?>