import React, { useState } from "react";

const FruitList: React.FC = () => {
  const [fruits, setFruits] = useState<string[]>([]);
  const [fruitIndex, setFruitIndex] = useState<number>(0);

  const fruitOptions = ["Olma", "Banan", "Nok"];

  const addFruit = (): void => {
    const newFruit = fruitOptions[fruitIndex]; 
    setFruits((prevFruits) => [...prevFruits, newFruit]); 
    setFruitIndex((prevIndex) => (prevIndex + 1) % fruitOptions.length); 
  };

  return (
    <div>
      <h1>Mevalar:</h1>
      <ul>
        {fruits.map((fruit, index) => (
          <li key={index} style={{ fontSize: "18px" }}>{fruit}</li>
        ))}
      </ul>
      <button onClick={addFruit}>
        AddFruit
      </button>
      
    </div>
  );
};

export default FruitList;
