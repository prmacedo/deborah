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

function telephoneMask(inputTel) {
  inputTel.value = String(inputTel.value)
    .replace(/\D/g, '')
    .replace(/(\d{2})(\d)/, '($1) $2')
    .replace(/(\d{4})(\d)/, '$1-$2')
    .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')
    .replace(/(-\d{4})\d+?$/, '$1');
}

function closeReturn() {
  document.querySelector('.contact-return').style.display = 'none'
}