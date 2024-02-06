/*JavaScript Modal: https://www.youtube.com/watch?v=9guclqCu6Hc&ab_channel=JuanSebasti%C3%A1nHerreraCarvajal*/
function calcular(){
    const abrir = document.querySelector("#abrir_correo")
    const modal = document.querySelector("#correo")
    abrir.addEventListener("click", ()=> {modal.show();modal.style.display="block";
    })
}

function cerrar() {
    const cerrar = document.querySelector("#confirmar")
    const modal = document.querySelector("#correo")
    cerrar.addEventListener("click", ()=> {modal.close();modal.style.display="none"
    })

    inicial=14
    var sexos = document.getElementById("sexo")
    var peso = document.getElementById("peso")
    var pesoValor= peso.value
    var edad = document.getElementById("edad")
    var edadValor= edad.value
    var altura = document.getElementById("altura")
    var ValorAltura= altura.value
    var elementos = document.getElementsByName("pregunta")
    if(sexos.value=="1")
    {
        var calculadora = document.getElementById("calculadora")
        calculadora = calculadora.style.display="block"
        for(i=0;i<inicial;i++){
            var h = document.getElementById("h")
            h.innerHTML = Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)
            var mm = document.getElementById("mm")
            mm.innerHTML = Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)
            var c = document.getElementById("c")
            c.innerHTML = Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4)
            var m = document.getElementById("m")
            m.innerHTML = Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)
            var cen = document.getElementById("cen")
            cen.innerHTML = Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)
            var totald = document.getElementById("totald")
            totald.innerHTML =  Math.floor(Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*2 + Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*2 + Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1))
            var totalp = document.getElementById("p")
            totalp.innerHTML =  Math.floor((Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*2 + Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*2 + Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4))-50)
            var totalgp= document.getElementById("gp")
            totalgp.innerHTML =  Math.floor((Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*2 + Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*2 + Math.round((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4))+500)
            
            if(elementos[i].value=="1" && sexos.value=="1"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.2)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.2)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4)*1.2)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.2)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.2)
            }
            }
            else if(elementos[i].value=="2" && sexos.value=="1"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.35)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.35)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4)*1.35)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.35)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.35)
            }
        }
        else if(elementos[i].value=="3" && sexos[i].value=="1"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.55)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.55)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4)*1.55)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.55)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.55)
            } 
        }   
        else if(elementos[i].value=="4" && sexos.value=="1"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.725)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.725)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4)*1.725)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.725)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.725)
            }
        }
        else if(elementos[i].value=="5" && sexos.value=="1"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.9)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.9)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.4)*1.9)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.1)*1.9)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((66 + (13.7*pesoValor) + (5*ValorAltura) - (6.8*edadValor))*0.2)*1.9)
            }
        }  
        }
    }
    else if(sexos.value=="2")
        var calculadora = document.getElementById("calculadora")
        calculadora = calculadora.style.display="block"
        for(i=0;i<inicial.length;i++){
            var h = document.getElementById("h")
            h.innerHTML = Math.round((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.2)
            var mm = document.getElementById("mm")
            mm.innerHTML = Math.round((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)
            var c = document.getElementById("c")
            c.innerHTML = Math.round((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)
            var m = document.getElementById("m")
            m.innerHTML = Math.round((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)
            var cen = document.getElementById("cen")
            cen.innerHTML = Math.round((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)
            var totald = document.getElementById("totald")
            totald.innerHTML =  Math.floor((Math.round((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*2) + (Math.round((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*2) + (Math.round((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)))
            var totalp = document.getElementById("p")
            totalp.innerHTML =  Math.floor(((Math.round((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*2) + (Math.round((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*2) + (Math.round((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)))-50)
            var totalgp= document.getElementById("gp")
            totalgp.innerHTML =  Math.floor((Math.round((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*2 + Math.round((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*2 + (Math.round((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)))+500)
            if(elementos[i].value=="1" && sexos.value=="2"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.2)*1.2)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.2)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)*1.2)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.2)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*1.2)
            }
            }
            else if(elementos[i].value=="2" && sexos.value=="2"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.2)*1.35)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.35)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)*1.35)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.35)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*1.35)
        }
        }
        else if(elementos[i].value=="3" && sexos.value=="2"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.2)*1.55)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.55)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)*1.55)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.55)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*1.55)
        } 
        }   
        else if(elementos[i].value=="4" && sexos.value=="2"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.2)*1.725)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.725)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)*1.725)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.725)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*1.725)
        }
        }
        else if(elementos[i].value=="5" && sexos.value=="2"){
            for(i=0;i<inicial;i++){
            var hd = document.getElementById("hd")
            hd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.2)*1.9)
            var mmd = document.getElementById("mmd")
            mmd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.9)
            var cd = document.getElementById("cd")
            cd.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.4)*1.9)
            var md = document.getElementById("md")
            md.innerHTML = Math.round(((665+ (9.6*pesoValor) + (1.8*ValorAltura) - (4.7*edadValor))*0.1)*1.9)
            var cen = document.getElementById("cend")
            cend.innerHTML = Math.round(((665 + (9.6*pesoValor) + (1.8*ValorAltura) - (6.8*edadValor))*0.2)*1.9)	
        }
        }
    }
}
function resetear(){
    var calculadora = document.getElementById("calculadora")
    calculadora = calculadora.style.display="none"
    var modal = document.getElementById("correo")
    modal = modal.style.display="none"
}
