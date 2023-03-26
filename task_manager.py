import tkinter as tk

def add_task(task_name):
    with open("tasks.txt", "a") as f:
        f.write(task_name + "\n")
def read_tasks():
    try:
        with open("tasks.txt", "r") as f:
            tasks = f.read().splitlines()
    except FileNotFoundError:
        tasks = []
    return tasks

def write_tasks(tasks):
    with open("tasks.txt", "w") as f:
        f.write("\n".join(tasks))

tasks = read_tasks()

root = tk.Tk()
root.title("Tasks")

frame = tk.Frame(root)
frame.pack()

tasks_label = tk.Label(frame, text="List of Tasks:")
tasks_label.pack()

task_list = tk.Listbox(frame, width=50)
task_list.pack(side=tk.LEFT, fill=tk.BOTH)

scrollbar = tk.Scrollbar(frame, orient=tk.VERTICAL)
scrollbar.pack(side=tk.RIGHT, fill=tk.Y)
task_list.config(yscrollcommand=scrollbar.set)
scrollbar.config(command=task_list.yview)

task_label = tk.Label(root, text="Task Name:")
task_label.pack()
task_entry = tk.Entry(root, width=50)
task_entry.pack()

def update_task_list():
    task_list.delete(0, tk.END)
    for task in tasks:
        task_list.insert(tk.END, task)
def add_task_gui():
    task_name = task_entry.get()
    add_task(task_name)
    tasks.append(task_name)
    update_task_list()


add_button = tk.Button(root, text="Add Task", command=add_task_gui)
add_button.pack(pady=5, padx=5, side=tk.RIGHT)

def edit_task_gui():
    task_index = task_list.curselection()[0]
    task_name = tasks[task_index]

    edit_window = tk.Toplevel(root)
    edit_window.title("Edit Task")

    edit_label = tk.Label(edit_window, text="New Task Name:")
    edit_label.pack()
    edit_entry = tk.Entry(edit_window)
    edit_entry.pack()

    edit_entry.insert(0, task_name)

    def update_task_gui():
        new_task_name = edit_entry.get()

        tasks[task_index] = new_task_name
        write_tasks(tasks)

        update_task_list()

        edit_window.destroy()

    submit_button = tk.Button(edit_window, text="Submit", command=update_task_gui)
    submit_button.pack()

edit_button = tk.Button(root, text="Edit Task", command=edit_task_gui)
edit_button.pack(pady=5, padx=5, side=tk.RIGHT)

def delete_task_gui():
    task_index = task_list.curselection()[0]
    task_name = tasks[task_index]
    with open("tasks.txt", "r") as f:
        lines = f.readlines()
    with open("tasks.txt", "w") as f:
        for line in lines:
            if line.strip() != task_name:
                f.write(line)
    tasks.remove(task_name)
    update_task_list()

delete_button = tk.Button(root, text="Delete Task", command=delete_task_gui)
delete_button.pack(pady=5, padx=5, side=tk.RIGHT)

def complete_task(task_id):
    with open('tasks.txt', 'r') as f:
        lines = f.readlines()
    with open('tasks.txt', 'w') as f:
        for line in lines:
            if line.startswith(f"{task_id},"):
                f.write(f"{task_id},{line.split(',')[1]},True\n")
            else:
                f.write(line)


update_task_list()
root.mainloop()
