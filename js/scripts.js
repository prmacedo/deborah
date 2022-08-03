

window.onscroll = () => {
  const { scrollY } = window
  const menu = document.querySelector('.navbar')

  if (scrollY > 130) {
    menu.classList.add('navbar-scrolled')
  } else {
    menu.classList.remove('navbar-scrolled')
  }
}