window.addEventListener('load', () => {
    let button = document.querySelector('#logout');
    if (button) {
        button.onclick = (e) => {
            e.preventDefault();
            document.querySelector('#logout-form').submit();
        };
    }
});
