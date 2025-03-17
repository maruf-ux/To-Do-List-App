'use strict';  

const tasks = [];  
const taskInput = document.getElementById('task-input');  
const taskAddButton = document.getElementById('task-add-button');  
const taskList = document.getElementById('task-list');  

function renderTasks() {  
    taskList.innerHTML = ''; 
    tasks.forEach((task, index) => {  
        const listItem = document.createElement('li');  
        listItem.id = `task-${index}`;  
        listItem.innerHTML = `  
            ${task}   
            <button class="btn btn-danger btn-sm" onclick="deleteTask(${index})">Delete</button>  
            <button class="btn btn-warning btn-sm" onclick="updateTask(${index})">Update</button>  
            <button class="btn btn-success btn-sm" onclick="completeTask(${index})">Complete</button>`;  
        taskList.appendChild(listItem);  
    });  
}  

function addTask() {  
    const taskName = taskInput.value.trim();  
    if (taskName) {  
        tasks.push(taskName);  
        taskInput.value = '';    
        renderTasks();  
    }  
}  

function deleteTask(taskIndex) {  
    tasks.splice(taskIndex, 1);  
    renderTasks();    
}  

function updateTask(taskIndex) {  
    const newTaskName = prompt('Update task:', tasks[taskIndex]);  
    if (newTaskName) {  
        tasks[taskIndex] = newTaskName;   
        renderTasks();    
    }  
}  

function completeTask(taskIndex) {  
    alert(`Task "${tasks[taskIndex]}" completed!`);    
     
}  

taskAddButton.addEventListener('click', addTask);  