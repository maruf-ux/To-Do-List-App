

# Module 3 Project: Simple To-Do App

## Project Requirements
1. **Add Task**: Users should be able to type a new task into an input field and click a button to add it.

2. **Mark Task as Done/Undone**: When users click on a task, they should see options to mark it as "Completed" (with line-through style) or cancel its completion.

3. **Delete Task**: Each task should have a delete button next to it that allows the user to remove the task permanently.

4. **Save Tasks**: All tasks must be saved into a `tasks.json` file so they remain even after reloading the page.

5. **Redirect on Action**: After performing any action (adding, marking as done, or deleting), the browser should automatically reload.

6. **UI Design**: Create a clean and simple layout using basic CSS or Milligram for styling purposes.

7. **PHP Implementation**: Use PHP to handle task creation, deletion, completion toggle, and load tasks from `tasks.json`.

8. **Security Considerations**:
   - Use htmlspecialchars() to prevent XSS attacks when handling user inputs.

## Screenshots
![App Screenshot](screenshots/preview.png)  



## Notes
- The current UI is basic but can be enhanced using CSS or Milligram.
- All functionality is contained within PHP script (index.php).
