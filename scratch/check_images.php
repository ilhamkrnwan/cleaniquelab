<?php
$dir = "c:/laragon/www/cleaniquelab/wp-content/themes/cleaniquelab-theme/assets/images/otomotif/gallery/engine-degreaser/";
foreach (scandir($dir) as $f) {
    if (strpos($f, ".webp") !== false || strpos($f, ".png") !== false) {
        $size = getimagesize($dir . $f);
        echo $f . ": " . $size[0] . "x" . $size[1] . "\n";
    }
}
