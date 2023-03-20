// window.addEventListener('load', () => {
//   const form = document.querySelector("#new-task-form");
//   const input = document.querySelector("#new-task-input");
//   const list_el = document.querySelector("#tasks");

//   form.addEventListener('submit', (e) => {
//     e.preventDefault();

//     const task = input.value;

//     const task_el = document.createElement('div');
//     task_el.classList.add('task');

//     const task_content_el = document.createElement('div');
//     task_content_el.classList.add('content');

//     task_el.appendChild(task_content_el);

//     const task_input_el = document.createElement('input');
//     task_input_el.classList.add('text');
//     task_input_el.type = 'text';
//     task_input_el.value = task;
//     task_input_el.setAttribute('readonly', 'readonly');

//     task_content_el.appendChild(task_input_el);

//     const task_actions_el = document.createElement('div');
//     task_actions_el.classList.add('actions');

//     const task_edit_el = document.createElement('button');
//     task_edit_el.classList.add('edit');
//     task_edit_el.innerText = 'Edit';

//     const task_delete_el = document.createElement('button');
//     task_delete_el.classList.add('delete');
//     task_delete_el.innerText = 'X';

//     task_actions_el.appendChild(task_edit_el);
//     task_actions_el.appendChild(task_delete_el);

//     task_el.appendChild(task_actions_el);

//     list_el.appendChild(task_el);

//     input.value = '';

//     task_edit_el.addEventListener('click', (e) => {
//       if (task_edit_el.innerText.toLowerCase() == "edit") {
//         task_edit_el.innerText = "Save";
//         task_input_el.removeAttribute("readonly");
//         task_input_el.focus();
//       } else {
//         task_edit_el.innerText = "Edit";
//         task_input_el.setAttribute("readonly", "readonly");
//       }
//     });

//     task_delete_el.addEventListener('click', (e) => {
//       list_el.removeChild(task_el);
//     });
//   });
// });
function setattr(task_edit_el){
    var task_input_el = task_edit_el.parentElement.parentElement.firstElementChild.firstElementChild;
    if (task_edit_el.innerText.toLowerCase() == "edit") {
      task_edit_el.innerText = "Save";
      task_input_el.removeAttribute("readonly");
      task_input_el.focus();
    } else {
      taskajax('update',task_edit_el.parentElement.parentElement.id,task_input_el.value);
      task_edit_el.innerText = "Edit";
      task_input_el.setAttribute("readonly", "readonly");
    }
}

function taskajax(mode='show',id,update_task){
  const xhr = new XMLHttpRequest();
  new_task_el = document.getElementById("new-task-input");
  gettask = "";
  if(new_task_el.value != ""){
    gettask = "task="+new_task_el.value;
  }
  xhr.onload = function() {
    document.getElementById("tasks").innerHTML = this.responseText;
    }
  if(mode == 'show'){
    xhr.open("GET", "ajax/fetchtask.php", true);
  }
  if(mode == 'insert'){
    xhr.open("GET", "ajax/fetchtask.php?"+gettask, true);
  }
  if(mode == 'delete'){
    xhr.open("GET", "ajax/fetchtask.php?del_id="+id, true);
  }
  if(mode == 'update'){
    xhr.open("GET", "ajax/fetchtask.php?update_id="+id+"&&update_task="+update_task);
  }
  xhr.send();
  new_task_el.value = "";
}