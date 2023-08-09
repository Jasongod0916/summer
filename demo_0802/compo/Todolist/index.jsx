import Button from './Button.jsx';
import Mouse from './Mouse.jsx';
import Textcount from './Textcount.jsx';
import TodoApp from './TodoApp.jsx';
import Navbar from '../Page1/Navbar.jsx';
const Todo = ()=>{
    return <div style={{margin:'10px'}}> 
        <Navbar/>
        <TodoApp/>
        <Button/>
        <Textcount/>
        <Mouse/>
    </div>
}
export default Todo