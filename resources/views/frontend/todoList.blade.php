@include('frontend.layouts.header');

<div class="container mt-5">
    <h1>Todo List</h1>
    <form id="todoForm" action="" method="POST">
     @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Enter task" id="taskInput">
        <div class="input-group-button">
          <button class="btn btn-success" type="submit">Add Task</button>
        </div>
      </div>
    </form>
    <ul class="list-group" id="taskList">

    </ul>
  </div>











  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  {{-- <script>
    const todoForm = document.getElementById('todoForm');
    const taskInput = document.getElementById('taskInput');
    const taskList = document.getElementById('taskList');

    todoForm.addEventListener('submit', function (event) {
      event.preventDefault();
      const taskText = taskInput.value;

      if (taskText !== '') {
        const listItem = document.createElement('li');
        listItem.className = 'list-group-item';
        listItem.appendChild(document.createTextNode(taskText));

        const editBtn = document.createElement('button');
        editBtn.className = 'btn btn-primary btn-sm mr-2 editbtn';
        editBtn.appendChild(document.createTextNode('Edit'));

        const deleteBtn = document.createElement('button');
        deleteBtn.className = 'btn btn-danger btn-sm deletebtn';
        deleteBtn.appendChild(document.createTextNode('Delete'));

        editBtn.addEventListener('click', function () {
          const newTaskText = prompt('Enter new task text', taskText);
          if (newTaskText !== null && newTaskText !== '') {
            listItem.firstChild.textContent = newTaskText.trim;
          }
        });

        deleteBtn.addEventListener('click', function () {
          listItem.remove();
        });

        listItem.appendChild(editBtn);
        listItem.appendChild(deleteBtn);
        taskList.appendChild(listItem);

        taskInput.value = '';
      }
    });
  </script> --}}








@include('frontend.layouts.footer');
