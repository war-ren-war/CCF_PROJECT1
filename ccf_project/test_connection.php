<?php
include 'login.php';

if (isset($conn)) {
    echo "✅ Connected successfully to the database!";
} else {
    echo "❌ Failed to connect to the database.";
}
?>
