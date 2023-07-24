let price1 = document.querySelector("#counter1")
let price2 = document.querySelector("#counter2")
let price3 = document.querySelector("#counter3")



function creaContatore(elemento, counter, limiteNum, interv){
    let interval = setInterval(() =>{
        if(counter < limiteNum){
            counter++;
            elemento.innerHTML = counter;
        }else{
            clearInterval(interval);
        }
    }, interv)
}



let confirm = false;
let observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) =>{
        if(entry.isIntersecting && confirm == false){
            creaContatore(price1, 2000, 2023, 100);
            creaContatore(price2, 4000, 5000, 0.1);
            creaContatore(price3, 100, 200, 50);
            confirm = true;
            setTimeout(() =>{
                confirm = false;
            }, 6000)
        }
    })
})

observer.observe(price1);