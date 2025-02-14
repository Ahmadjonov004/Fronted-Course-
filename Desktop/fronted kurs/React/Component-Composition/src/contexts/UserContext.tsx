import React, { useState, createContext, ReactNode } from 'react';

// Context yaratish uchun interfeys
interface UserContextType {
  username: string;
  setUsername: (name: string) => void;
}

export const UserContext = createContext<UserContextType | undefined>(undefined);

interface UserProviderProps {
  children: ReactNode;
}

// Provider komponenti
export const UserProvider: React.FC<UserProviderProps> = ({ children }) => {
  const [username, setUsername] = useState<string>('Foydalanuvchi');

  return (
    <UserContext.Provider value={{ username, setUsername }}>
      {children}
    </UserContext.Provider>
  );
};