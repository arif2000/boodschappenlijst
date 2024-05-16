<!DOCTYPE html>
<html lang="en">
<head>
    <h1>boodschappenlijst</h1>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="/style.css" type="text/css">
    <title>boodschappenlijst</title>
</head>
<body>
<div id="header">
<?php require('views-partials/header.php');?>
</div>
<?php include('views-partials/nav.php');?>
    <table id="table">
        <tr>
            <th>product</th>
            <th>prijs</th>
            <th>aantal</th>
            <th>subtotaal</th>
        </tr>

        <?php foreach($groceries as $grocery) { ?>
            <tr>
                <td><?= $grocery["name"]; ?></td>
                <td class="productPrice"><?= $grocery["price"]; ?></td>
                <td><input class="productQuantity"><?= $grocery["number"]; ?></td>
                <td class="productTotalCost"></td>
            </tr>
        <?php } ?>

        <tr>
            <td>totaal</td>
            <td></td>
            <td></td>
            <td id="totalCost"></td>
        </tr>
    </table>
    <button id="knop">Klik hier</button>
    <h4 id="titel">Dit is de titel</h4>
    <script>
        const knop = document.getElementById('knop');
        const titel = document.getElementById('titel');
        knop.addEventListener("click", function() {
            titel.innerHTML = "nieuwe titel";
        })
    </script>
    <script src="/boodschappen.js"></script>
</body>
</html>