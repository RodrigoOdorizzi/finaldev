 var d1 =parseInt((Math.random() * (6 - 1) + 1));
 

function img(valor) {
    
    if (valor == 1) {
        return "img/dado1.png";
    }
    else
    if (valor == 2) {
        return "img/dado2.png";
    }
    else if (valor == 3) {
        return "img/dado3.png";
    }
    else if (valor == 4) {
        return "img/dado4.png";
    }
    else if (valor ==5) {
        return "img/dado5.png"; 
    }
    else if (valor == 6) {
        return "img/dado6.png";
    } 
}
 
function validado() {
    
    document.getElementById("img_1").src = img(d1);
    document.getElementById("h2dado1j").innerHTML = d1;
}

window.onload = validado(); 