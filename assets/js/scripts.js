console.log('Hello World JS!')

let var1 = 4
var var2 = 10
const VAR3 = 2

var resultado = var1 * (var2 + VAR3)

console.log('Resultado', resultado)


config_pt_br_json = {
    style: 'currency',
    currency: 'BRL',
    isFloat: true
}

function imprimeTextoComNumeroMoedaReal(texto, numero) {
    resultado = texto + ' ' + numero.toLocaleString('pt-BR', config_pt_br_json);
    console.log(resultado)
    return resultado
}

imprimeTextoComNumeroMoedaReal('Vende-se escultura: os pratos lamentaram os tigres tristes:', 98)

// vai escutar o button
btnActiveNewStyleBody = document.querySelector('#main-container > main > section:nth-child(1) > div > a')
btnActiveNewStyleBody.addEventListener("click", changeBackgroundColor)

function changeBackgroundColor(color = '#F00') {
    document.getElementById("main-container").classList += " bg-danger"
    document.getElementById("main-container").classList.toggle("text-warning")
    console.log('Entrou!!')
}


$(document).ready(function() {
    console.log($(".card"))

    $(".card .btn").click(function() {
        event.preventDefault()
        console.log($(this).parents()[1])
        $(this).parents()[1].classList.add('d-none');
    });
});

$(document).ready(function() {
    $("#btnRemoveStyle").click(function() {
        $('#main-container').removeClass()
        console.log('FOI! Remove classes.')
    });
});