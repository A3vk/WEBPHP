window.addEventListener('load', () => {
    let input = document.querySelector('.custom-file-input');
    if(input) {
        input.addEventListener('change', function (e) {
            let fileName = document.getElementById("file").files[0].name;
            let nextSibling = e.target.nextElementSibling;
            nextSibling.innerText = fileName;
        });
    }
});
