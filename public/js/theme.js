const tagHtml = document.querySelector("html")
const inputTheme = document.querySelector("input[name='theme']")
// const lightSwitch = document.querySelector("main div.settings label div.button span.switch")

const getPropertyValue = (element, property) =>
    window
        .getComputedStyle(element)
        .getPropertyValue(property)

const propertys =
[
    "--background-header-primary",
    "--background-main-primary",
    "--background-footer-primary",
    "--color-header-primary",
    "--color-main-primary",
    "--color-footer-primary"
]

const colorsDark = [ "#06331D", "#343434", "#444444", "#ffffff", "#FFFFFF", "#FFFFFF" ]

const setProperty = ( property, index ) =>
    tagHtml.style.setProperty( property, colorsDark[ index ] )

const toggleTheme = () =>
{    
    inputTheme.checked
        ? propertys.forEach(setProperty)
        : tagHtml.style = ""
}

inputTheme.addEventListener("change", toggleTheme)