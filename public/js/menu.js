const inputMenu = document.querySelector("[name='menu-check']")
const sectionMenu = document.querySelector("section.menu")
const divDarkMenu = document.querySelector("div.dark")

const setDisplayComponentsMenu = display =>
{
  sectionMenu.setAttribute("style", `display: ${display}`)
  divDarkMenu.setAttribute("style", `display: ${display}`)
}

const closeMenu = () =>
{
  inputMenu.checked = false

  setDisplayComponentsMenu("none")
  divDarkMenu.onclick = () => null
  document.onkeydown = () => null
}

const openMenu = () =>
{
  setDisplayComponentsMenu("flex")
  divDarkMenu.onclick = () => closeMenu()
  document.onkeydown = event =>
    event.key === "Escape" ? closeMenu() : false
}

const toggleMenu = event =>
  event.target.checked ? openMenu() : closeMenu()

inputMenu.addEventListener( "change", toggleMenu )