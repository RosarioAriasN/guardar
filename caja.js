
var caja = [10, 10, 10, 10, 10,10], valores = [50000, 20000, 10000, 5000, 2000, 1000]
var b1 = 0, b2 = 0, b3 = 0, b4 = 0, b5 = 0, b6 = 0, rt,  retiro


for(var i=0; i<20; i++){
    retiro = parseInt(prompt("\nFavor Ingresar Valor de Retiro: "));
    rt = retiro
    b1 = parseInt(retiro / 50000)

    if( retiro - (b1*valores[0]) >= 0) {
        retiro = retiro - (b1*valores[0])
        b2 = parseInt(retiro / 20000)
        if (retiro - (b2*valores[1]) >=0){
            retiro = retiro - (b2*valores[1])
            b3 = parseInt(retiro / 10000)
            if (retiro - (b3*valores[2]) >=0){
                retiro = retiro - (b3*valores[2])
                b4 = parseInt(retiro / 5000)
                if (retiro - (b4*valores[3]) >=0){
                    retiro = retiro - (b4*valores[3])
                    b5 = parseInt(retiro / 2000)
                    if (retiro - (b5*valores[4]) >=0){
                        retiro = retiro - (b5*valores[4])
                        b6 = parseInt(retiro / 1000)
                        if (retiro - (b6*valores[5]) >=0)
                            retiro = retiro - (b6*valores[5])
                    }
                }
            }
        }
    }

    if (parseInt(rt % 1000) == 0 ){
        cajero = caja[0]*valores[0]+caja[1]*valores[1]+caja[2]*valores[2]+caja[3]*valores[3]+
        caja[4]*valores[4]+caja[5]*valores[5]

        if( cajero >= retiro ){
            cajero[0] = caja[0] - b1
            cajero[1] = caja[1] - b2
            cajero[2] = caja[2] - b3
            cajero[3] = caja[3] - b4
            cajero[4] = caja[4] - b5
            cajero[5] = caja[5] - b6
            console.log("RETIRO EXITOSO")
        }else
        console.log("\nSin efectivo en el cajero para la transaccion")
    }else
    console.log("\nFavor de ingresar una cantidad redondeada en billetes de 50000, 20000, 10000, 5000, 2000, 1000")
    
}
console.log("\n\nBilletes en Cajero: \n50000: "+(caja[0])+"\n20000: "+(caja[1])+"\n10000: "+
(caja[2])+"\n5000: "+(caja[3])+"\n2000: "+(caja[4])+"\n1000: "+(caja[5]) );
