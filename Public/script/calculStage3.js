//électromenager
const thirdStageForm = document.querySelector("#hygiene__form")


    //douches
    const showerInput = document.getElementById('shower')
    let showerInputWrapper = showerInput.parentElement
    const infoBulleShower = document.createElement("div");
    infoBulleShower.classList.add("info__bulle")
    let checkedIcon1 = document.createElement("div");
    checkedIcon1.classList.add("checked__icon")
    
    if(showerInput.value > 0 || showerInput.value === "0") {
        checkedIcon1.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
        showerInputWrapper.parentElement.appendChild(checkedIcon1)
    } 

    //bains
    const bathInput = document.getElementById("bath")
    let bathInputWrapper = bathInput.parentElement
    const infoBulleBath = document.createElement("div");
    infoBulleBath.classList.add("info__bulle")
    let checkedIcon2 = document.createElement("div");
    checkedIcon2.classList.add("checked__icon")

    if(bathInput.value > 0 || bathInput.value === "0") {
        checkedIcon2.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
        bathInputWrapper.parentElement.appendChild(checkedIcon2)
    } 

    //wc
    const wcInput = document.getElementById("wc")
    let wcInputWrapper = wcInput.parentElement
    const infoBulleWc = document.createElement("div");
    infoBulleWc.classList.add("info__bulle")
    let checkedIcon3 = document.createElement("div");
    checkedIcon3.classList.add("checked__icon")

    if(wcInput.value > 0 || wcInput.value === "0") {
        checkedIcon3.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
        wcInputWrapper.parentElement.appendChild(checkedIcon3)
    } 
    



    // après soumission du formulaire
    thirdStageForm.addEventListener("submit", (e) => {
        //douches
        if(showerInput.value < 0) {
            e.preventDefault();
            infoBulleShower.innerText = "Le nombre de douches ne peut pas être inférieur à 0"
            showerInputWrapper.appendChild(infoBulleShower)
            if(showerInputWrapper.parentElement.contains(checkedIcon1)) {

                showerInputWrapper.parentElement.removeChild(checkedIcon1)
            }

            offset = $('#shower').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
            
        } else if (showerInput.value === "") {
            e.preventDefault();
            infoBulleShower.innerText = "Veuillez renseigner le nombre de douches par semaine par membre du foyer"
            showerInputWrapper.appendChild(infoBulleShower)
            if(showerInputWrapper.parentElement.contains(checkedIcon1)) {

                showerInputWrapper.parentElement.removeChild(checkedIcon1)
            }

            offset = $('#shower').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
        } else {
            checkedIcon1.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            showerInputWrapper.parentElement.appendChild(checkedIcon1)
            if(infoBulleShower.innerText != "") {
                infoBulleShower.innerText = ""
                showerInputWrapper.removeChild(infoBulleShower)
            }
            
        }

        //bains
     
        if(bathInput.value < 0) {
            e.preventDefault();
            infoBulleBath.innerText = "Le nombre de bains ne peut pas être inférieur à 0"
            bathInputWrapper.appendChild(infoBulleBath)
            if(bathInputWrapper.parentElement.contains(checkedIcon2)) {

                bathInputWrapper.parentElement.removeChild(checkedIcon2)
            }

            offset = $('#bath').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
            
        } else if (bathInput.value === "") {
            e.preventDefault();
            infoBulleBath.innerText = "Veuillez renseigner le nombre de bains par personne et par semaine"
            bathInputWrapper.appendChild(infoBulleBath)
            if(bathInputWrapper.parentElement.contains(checkedIcon2)) {

                bathInputWrapper.parentElement.removeChild(checkedIcon2)
            }

            offset = $('#bath').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
        } else {
            checkedIcon2.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            bathInputWrapper.parentElement.appendChild(checkedIcon2)
            if(infoBulleBath.innerText != "") {
                infoBulleBath.innerText = ""
                bathInputWrapper.removeChild(infoBulleBath)
            }
            
        }
        //wc
     
        if(wcInput.value < 0) {
            e.preventDefault();
            infoBulleWc.innerText = "Le nombre d'usage de la chasse d'eau ne peut pas être inférieur à 0"
            wcInputWrapper.appendChild(infoBulleWc)
            if(wcInputWrapper.parentElement.contains(checkedIcon3)) {

                wcInputWrapper.parentElement.removeChild(checkedIcon3)
            }

            offset = $('#wc').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
            
        } else if (wcInput.value === "") {
            e.preventDefault();
            infoBulleWc.innerText = "Veuillez renseigner le nombre d'usage de la chasse d'eau par personne et par jour"
            wcInputWrapper.appendChild(infoBulleWc)
            if(wcInputWrapper.parentElement.contains(checkedIcon3)) {

                wcInputWrapper.parentElement.removeChild(checkedIcon3)
            }

            offset = $('#wc').offset()
            console.log(offset.top)
            window.scrollTo(0, offset.top - 200)
            return
        } else {
            checkedIcon3.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            wcInputWrapper.parentElement.appendChild(checkedIcon3)
            if(infoBulleWc.innerText != "") {
                infoBulleWc.innerText = ""
                wcInputWrapper.removeChild(infoBulleWc)
            }
            
        }
    })
