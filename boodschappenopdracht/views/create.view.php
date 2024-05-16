<DOCTYPE html>
<html lang="en">
<head>
<?php include('./views-partials/header.php');?>
    <h1>title</h1>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="/style.css" type="text/css">
</head>
<body>
<?php include('./views-partials/nav.php');?>

    <form action="/create" method="POST">
        <table id="table">
            <tr>
                <th>product</th>
                <th>prijs</th>
                <th>aantal</th>
            </tr>
                <tr>
                    <td><input name="product" type="text" class="product" ></td>
                    <td><input name="price" type="number" class="productPrice" min="0" step="any"></td>
                    <td><input name="quantity" type="number" class="productQuantity" min="0" oninput="validity.valid||(value='');"></td>
                </tr>
        </table>
        <br/>
        <input type="submit" id="knop" value="Voeg toe"></input> 
    </form>
</body>
</html>