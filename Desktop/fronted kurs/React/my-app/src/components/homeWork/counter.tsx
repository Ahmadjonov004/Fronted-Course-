import React, { useState } from "react"
const Counter: React.FC = () =>{
    const [count, setCount] = useState<number>(0);
    const increment = (): void => {
        setCount((prevCount) => prevCount + 1);
    };

    const decrement = (): void => {
        setCount((prevCount) => prevCount - 1)
    };

    const reset = (): void => {
        setCount(0)
    }
    return (
        <div className="main">
            <h2>uy ishi 1</h2>
            <h2>Raqam : {count}</h2>
            <div className="plus-minus">
                <button onClick={increment} className="plus-btn">+</button>
                <button className="minus-btn" onClick={decrement}>-</button>
            </div>
            <button className="reset-btn" onClick={reset}>reset</button>
        </div>
    )
}
export default Counter
