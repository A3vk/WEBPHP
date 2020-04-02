let checkBoxes = document.querySelectorAll('#check');
let forms =  document.querySelectorAll('#completeForum');

for (let i = 0; i < checkBoxes.length; i++) {
    checkBoxes[i].onchange = (e) => {
        forms[i].submit();
    }
}
