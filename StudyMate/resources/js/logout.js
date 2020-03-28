window.onload = () => {
  let button = document.querySelector('#logout');
  if (button != null) {
    button.onclick = (e) => {
      e.preventDefault();
      document.querySelector('#logout-form').submit();
    }
  }
}