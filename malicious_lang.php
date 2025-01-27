<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    echo "<pre>";
    echo htmlspecialchars(file_get_contents($file));
    echo "</pre>";
} else {
    echo "Paramètre 'file' manquant.";
}
?>
