const selectMateria = document.querySelector("select[name='materia']")
const buttonAddAlt = document.querySelector("button.add-alt")
const inputAlternatives = document.querySelector("input[type='hidden']")
const fieldsetResponses = document.querySelector("fieldset.responses")
const divAlternatives = document.querySelector("fieldset.responses div.alternatives")

const alternatives = ["alternativas permitidas:", "a", "b", "c", "d", "e"]

const hiddenButtonAddAlt = () =>
    buttonAddAlt.setAttribute("style", "display: none")

const addAlternatives = () => {
    inputAlternatives.value++

    inputAlternatives.value === "5"
        ? hiddenButtonAddAlt()
        : false

    const label = document.createElement("label")
    const input = document.createElement("input")

    input.setAttribute("type", "text")
    input.setAttribute("name", alternatives[ inputAlternatives.value ])
    input.setAttribute("placeholder", "Texto da alternativa")

    label.textContent = "Digite o conteúdo da alternativa:"
    label.appendChild(input)

    divAlternatives.appendChild(label)
}

const getMateriaCode = () => {
    const options = Array
        .from( document.querySelectorAll("select[name='assunto'] > option") )

    options.forEach( option => {
        option.setAttribute("style", "display: block")

        if ( option.dataset.js )
        {
            option.dataset.js !== selectMateria.value
                ? option.setAttribute("style", "display: none")
                : false
        }
    } )
}

selectMateria.addEventListener("change", getMateriaCode)
buttonAddAlt.addEventListener("click", addAlternatives)