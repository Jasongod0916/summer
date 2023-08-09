import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
// import Page2 from './compo/Page 2';
// import Home from './compo/Page1/index'
import { BrowserRouter } from 'react-router-dom';
// import Todo from './compo/Todolist/index';


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <BrowserRouter>
      <App />
    </BrowserRouter>

    {/* <Home /> */}
    {/* <Todo /> */}
    {/* <Page2/> */}
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
