// import logo from './logo.svg';
import './App.css';
import {Route,Routes} from 'react-router-dom';
import Home from './compo/Page1';
import Page2 from './compo/Page 2';
import Todo from './compo/Todolist';
function App() {
  return  <div>
    <Routes>
      <Route path="/" element={<Home/>}/>
      <Route path="/Page2" element={<Todo/>}/>
      <Route path="/Page3" element={<Page2/>}/>
    </Routes>
  </div>  
  
}

export default App;
// {/* <div className="App">
//       <header className="App-header">
//         <img src={logo} className="App-logo" alt="logo" />
//         <p>
//           Edit <code>src/App.js</code> and save to reload.
//         </p>
//         <a
//           className="App-link"
//           href="https://reactjs.org"
//           target="_blank"
//           rel="noopener noreferrer"
//         >
//           Learn React
//         </a>
//       </header>
//     </div> */}