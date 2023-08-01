import M_child from "./M_child"
import { useState } from "react"
const Mid = () =>{
    const [count, setCount] = useState(0);

    const increment =() =>{
        setCount(count+1);
    };

    const decrement =() =>{
        setCount(count-1);
    }
    return <div>
        <h1>
            count
        </h1>
        <p>
            目前count: {count}
        </p>
        <button className="按鈕" onClick={increment}>增加</button>
        <button className="按鈕" onClick={decrement}>減少</button>
    </div>
}
export default Mid