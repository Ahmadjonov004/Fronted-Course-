import React, { useState } from 'react'

function Shop() {
    const [items, setItem] = useState<string[]>([])
    const [inputValue, setInputValue] = useState<string>("")
    const setInputChange = (event:React.ChangeEvent<HTMLInputElement>): void => {
        setInputValue(event.target.value)
    }
    const addItem =  (): void => {
        if(inputValue.trim() !== ""){
            setItem((prevItem) => [...prevItem, inputValue])
            setInputValue("")
        }
    }
  return (
    <div className='main'>
        <h1>shop list</h1>
        <div>
            <input type="text" value={inputValue} placeholder='mahsulot nomi' onChange={setInputChange}/>
            <button onClick={addItem}>Qoshish</button>
        </div>
        {items.length === 0 ? (
        <p style={{ fontSize: "18px", color: "#777" }}>No items added yet</p>
      ) : (
        <ul className='ul-list' style={{ listStyle: "none", padding: 0 }}>
          {items.map((item, index) => (
            <li key={index}>{item}</li>
          ))}
        </ul>
      )}
    </div>
  )
}

export default Shop
