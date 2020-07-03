
//Recibe un valor flotante y lo cambia a string en formato de moneda con sufijo
function getMoneyFormated(floatAmount, prefij){
    var formated = floatAmount.toLocaleString('en-US', {
        style: 'currency',
        currency: 'USD',
    })
    return prefij + " " + formated;
}