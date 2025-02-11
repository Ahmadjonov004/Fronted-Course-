import React, { useState } from "react";
const InputMirror: React.FC = () => {
  const [text, setText] = useState<string>("Type something..."); 

  const handleChange = (event: React.ChangeEvent<HTMLInputElement>): void => {
    setText(event.target.value);
  };

  return (
    <div className="main">
        <h2 className="text">{text}</h2>
        <input className="input" onChange={handleChange} type="text" placeholder="Matnni kiriting: " />
    </div>
  );
};

export default InputMirror;
