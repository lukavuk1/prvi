<!DOCTYPE html>
<html>
<head>
    <link href="index.css" rel="stylesheet">
    <title>Naslov</title>
    <meta charset="UTF-8">
</head>


<body>

<div id="center">
<h1>Prvi drugi treći četvrti</h1>
</div>
<br><br>

<div id='neki_div'>
<p>
    <?php echo("Pozdrav iz PHP-a ");
    echo("<br><hr>");
    echo(date('d.m.Y.'));
    echo("<br><hr>");
    ?>
</div>
	<?php
    $dana_do_praznika =45;
    echo("<br>");
    echo("do praznika nam je ostalo još: <font color='red'><b>".$dana_do_praznika."!!!!!!!!!!!!!!!!!<b></font>");


    ?>
</p>


</body>

</html>
