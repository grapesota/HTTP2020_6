<?php
echo "<h1>view GET parametar:get </h1>\n";
if(isset($_GET['get'])) 
    echo "get: ".htmlspecialchars($_GET['get'], ENT_QUOTES, 'UTF-8');