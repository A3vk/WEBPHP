let blocks = document.querySelectorAll('.list-group-item');

window.addEventListener('load', () => {
    blocks.forEach((block) => {
        block.onclick = (e) => {
            let blocks = document.querySelectorAll('.list-group-item');
            blocks.forEach((block) => {
                block.classList.remove('active');
            });
        };
    });
});
