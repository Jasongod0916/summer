import { useState, useEffect } from "react";
const   API = () =>{
    const [users, setUsers] = useState([]);

    useEffect(()=>{
        fetchUsers();
    },[]);
    const fetchUsers = async ()=>{
        try{
            const resp = await fetch('http://jsonplaceholder.typicode.com/users');
            const data = await resp.json();
            setUsers(data);
            console.log(data); 
        }catch(error){
            console.error('error:', error)
        }
    };

    return <div>
        <h1>UserList</h1>
        {users.length > 0 ?(
            <ul>
                {users.map(user=>(
                    <li key={user.id}>
                        {user.name} ({user.email})
                    </li>
                ))}
            </ul>
        ):(
            <p>
                wait...
            </p>
        )}
    </div>
}
export default API