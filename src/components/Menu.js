export default () => {
  // Handle links
  const toggle = document.getElementById('toggleMenuVisibility')
  const anchors = document.querySelectorAll('.menu a[href^="#"]')
  for (let anchor of Array.from(anchors)) {
    anchor.addEventListener('click', e => {
      toggle.checked = false
    })
  }

  // Handle sitcky
  const menu = document.querySelector('.menu')
  window.addEventListener('scroll', updateState)
  function updateState () {
    window.requestAnimationFrame(() => {
      menu.classList.toggle('is-sticky', window.scrollY > 350)
    })
  }
}
