<?php
if(isset($_GET['url']) && !empty($_GET['url'])){
    $url = $_GET['url'];
    
    // Validate the URL (optional)
    if(filter_var($url, FILTER_VALIDATE_URL)){
        // Redirect the user to the specified URL
        header("Location: $url");
        exit();
    } else {
        echo "Invalid URL. Please enter a valid URL.";
    }
} else {
    echo "URL parameter is missing. Please enter a URL.";
}
?>
