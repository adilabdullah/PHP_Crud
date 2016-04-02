<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
<?php
function status()
{
    echo "<form method=\"post\" action=\"{$_SERVER['PHP_SELF']}\">"
    . "<textarea rows=\"10\" cols=\"30\" name=\"status\"></textarea>"            
    . "</form>";
}
?>
</body>
</html>