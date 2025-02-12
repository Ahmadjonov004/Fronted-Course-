import { useState } from 'react'
function ChangeColor() {
    const [count, setCount] = useState<string>("white")
    const changeColor = ():void =>{
        function getRandomHexColor(): string {
            const chars = "1234567890abcdef";
            let color = "#";
          
            for (let i = 0; i < 6; i++) {
              const randomIndex = Math.floor(Math.random() * chars.length); 
              color += chars[randomIndex];
            }
          
            return color;
          }
          const randomBg = getRandomHexColor()
          setCount(randomBg)
    }       
    return (
    <div className='main-1' style={{backgroundColor: count}}>
        <button className='color-btn' onClick={changeColor}>changeColor</button>
    </div>
  )
}

export default ChangeColor
