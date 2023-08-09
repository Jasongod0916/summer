import { useEffect, useState } from "react";
const Textcount = () => {
    const [inputText, setInputText] = useState('');
    const [charCount, setCharCount] = useState('');

    useEffect(() => {
        setCharCount(inputText.length);
    }, [inputText])

    return <div>
        <h2>文字計數器</h2>
        <textarea name="" id="" cols="50" rows="4" placeholder="請輸入文字"
            onChange={(e) => {
                setInputText(e.target.value);
            }}></textarea>
            
            <p>目前字數:{charCount}</p>
    </div>

}
export default Textcount
























