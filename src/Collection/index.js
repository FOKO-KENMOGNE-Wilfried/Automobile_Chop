import voiture from "../Data/voiture.js";

document.addEventListener("DOMContentLoaded", () => {

    // Collect of the mark
    const params = new URLSearchParams(window.location.search);
    const marque =  params.get("marque");     

    // Generate the content of the page in function of the mark
    let content = document.getElementById("container");

    let listCar;
    let current_mark;

    console.log(marque);

    if(marque === "BMW"){

        content.innerHTML = "";

        let BMW_cars = voiture.filter(voiture => voiture.marque === "BMW").map( (voiture) => {
                
            return`
                <div class="relative flex flex-col justify-center items-center overflow-hidden rounded-3xl">
                    <img src=${voiture.image_url} alt="car" class="w-product h-96 hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                    <p class="text-3xl text-white font-bold absolute bottom-2">${voiture.marque} ${voiture.modele}</p>
                </div>
            `;
            
        }).join("");
        content.innerHTML = BMW_cars;

        listCar = voiture.filter(voiture => voiture.marque === "BMW").map( (voiture) => {
            return voiture.marque + " " + voiture.modele 
        })
        current_mark = "BMW"
        console.log(listCar);
        
    } else if(marque === "Lexus"){

        content.innerHTML = "";

        let Lexus_cars = voiture.filter(voiture => voiture.marque === "Lexus").map( (voiture) => {
                
            return`
                <div class="relative flex flex-col justify-center items-center overflow-hidden rounded-3xl">
                    <img src=${voiture.image_url} alt="car" class="w-product h-96 hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                    <p class="text-3xl text-white font-bold absolute bottom-2">${voiture.marque} ${voiture.modele}</p>
                </div>
            `;
            
        }).join("");
        content.innerHTML = Lexus_cars;

        listCar = voiture.filter(voiture => voiture.marque === "Lexus").map( (voiture) => {
            return voiture.marque + " " + voiture.modele 
        })
        current_mark = "Lexus"
        console.log(listCar)

    } else if(marque === "Toyota"){
        
        content.innerHTML = "";

        let Toyota_cars = voiture.filter(voiture => voiture.marque === "Toyota").map( (voiture) => {
                
            return`
                <div class="relative flex flex-col justify-center items-center overflow-hidden rounded-3xl">
                    <img src=${voiture.image_url} alt="car" class="w-product h-96 hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                    <p class="text-3xl text-white font-bold absolute bottom-2">${voiture.marque} ${voiture.modele}</p>
                </div>
            `;
            
        }).join("");
        current_mark = "Toyota"
        content.innerHTML = Toyota_cars;

        listCar = voiture.filter(voiture => voiture.marque === "Toyota").map( (voiture) => {
            return voiture.marque + " " + voiture.modele 
        })
        console.log(listCar)

    } else {
        
        content.innerHTML = "";

        let Rolls_royce_cars = voiture.filter(voiture => voiture.marque === "Rolls-Royce").map( (voiture) => {
                
            return`
                <div class="relative flex flex-col justify-center items-center overflow-hidden rounded-3xl">
                    <img src=${voiture.image_url} alt="car" class="w-product h-96 hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                    <p class="text-3xl text-white font-bold absolute bottom-2">${voiture.marque} ${voiture.modele}</p>
                </div>
            `;
            
        }).join("");
        content.innerHTML = Rolls_royce_cars;

        listCar = voiture.filter(voiture => voiture.marque === "Rolls-Royce").map( (voiture) => {
            return voiture.marque + " " + voiture.modele 
        })
        current_mark = "Rolls-Royce"
        console.log(listCar)

    }

    
    // The logic to create the autocompletition of the search
    
    let search_container = document.getElementById("search_container");
    let search = document.getElementById("search");
    let result = "";

    search.addEventListener("input", () => {
        let input = search.value;
        if(input){
            
            result = listCar.forEach(element => {
                if(element.includes(input)){

                    result = result + `
                        <li class="list-none ml-16">${element}</li>
                    `
                    result =  result.replace("undefined", "");
                    search_container.innerHTML = result;
                    
                }
            });

            content.innerHTML = "";

            let item = voiture.filter(voiture => voiture.marque === current_mark).map( (voiture) => {
                
                let current_car = voiture.marque+" "+voiture.modele;
                current_car = current_car.replace("undefined undefined", "");
                console.log(current_car);

                if(current_car.includes(input)){

                    return`
                        <div class="relative flex flex-col justify-center items-center overflow-hidden rounded-3xl">
                            <img src=${voiture.image_url} alt="car" class="w-product h-96 hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                            <p class="text-3xl text-white font-bold absolute bottom-2">${voiture.marque} ${voiture.modele}</p>
                        </div>
                    `;
                }

                
            }).join("");
            //console.log(voiture.marque+" "+voiture.modele);
            content.innerHTML = item;

        }
        else{
            search_container.innerHTML = "";
        }
    })
})