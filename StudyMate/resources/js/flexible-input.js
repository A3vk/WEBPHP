window.onload = () => {
    let teacherContainer = document.querySelector('.teacher-input');
    let tagContainer = document.querySelector('.tag-input');
    let container = teacherContainer;
    let type = 'teachers';

    if(!container) {
        container = tagContainer;
        type = 'tags';
    }

    if(container) {
        let deleteButtons = container.querySelectorAll('.table button');
        let addButton = container.querySelector('.add button');
        let addSelect = container.querySelector('.add select');
        let tableBody = container.querySelector('.table tbody');

        deleteButtons.forEach((button) => {
            addDeleteCommand(button, container);
        });

        addButton.onclick = () => {
            let selectedOption = addSelect.options[addSelect.selectedIndex];

            if(selectedOption) {
                let id = addSelect.value;
                let name = selectedOption.text;

                let row = document.createElement('tr');

                let nameTd = document.createElement('td');
                nameTd.innerText = name;
                let hidden = document.createElement('input');
                hidden.type = 'hidden';
                hidden.name = `${type}[]`;
                hidden.value = id;
                nameTd.appendChild(hidden);

                row.appendChild(nameTd);

                if(teacherContainer) {
                    row.appendChild(addRadio('coordinator', id));
                    row.appendChild(addRadio('teacher', id));
                }

                let action = document.createElement('td');
                let deleteButton = document.createElement('button');
                deleteButton.className = 'btn btn-danger';
                deleteButton.type = 'button';
                deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
                addDeleteCommand(deleteButton, container);
                action.appendChild(deleteButton);
                row.appendChild(action);
                tableBody.appendChild(row);

                addSelect.removeChild(selectedOption);
            }
        };
    }
};

function addRadio(type, id) {
    let input = document.createElement('td');
    let div = document.createElement('div');
    div.className = 'custom-control custom-radio';

    let radio = document.createElement('input');
    radio.className = 'custom-control-input';
    radio.type = 'radio';
    radio.id = type + id.toString();
    radio.name = type;
    radio.value = id;
    div.appendChild(radio);

    let label = document.createElement('label');
    label.className = 'custom-control-label ml-4';
    label.htmlFor = type + id.toString();
    div.appendChild(label);
    input.appendChild(div);

    return input;
}

function addDeleteCommand(button, container) {

    button.onclick = () => {
        let tbody = container.querySelector('table tbody');
        let tr = button.parentNode.parentNode;
        let name = tr.firstElementChild.childNodes[0].wholeText;
        let id = tr.firstElementChild.childNodes[1].value;

        tbody.removeChild(tr);

        let addSelect = container.querySelector('.add select');

        let option = document.createElement('option');
        option.innerText = name;
        option.value = id;
        addSelect.appendChild(option);
    }
}
