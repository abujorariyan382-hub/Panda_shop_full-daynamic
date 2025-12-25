const dec = document.getElementById("dec");
const quantity = document.getElementById("quantity");
const inc = document.getElementById("inc");

let a = 1;

inc.addEventListener("click", function () {
    a++;
    a = a < 10 ? +a : a;
    quantity.value = a;
});

dec.addEventListener("click", function () {
    if (a > 1) {
        a--;
        a = a < 10 ? +a : a;
        quantity.value = a;
    }
});
