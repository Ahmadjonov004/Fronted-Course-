import React, { useState } from "react";

const AgePlus: React.FC = () => {
    const [user, setUser] = useState<{ name: string; age: number }>({
      name: "Asilbek",
      age: 15,
    });
  
    const incrementAge = (): void => {
      setUser((prevUser) => ({ ...prevUser, age: prevUser.age + 1 }));
    };
  
    return (
      <div >
        <h1 >
          {user.name}, {user.age} yoshda
        </h1>
        <button
          onClick={incrementAge}
        >
          Yoshni Oshirish
        </button>
      </div>
    );
  };
  
  export default AgePlus;
