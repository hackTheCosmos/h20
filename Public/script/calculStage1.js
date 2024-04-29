//calcul foyer
    
    let checkedIcon = document.createElement("div");
    checkedIcon.classList.add("checked__icon")
    // let checkedIcon = document.querySelector(".checked__icon");

    const infoBulle = document.createElement("div");
    infoBulle.classList.add("info__bulle")


    const firstStageForm = document.querySelector("#foyer__form")
    let inputWrapper
    const foyerInput = document.querySelector("#foyer")
    if(foyerInput) {
        inputWrapper = foyerInput.parentElement
    }

    if(foyerInput.value > 0) {
        checkedIcon.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
        inputWrapper.parentElement.appendChild(checkedIcon)
    }

    firstStageForm.addEventListener("submit", (e) => {
        if(foyerInput.value < 1) {
            e.preventDefault();
            infoBulle.innerText = "Vous devez ajouter au moins une personne au foyer"
            inputWrapper.appendChild(infoBulle)
            if(inputWrapper.parentElement.contains(checkedIcon)) {
                checkedIcon.remove()
            }

            return
            
        } else {
            checkedIcon.innerHTML ="<i class='fa-regular fa-circle-check'></i>"
            inputWrapper.parentElement.appendChild(checkedIcon)
            if(infoBulle.innerText != "") {
                infoBulle.innerText = ""
                inputWrapper.removeChild(infoBulle)
                
            }
        }
    })
    

        


        
    

   