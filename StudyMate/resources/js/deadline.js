
let checkBoxes = document.querySelectorAll('#Check');
let forums =  document.querySelectorAll('#completeForum');

for (let i = 0; i < checkBoxes.length; i++) {
    checkBoxes[i].onchange = (e) => {
        forums[i].submit();
    }
    
}