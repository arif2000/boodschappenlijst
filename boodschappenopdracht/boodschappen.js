const table = document.getElementById('table');
const productPrice = document.getElementsByClassName("productPrice");
let productQuantity = document.getElementsByClassName("productQuantity");
let productTotalCost = document.getElementsByClassName("productTotalCost");
const totalCost = document.getElementById("totalCost");

table.addEventListener("change", updatevalue);

function updatevalue() {
    let tempTotal = 0;
    for (let i = 0; i < productQuantity.length; i++) {
        let calculation = productQuantity[i].value * productPrice[i].innerHTML;

        productTotalCost[i].innerHTML = calculation;

        tempTotal += calculation;
    };
    totalCost.innerHTML = tempTotal;
};