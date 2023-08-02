import { useState, useEffect } from "react"
const Mouse = () => {
    const [mouse_position, setMouse_position] = useState({ x: 0, y: 0 });
    useEffect(() => {
        console.log('attrach mouse move');
        const handleMouseMovenent = (event) => {
            setMouse_position({ x: event.clientX, y: event.clientY });

        };
        document.addEventListener('mousemove', handleMouseMovenent);

        return () => {
            console.log('cancel attrack Mouse Movement')
            document.removeEventListener('mousemove', handleMouseMovenent);

        };

    }, [])

    return <div>
        <p>X: {mouse_position.x}</p>
        <p>Y: {mouse_position.y}</p>
    </div>
}
export default Mouse













