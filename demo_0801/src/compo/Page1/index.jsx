import Navbar from './Navbar.jsx';
import Image from './Image.jsx';
import Mid from './Mid.jsx';
import Todo from '../Todolist/index.jsx';

const Home = ()=>{
    return <div>
        <Navbar/>
        <div className='FUCK'>
            <Image/>

            <div style={{display:'flex', flexDirection:'column'}}>
                <Mid />
                <Todo />
            </div>
        </div>
    </div>
}
export default Home