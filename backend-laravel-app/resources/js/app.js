import './bootstrap';

const app = document.getElementById('app');

async function loadTasks() {
    try {
        const response = await axios.get('/api/tasks');
        const tasks = response.data.data;
        displayTasks(tasks);
    } catch (error) {
        console.error('Error loading tasks:', error);
    }
}

function displayTasks(tasks) {
    const taskList = document.createElement('ul');
    tasks.forEach(task => {
        const li = document.createElement('li');
        li.textContent = `${task.title} - ${task.completed ? 'Done' : 'Pending'}`;
        if (task.category) {
            li.textContent += ` (${task.category.name})`;
        }
        taskList.appendChild(li);
    });
    app.innerHTML = '<h1>To-Do App</h1>';
    app.appendChild(taskList);
}

loadTasks();
