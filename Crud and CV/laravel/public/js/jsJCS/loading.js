
    //Funciones de spinner de carga
    
    window.onload = function loadingAnimation() {
        
        const content = document.getElementById("contentShow");
        const load = document.getElementById("loading");
        var bar1 = new ldBar("#loading");
        var bar2 = document.getElementById('loading').ldBar;
        bar1.set(60);
        setTimeout(() => {
            bar1.set(100);
        }, 1200);
        setTimeout(() => {
            content.className = 'container'
            load.className = 'd-none'
        }, 2000);

        /* construct manually */
        
        /* ldBar stored in the element */
        
       
        setTimeout(() => {
            bar1.set(100);
        }, 1800);

    };