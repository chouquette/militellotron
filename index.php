<?php

$parts = array(
array("Nicolas SARKOZY ", "notre Pr&eacute;sident ", "notre guide spirituel, ", "Skippy "),
array("leadeur charismatique, spirituel, beau, grand, fort, et sans talonette,", "et &agrave; son courage,", "et &agrave; sa volont&eacute; de sauver les artistes,", "et &agrave; sa determination,", "et sa capacit&eacute; d'innovation,"),
array("le piratage", "la violence", "l'insecurit&eacute;", "le chomage", "le viol de nos artistes", "le pillage de notre patrimoine culturel"),
array("n'est plus une fatalit&eacute;.", "n'est qu'un lointain souvenir.", "est de l'histoire ancienne."),
);

?>

<html>
<head>
<title>Marland Militello Inanity Generator</title>
<script>
function    generate()
{
    var elems = document.getElementsByTagName("select");
    var result = "Grace &agrave; ";
    var resDiv = document.getElementById('result');
    for ( i = 0; i < elems.length; ++i )
    {
        elems[i].selectedIndex = Math.floor( Math.random() * elems[i].options.length );
        result += elems[i].value + ' ';
    }
    resDiv.innerHTML = result;
}
function    update()
{
    var elems = document.getElementsByTagName("select");
    var result = "Grace &agrave; ";
    var resDiv = document.getElementById('result');
    for ( i = 0; i < elems.length; ++i )
    {
        result += elems[i].value + ' ';
    }
    resDiv.innerHTML = result;
}
</script>
</head>
<body>
<?php
foreach ( $parts as $i => $part )
{
    echo '<select id="part_', $i, '" onChange="update();">';
    foreach ( $part as $value )
    {
        echo '<option>', $value, '</option>';
    }
    echo '</select>';
}
?>
<input type="button" onClick="generate();" value="Generate !"/>
<div id="result">

</div
</body>
</html>
