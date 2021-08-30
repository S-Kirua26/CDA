<body class="colonne">

<?php $uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}

?>
    <header>
        <div class="espace"></div>
        <div class="size marginLight centre">Liste des villes</div>
        <div class="espace"></div>
    </header>