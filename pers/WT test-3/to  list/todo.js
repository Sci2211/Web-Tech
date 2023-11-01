function addTask() {
    var taskInput = document.getElementById("task");
    var taskText = taskInput.value.trim();

    if (taskText !== "") {
        var taskList = document.getElementById("taskList");
        var li = document.createElement("li");
        li.innerHTML = `<span>${taskText}</span><button class="delete-btn" onclick="deleteTask(this)">Delete</button>`;
        taskList.appendChild(li);
        taskInput.value = "";
    }
}

function deleteTask(button) {
    var li = button.parentElement;
    li.remove();
}
