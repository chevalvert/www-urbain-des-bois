export default () => {
  const toggle = document.getElementById('toggleMenuVisibility')

  // Disable scroll when open
  toggle.addEventListener('change', e => {
    document.body.classList.toggle('no-scroll', toggle.checked)
  })

  // Handle links
  const anchors = document.querySelectorAll('.menu a[href^="#"]')
  for (let anchor of Array.from(anchors)) {
    anchor.addEventListener('click', e => {
      toggle.checked = false
      document.body.classList.remove('no-scroll')
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
