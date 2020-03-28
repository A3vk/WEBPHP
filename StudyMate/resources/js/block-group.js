let blocks = document.querySelectorAll('.list-group-item');

window.onload = () => {
    blocks.forEach((block) => {
        block.onclick = (e) => {
            let blocks = document.querySelectorAll('.list-group-item');
            blocks.forEach((block) => {
                block.classList.remove('active');
            });
        };
    });
};
