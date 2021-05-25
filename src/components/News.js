export default () => {
  const items = document.querySelectorAll('.news__item')
  const button = document.getElementById('newsDisplayMore')
  for (let i = 0; i < items.length; i++) {
     // /!\ toggle second argument doesn't work on ie11
    // items[i].classList.toggle('is-hidden', i >= 3)
      if(i >=3) {
        items[i].classList.add('is-hidden');
      } else {
        items[i].classList.remove('is-hidden');
      }
  }

  button.addEventListener('click', e => {

    // /!\ Array.from not working in ie
    // for (let item of Array.from(items)) {
    var temp_array = Array.prototype.slice.call(items);
    for (var i = 0 ; i < temp_array.length ; i++) {
      temp_array[i].classList.remove('is-hidden')
    }

    button.remove()
  })
}
