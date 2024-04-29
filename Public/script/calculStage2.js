//électromenager
const secondStageForm = document.querySelector("#electro__form")

// switchs (lave-vaisselle , lave-linge)
let switcheButtons = document.querySelectorAll(".switch input")
switcheButtons.forEach(function (switchButton) {
    if(switchButton.value == "on") {
        switchButton.previousSibling.previousSibling.innerText ="oui"
    } else {
        switchButton.previousSibling.previousSibling.innerText ="non"
        switchButton.parentElement.nextElementSibling.style.display = "none"
    }
    switchButton.addEventListener("click", () => {
        
        if(switchButton.value == "on") {
            switchButton.previousSibling.previousSibling.innerText ="non"
            switchButton.value = "off"
            switchButton.parentElement.nextElementSibling.style.display = "none"
            
            
        } else {

            switchButton.previousSibling.previousSibling.innerText ="oui"
            switchButton.value = "on"
            switchButton.parentElement.nextElementSibling.style.display = "block"
        }
    })
})
    
    

    //vaisselle à la main
    const handWashingInput = document.getElementById('hand__washing')
    let handWashingInputWrapper = handWashingInput.parentElement
    const infoBulleHandWashing = document.createElement("div");
    infoBulleHandWashing.classList.add("info__bulle")
    let checkedIcon1 = document.createElement("div");
    checkedIcon1.classList.add("checked__icon")
    
    if(handWashingInput.value > 0 || handWashingInput.value === "0") {
        checkedIcon1.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
        handWashingInputWrapper.parentElement.appendChild(checkedIcon1)
    } 

    //lave - vaisselle
    const dishWasherInput = document.getElementById("dish__washer")
    let dishWasherInputWrapper = dishWasherInput.parentElement
    let dishWasherSwitch = dishWasherInputWrapper.previousSibling.previousSibling.childNodes[3]
    const infoBulledishWasher = document.createElement("div");
    infoBulledishWasher.classList.add("info__bulle")
    let checkedIcon2 = document.createElement("div");
    checkedIcon2.classList.add("checked__icon")

    if(dishWasherSwitch.value === "on") {
        if(dishWasherInput.value > 0) {
            checkedIcon2.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            dishWasherInputWrapper.parentElement.appendChild(checkedIcon2)
        }
    } else {
        checkedIcon2.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
        dishWasherInputWrapper.parentElement.appendChild(checkedIcon2)
    }

    dishWasherSwitch.addEventListener("click", () => {
        if(dishWasherSwitch.value === "off"){
            checkedIcon2.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            dishWasherInputWrapper.parentElement.appendChild(checkedIcon2)
        } else {
            if(dishWasherInput.value <= 0) {
                dishWasherInputWrapper.parentElement.removeChild(checkedIcon2)
            }
        }
    })

    //lave-linge
    const clothesWasherInput = document.getElementById("clothes__washer")
    let clothesWasherInputWrapper = clothesWasherInput.parentElement
    let clothesWasherSwitch = clothesWasherInputWrapper.previousSibling.previousSibling.childNodes[3]
    const infoBulleClothesWasher = document.createElement("div");
    infoBulleClothesWasher.classList.add("info__bulle")
    let checkedIcon3 = document.createElement("div");
    checkedIcon3.classList.add("checked__icon")

    if(clothesWasherSwitch.value === "on") {
        if(clothesWasherInput.value > 0) {
            checkedIcon3.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            clothesWasherInputWrapper.parentElement.appendChild(checkedIcon3)
        }
    } else {
        checkedIcon3.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
        clothesWasherInputWrapper.parentElement.appendChild(checkedIcon3)
    }

    clothesWasherSwitch.addEventListener("click", () => {
        if(clothesWasherSwitch.value === "off"){
            checkedIcon3.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            clothesWasherInputWrapper.parentElement.appendChild(checkedIcon3)
        } else {
            if(clothesWasherInput.value <= 0) {
                clothesWasherInputWrapper.parentElement.removeChild(checkedIcon3)
            }
        }
    })



    // après soumission du formulaire
    secondStageForm.addEventListener("submit", (e) => {
        //vaisselle à la main
        if(handWashingInput.value < 0) {
            e.preventDefault();
            infoBulleHandWashing.innerText = "Le nombre de lavages de la vaisselle à la main ne peut pas être inférieur à 0"
            handWashingInputWrapper.appendChild(infoBulleHandWashing)
            if(handWashingInputWrapper.parentElement.contains(checkedIcon1)) {

                handWashingInputWrapper.parentElement.removeChild(checkedIcon1)
            }

            offset = $('#hand__washing').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
            
        } else if (handWashingInput.value === "") {
            e.preventDefault();
            infoBulleHandWashing.innerText = "Veuillez renseigner le nombre de lavage de la vaisselle à la main par semaine"
            handWashingInputWrapper.appendChild(infoBulleHandWashing)
            if(handWashingInputWrapper.parentElement.contains(checkedIcon1)) {

                handWashingInputWrapper.parentElement.removeChild(checkedIcon1)
            }

            offset = $('#hand__washing').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
        } else {
            checkedIcon1.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            handWashingInputWrapper.parentElement.appendChild(checkedIcon1)
            if(infoBulleHandWashing.innerText != "") {
                infoBulleHandWashing.innerText = ""
                handWashingInputWrapper.removeChild(infoBulleHandWashing)
            }
            
        }

        //lave-vaisselle
     
        if(dishWasherSwitch.value === "on") {

            if(dishWasherInput.value < 0 || dishWasherInput.value === "0") {
                e.preventDefault()
                infoBulledishWasher.innerText = "Le nombre de cycles de lave-vaisselle ne peut pas être inférieur à 1"
                dishWasherInputWrapper.appendChild(infoBulledishWasher)
                if(dishWasherInputWrapper.parentElement.contains(checkedIcon2)) {
                    dishWasherInputWrapper.parentElement.removeChild(checkedIcon2)
                }

                offset = $('#dish__washer').offset()
                window.scrollTo(0, offset.top - 200)
                return
                
            } else if(dishWasherInput.value === "") {
                e.preventDefault()
                infoBulledishWasher.innerText = "Veuillez renseigner le nombre de cycles de lave-vaisselle par semaine"
                dishWasherInputWrapper.appendChild(infoBulledishWasher)
                if(dishWasherInputWrapper.parentElement.contains(checkedIcon2)) {
                    dishWasherInputWrapper.parentElement.removeChild(checkedIcon2)
                }

                offset = $('#dish__washer').offset()
                window.scrollTo(0, offset.top - 200)
                return
            } else {
                checkedIcon2.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
                dishWasherInputWrapper.parentElement.appendChild(checkedIcon2)
                if(infoBulledishWasher.innerText != "") {
                    infoBulledishWasher.innerText = ""
                    dishWasherInputWrapper.removeChild(infoBulledishWasher)       
                }
            }
        } else {
            checkedIcon2.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            dishWasherInputWrapper.parentElement.appendChild(checkedIcon2)
        }

        //lave-linge
     
        if(clothesWasherSwitch.value === "on") {

            if(clothesWasherInput.value < 0 || clothesWasherInput.value === "0") {
                e.preventDefault()
                infoBulleClothesWasher.innerText = "Le nombre de cycles de lave-linge ne peut pas être inférieur à 1"
                clothesWasherInputWrapper.appendChild(infoBulleClothesWasher)
                if(clothesWasherInputWrapper.parentElement.contains(checkedIcon3)) {
                    clothesWasherInputWrapper.parentElement.removeChild(checkedIcon3)
                }

                offset = $('#clothes__washer').offset()
                window.scrollTo(0, offset.top - 200)
                return
                
            } else if(clothesWasherInput.value === "") {
                e.preventDefault()
                infoBulleClothesWasher.innerText = "Veuillez renseigner le nombre de cycles de lave-linge par semaine"
                clothesWasherInputWrapper.appendChild(infoBulleClothesWasher)
                if(clothesWasherInputWrapper.parentElement.contains(checkedIcon3)) {
                    clothesWasherInputWrapper.parentElement.removeChild(checkedIcon3)
                }

                offset = $('#clothes__washer').offset()
                window.scrollTo(0, offset.top - 200)
                return
            } else {
                checkedIcon3.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
                clothesWasherInputWrapper.parentElement.appendChild(checkedIcon3)
                if(infoBulleClothesWasher.innerText != "") {
                    infoBulleClothesWasher.innerText = ""
                    clothesWasherInputWrapper.removeChild(infoBulleClothesWasher)       
                }
            }
        } else {
            checkedIcon3.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            clothesWasherInputWrapper.parentElement.appendChild(checkedIcon3)
        }
    })
