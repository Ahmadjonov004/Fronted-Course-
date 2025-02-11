import { useState } from "react";

function Renames() {
    const [count, setCount] = useState<string>("qahhorali");
    const Rename = () :void => {
        setCount((names) => names === "qahhorali" ? "asilbek" : "qahhorali")
    } 
    return (
        <div>
            <h1>Ism: {count}</h1>
            <button onClick={Rename}>O'zgartirish</button>
        </div>
    );
}

export default Renames;