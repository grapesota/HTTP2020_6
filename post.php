<?php
print("<h1>view post parametar:post</h1>\n");
if(isset($_POST['post']))
    echo "post: ". htmlspecialchars($_POST['post'], ENT_QUOTES, 'UTF-8');