window.onload = () => {
    let container = document.querySelector('.flexible-input');

    if(container) {
        let deleteButtons = container.querySelectorAll('.table button');
        let addButton = container.querySelector('.add button');
        let addSelect = container.querySelector('.add select');
        let tableBody = container.querySelector('.table tbody');

        let counter = deleteButtons.length + 1;

        deleteButtons.forEach((button) => {
            addDeleteCommand(button);
        });

        addButton.onclick = () => {
            let row = document.createElement('tr');

            let name = document.createElement('td');
            name.innerText = 'Stijn Smulders';
            row.appendChild(name);

            row.appendChild(addRadio('coordinator', counter));
            row.appendChild(addRadio('teacher', counter));
            counter++;

            let action = document.createElement('td');
            let deleteButton = document.createElement('button');
            deleteButton.className = 'btn btn-danger';
            deleteButton.type = 'button';
            deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
            addDeleteCommand(deleteButton);
            action.appendChild(deleteButton);
            row.appendChild(action);
            tableBody.appendChild(row);
        };

        // <tr>
        // <td>Stijn Smulders</td>
        // <td>
        // <div class="custom-control custom-radio">
        //     <input type="radio" class="custom-control-input" id="coordinator1" name="coordinator">
        //     <label class="custom-control-label ml-4" for="coordinator1"></label>
        //     </div>
        //     </td>
        //     <td>
        //     <div class="custom-control custom-radio">
        //     <input type="radio" class="custom-control-input" id="teacher1" name="teacher">
        //     <label class="custom-control-label ml-4" for="teacher1"></label>
        //     </div>
        //     </td>
        //     <td>
        //     <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i></button>
        // </td>
        // </tr>
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
    div.appendChild(radio);

    let label = document.createElement('label');
    label.className = 'custom-control-label ml-4';
    label.htmlFor = type + id.toString();
    div.appendChild(label);
    input.appendChild(div);

    return input;
}

function addDeleteCommand(button) {
    button.onclick = (e) => {
        if(e.path[1].tagName === 'svg') {
            e.path[5].removeChild(e.path[4]);
        } else {
            e.path[3].removeChild(e.path[2]);
        }
    }
}
