import { useState } from "react";
const Button = ()=>{
    const [isON, setIsOn] = useState(false)

    const handleToggle = () =>{
        setIsOn(!isON);
    };

    return <div className="FUCK">
        <p>{isON? '關閉': '打開'}</p>
        <button className="按鈕" onClick={handleToggle}>{isON? '關閉': '打開'}</button>
    </div>
}
export default Button












