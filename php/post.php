<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    if (!empty($message)) {
        $file = fopen("chatlog.txt", "a");
        fwrite($file, $message . PHP_EOL);
        fclose($file);
    }
}
header("Location: index.php");
exit();
?>
