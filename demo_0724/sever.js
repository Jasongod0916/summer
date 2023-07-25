const express = require('express')
const app = express()
const port = 3000
const bodyParser = require('body-parser')

const fs = require("fs");
const { promisify } = require("util");
const readFileAsync = promisify(fs.readFile)
const writeFileAsync = promisify(fs.writeFile)

app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    next();
});
app.use(express.urlencoded({ extended: true }))
app.use(express.json())
let todoList = [];

app.get('/', async (req, res) => {
    try {
        const data = await readFileAsync('todoList.txt', 'utf8')
        todoList = JSON.parse(data)
        res.json(todoList)
    } catch (e) {
        console.error(e)
        res.send("錯誤");
    }
})

app.post('/', async (req, res) => {
    const newTodo = req.body.todo;
    console.log(newTodo)
    todoList.push(newTodo)
    
    try {
        await writeFileAsync('todoList.txt', JSON.stringify(todoList), 'utf8')
        res.send("todo added success");
    } catch (e) {
        console.error(e)
        res.send("錯誤");
    }
})




initTodoList();
async function initTodoList() {
    try {
        const data = await readFileAsync('todoList.txt', 'utf-8')
        todoList = JSON.parse(data)
    } catch (err) {
        console.error(err)
        todoList = [];
    }
    if (todoList.length === 0) {
        todoList.push("吃飯");
        todoList.push("睡覺");
    }

    try {
        await writeFileAsync('todoList.txt', JSON.stringify(todoList), 'utf8')
        console.log('初始完成');
    } catch (e) {
        console.error(e)
    }
}
app.listen(port, () => {
    console.log(`Server listing at http://localhost:${port}`);
})