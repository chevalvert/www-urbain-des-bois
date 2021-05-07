export default () => {
  const items = document.querySelectorAll('.news__item')
  const button = document.getElementById('newsDisplayMore')
  for (let i = 0; i < items.length; i++) {
    items[i].classList.toggle('is-hidden', i >= 3)
  }

  button.addEventListener('click', e => {
    for (let item of Array.from(items)) {
      item.classList.remove('is-hidden')
    }

    button.remove()
  })
}
