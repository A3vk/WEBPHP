window.onload = () => {
    let button = document.querySelector('#logout');
    button.onclick = (e) => {
      e.preventDefault();
      document.querySelector('#logout-form').submit();
    }
  }