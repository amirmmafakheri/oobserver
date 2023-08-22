<?php
if($_GET["url"]) {
    $target = $_GET["url"];
    header("Location: $target");
}else {
    echo "No url";
}
