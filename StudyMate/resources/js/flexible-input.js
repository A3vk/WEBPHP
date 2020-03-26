window.onload = () => {
    let container = document.querySelector('.flexible-input');

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
            let teacherId = addSelect.value;
            let teacherName = selectedOption.text;

            let row = document.createElement('tr');

            let name = document.createElement('td');
            name.innerText = teacherName;
            let hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'teachers[]';
            hidden.value = teacherId;
            name.appendChild(hidden);

            row.appendChild(name);

            row.appendChild(addRadio('coordinator', teacherId));
            row.appendChild(addRadio('teacher', teacherId));

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

function addDeleteCommand(button) {
    let id, name;
    button.onclick = (e) => {
        if(e.path[1].tagName === 'svg') {
            let td = e.path[4].firstChild;
            id = td.childNodes[1].value;
            name = td.childNodes[0].wholeText;
            e.path[5].removeChild(e.path[4]);
        } else {
            let td = e.path[2];
            id = td[1].value;
            name = td[0].wholeText;
            e.path[3].removeChild(e.path[2]);
        }

        let container = document.querySelector('.flexible-input');
        let addSelect = container.querySelector('.add select');

        let option = document.createElement('option');
        option.innerText = name;
        option.value = id;
        addSelect.appendChild(option);
    }
}
