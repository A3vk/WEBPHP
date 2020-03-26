// TODO: combine with teacher-input.js --> flexible-input.js
window.onload = () => {
    let container = document.querySelector('.tag-input');

    if(container) {
        let deleteButtons = container.querySelectorAll('.table button');
        let addButton = container.querySelector('.add button');
        let addSelect = container.querySelector('.add select');
        let tableBody = container.querySelector('.table tbody');

        deleteButtons.forEach((button) => {
            addDeleteCommand(button);
        });

        addButton.onclick = () => {
            let selectedOption = addSelect.options[addSelect.selectedIndex];

            if(selectedOption) {
                let tagId = addSelect.value;
                let tagName = selectedOption.text;

                let row = document.createElement('tr');

                let name = document.createElement('td');
                name.innerText = tagName;
                let hidden = document.createElement('input');
                hidden.type = 'hidden';
                hidden.name = 'tags[]';
                hidden.value = tagId;
                name.appendChild(hidden);

                row.appendChild(name);

                let action = document.createElement('td');
                let deleteButton = document.createElement('button');
                deleteButton.className = 'btn btn-danger';
                deleteButton.type = 'button';
                deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
                addDeleteCommand(deleteButton);
                action.appendChild(deleteButton);
                row.appendChild(action);
                tableBody.appendChild(row);

                addSelect.removeChild(selectedOption);
            }
        };
    }
};

function addDeleteCommand(button) {

    button.onclick = () => {
        let tbody = document.querySelector('.tag-input table tbody');
        let tr = button.parentNode.parentNode;
        let name = tr.firstElementChild.childNodes[0].wholeText;
        let id = tr.firstElementChild.childNodes[1].value;

        tbody.removeChild(tr);

        let container = document.querySelector('.tag-input');
        let addSelect = container.querySelector('.add select');

        let option = document.createElement('option');
        option.innerText = name;
        option.value = id;
        addSelect.appendChild(option);
    }
}
