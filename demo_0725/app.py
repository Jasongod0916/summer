# -*- coding: utf-8 -*-

from flask import Flask, jsonify, request, url_for, render_template, redirect
from flask_cors import CORS
app = Flask(__name__)
CORS(app)
app.config['JSON_AS_ASCII'] = False
todos = [
    {"id": 1, "task": "1", "completed": False},
    {"id": 2, "task": "2", "completed": False}
]


@app.route('/', methods=['GET', 'PUT'])
def index():
    return render_template("todo.html")


@app.route('/todos', methods=['GET', 'PUT'])
def get_todos():
    response = jsonify(todos)
    response.headers.add('Access-Control-Allow-Origin', '*')
    return response


@app.route('/todos', methods=['POST'])
def create_todo():
    print("get new Todo")
    data = request.form['newTask']
    print(data)
    todo = {"id": len(todos)+1, "task": data, "completed": False}
    todos.append(todo)
    return redirect(url_for('index'))


@app.route('/todos/<int:todo_id>', methods=['PUT'])
def update_todo(todo_id):
    data = request.form['updateTask']
    todo = next((todo for todo in todos if todo['id'] == todo_id), None)
    if todo:
        todo['task'] = data
    print('update')
    return redirect(url_for('index'))


if __name__ == '__main__':

    app.run(port=5000)
