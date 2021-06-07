const selectMateria = document.querySelector("select[name='materia']")

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