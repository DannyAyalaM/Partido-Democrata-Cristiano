
var odca = document.getElementById('fotos_odca');
var pdc = document.getElementById('fotos_pdc');
var convencion_11 = document.getElementById('fotos_convencion-11');
var presi_cumple = document.getElementById('presi_cumple');
let alianza_ec = document.getElementById('alianza_ec');



function mostrar_galeria(que_galeria){
    if(que_galeria == 'PDC'){
        presi_cumple.style.display='none';
        odca.style.display='none';
        convencion_11.style.display='none';
        alianza_ec.style.display='none';
        pdc.style.display='block';

    }else if(que_galeria == 'ODCA'){
        presi_cumple.style.display='none';
        pdc.style.display='none';
        convencion_11.style.display='none';
        alianza_ec.style.display='none';
        odca.style.display='block';  

    }else if(que_galeria == 'convencion-11'){
        presi_cumple.style.display='none';
        pdc.style.display='none';
        odca.style.display='none';
        alianza_ec.style.display='none';
        convencion_11.style.display='block';

    }
    else if(que_galeria == 'presi_cumple'){

        pdc.style.display='none';
        odca.style.display='none';
        convencion_11.style.display='none';
        alianza_ec.style.display='none';
        presi_cumple.style.display='block';

    }
    else if(que_galeria == 'alianza'){

        pdc.style.display='none';
        odca.style.display='none';
        convencion_11.style.display='none';
        alianza_ec.style.display='none';
        presi_cumple.style.display='none';
        alianza_ec.style.display='block';

    }
}

