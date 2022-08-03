window.onscroll = () => {
  const { scrollY } = window
  const menu = document.querySelector('.navbar')

  if (scrollY > 130) {
    menu.classList.add('navbar-scrolled')
  } else {
    menu.classList.remove('navbar-scrolled')
  }
}


function selectCategory(spanSelected) {
  const spanList = document.querySelectorAll("#categories span")

  spanList.forEach(span => {
    span.classList.remove('selected')
  });

  spanSelected.classList.add('selected')

  const selectedCategory = spanSelected.getAttribute("data-category")
  const contentList = document.querySelectorAll("#category-content > div")

  contentList.forEach(content => {
    content.classList.add('d-none')
  })

  document.querySelector(`#${selectedCategory}`).classList.remove('d-none')



}