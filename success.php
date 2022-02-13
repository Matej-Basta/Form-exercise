<?php

session_start();

echo "<h1>Successfuly submitted</h1>";

echo "<p>You have submitted {$_SESSION['movie']['title']} with a rating of {$_SESSION['movie']['rating']}</p>";

?>