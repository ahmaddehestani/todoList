# Todo project




## this app help you to create your daily task to done.


# database: mysql
# program language: php
# framework: laravel

## 2 tables use in project
1. [items](#task-info)
2. [categories](#category-task)

## Installation
***


$ git clone https://github.com/ahmaddehestani/todoList.git

$ npm install

$ php artisan migrate:fresh --seed

$ php artisan serve

## in localhost use 
http://127.0.0.1:8000/     homepage

http://127.0.0.1:8000/todos/createTask  create Task

http://127.0.0.1:8000/todos/taskList   task list

http://127.0.0.1:8000/todos/editTask     edit task

http://127.0.0.1:8000/todos/findTask     search task by id

http://127.0.0.1:8000/category/create   create category of task

http://127.0.0.1:8000/category/list   show list category