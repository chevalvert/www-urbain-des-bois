export default () => {
  
  const toggle = document.getElementById('toggleMenuVisibility')

  // Disable scroll when open
  toggle.addEventListener('change', e => {
    document.body.classList.toggle('no-scroll', toggle.checked)
  })

  // Handle links
  const anchors = document.querySelectorAll('.menu a[href^="#"]')
  
  // /!\ Array.from not working in ie
  // for (let anchor of Array.from(anchors)) {
  //   anchor.addEventListener('click', e => {
  //     toggle.checked = false
  //     document.body.classList.remove('no-scroll')
  //   })
  // }
  // patching
  var temp_array = Array.prototype.slice.call(anchors);
  for (var i = 0 ; i < temp_array.length ; i++) {
      var anchor = anchors[i];
      anchor.addEventListener('click', function (e) {
        toggle.checked = false;
        document.body.classList.remove('no-scroll');
      });
  }

  // Handle sitcky
  const menu = document.querySelector('.menu')
  window.addEventListener('scroll', updateState)
  function updateState () {
    window.requestAnimationFrame(() => {
      var scroll = window.scrollY || document.documentElement.scrollTop;
      // /!\ toggle second argument doesn't work on ie11
      // menu.classList.toggle('is-sticky', scroll > 350)
      if(scroll > 350) {
        menu.classList.add('is-sticky');
      } else {
        menu.classList.remove('is-sticky');
      }
    })
  }
  
}
