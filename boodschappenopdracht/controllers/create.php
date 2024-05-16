<?php
require("validator.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (!Validator::string($_POST['product'], 0, 20)) {
        $errors['product'] = 'input required';
    };
//    if (!Validator::integer($_POST['quantity'], 0)) {
  //      $errors['quantity'] = 'input required';
    //};
    if (!Validator::decimal($_POST['price'], 0)) {
       $errors['price'] = 'input required';
    };
    // sla data op in database
    // dd($_POST);
    if(empty($errors))
    {$db->query('INSERT INTO groceries(name, number, price) VALUES(:name, :number, :price)', [
        'name' =>htmlspecialchars($_POST['product']),
        'number' =>htmlspecialchars($_POST['quantity']),
        'price' =>htmlspecialchars($_POST['price']),
    ]);
}else{
    header("./views/create");
};
 
    // en ga daarna naar home
    header("location: /");
    exit();
} else{
    // er is geen post request, dus er was een get request, dus laat create.view.php zien
    require('./views/create.view.php');
}

?>