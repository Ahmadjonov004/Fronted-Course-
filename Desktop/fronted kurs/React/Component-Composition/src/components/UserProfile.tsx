import React, { useContext } from 'react';
import { UserContext } from '../contexts/UserContext';

const UserProfile: React.FC = () => {
  const userContext = useContext(UserContext);

  if (!userContext) {
    throw new Error("UserProfile must be used within a UserProvider");
  }

  const { username } = userContext;

  return (
    <div>
      <h1>Profil</h1>
      <p>Foydalanuvchi: {username}</p>
    </div>
  );
};

export default UserProfile;