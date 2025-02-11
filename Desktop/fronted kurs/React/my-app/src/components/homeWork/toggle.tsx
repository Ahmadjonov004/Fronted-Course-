import React, { useState } from "react";

const BooleanToggle: React.FC = () => {
  const [count, setIsOn] = useState<boolean>(false);

  const toggleCount = (): void => {
    setIsOn((prevState) => !prevState);
    
  };

  return (
    <div className="main">
        <h2 className="count">{count ? "Turn OFF" : "Turn ON"}</h2>
        <button onClick={toggleCount} className="toogle-btn" >Ozgartirish</button>
    </div>
  );
};

export default BooleanToggle;
