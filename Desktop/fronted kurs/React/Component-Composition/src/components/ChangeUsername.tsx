import React, { useContext, useState } from 'react';
import { UserContext } from '../contexts/UserContext';

const ChangeUsername: React.FC = () => {
  const userContext = useContext(UserContext);

  if (!userContext) {
    throw new Error("ChangeUsername must be used within a UserProvider");
  }

  const { setUsername } = userContext;
  const [newUsername, setNewUsername] = useState<string>('');

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setNewUsername(e.target.value);
  };

  const handleSubmit = () => {
    setUsername(newUsername);
    setNewUsername('');
  };

  return (
    <div>
      <input
        type="text"
        value={newUsername}
        onChange={handleChange}
        placeholder="Yangi ism kiriting"
      />
      <button onClick={handleSubmit}>Ismni o'zgartirish</button>
    </div>
  );
};

export default ChangeUsername;
