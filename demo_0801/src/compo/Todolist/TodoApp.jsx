import { useState, useEffect } from "react";
import TodoItem from "./TodoItem";

const TodoApp = () => {
    const [todos, setTodos] = useState([
        { id: 1, title: '學習', completed: true },
        { id: 2, title: '睡覺', completed: true },
        { id: 3, title: '起床', completed: true },
    ]);
    const [newTodoTitle, setNewTodoTitle] = useState('');

    const handleAdd = () => {
        if (newTodoTitle.trim() !== '') {
          const newTodo = {
            id: Date.now(),
            title: newTodoTitle,
            completed: true, // 新增待辦事項時預設為已完成狀態
          };
          setTodos([...todos, newTodo]);
          setNewTodoTitle('');
        }
      };
      
      

    const handleDelete = (id) => {
        const updatedTodos = todos.filter(todo => todo.id !== id);
        setTodos(updatedTodos);
    }

    const handleComplete = (id) => {
        const updatedTodos = todos.map((todo) =>
          todo.id === id ? { ...todo, completed: !todo.completed } : todo
        );
        setTodos(updatedTodos);
      };
      

    return (
        <div>
            <h1>TO DO LIST</h1>
            <div>
                <input
                    type="text"
                    value={newTodoTitle}
                    onChange={(e) => setNewTodoTitle(e.target.value)}
                />
                <button className="按鈕3" onClick={handleAdd}>新增</button>
            </div>
            {todos.map((todo) => (
                <TodoItem
                    key={todo.id}
                    title={todo.title}
                    completed={todo.completed}
                    onDelete={() => handleDelete(todo.id)}
                    onComplete={() => handleComplete(todo.id)}
                />
            ))}
            
        </div>
    );
}

export default TodoApp;
