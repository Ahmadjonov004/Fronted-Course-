import React from "react";

interface User {
  id: number;
  name: string;
  age: number;
  email: string;
  status: string | null;
  hobbies: string[];
  address: { city: string; country: string };
}

const users: User[] = [
  {
    id: 1,
    name: "Ali Valiyev",
    age: 25,
    email: "ali@example.com",
    status: "active",
    hobbies: ["Football", "Chess", "Coding"],
    address: { city: "Tashkent", country: "Uzbekistan" },
  },
  {
    id: 2,
    name: "Zarina Karimova",
    age: 30,
    email: "zarina@example.com",
    status: "inactive",
    hobbies: ["Reading", "Swimming"],
    address: { city: "Samarkand", country: "Uzbekistan" },
  },
  {
    id: 3,
    name: "Jasur Akhmedov",
    age: 28,
    email: "jasur@example.com",
    status: "pending",
    hobbies: ["Gaming", "Cooking", "Hiking"],
    address: { city: "Bukhara", country: "Uzbekistan" },
  },
  {
    id: 4,
    name: "Madina Rahimova",
    age: 22,
    email: "madina@example.com",
    status: "active",
    hobbies: ["Painting", "Music"],
    address: { city: "Nukus", country: "Uzbekistan" },
  },
  {
    id: 5,
    name: "Shoxruxbek Saidov",
    age: 35,
    email: "shoxrux@example.com",
    status: null, // Status mavjud emas
    hobbies: [],
    address: { city: "Khiva", country: "Uzbekistan" },
  },
];

const UsersList: React.FC = () => {
  return (
    <div>
      <h1>Foydalanuvchilar ro‘yxati</h1>
      <ul>
        {users.map((user) => (
          <li>
            <h2>{user.name}</h2>
            <p> {user.email}</p>
            <p> {user.address.city}, {user.address.country}</p>
            <p> Hobbilar: {user.hobbies.length > 0 ? user.hobbies.join(", ") : "Hobbysi yo'q"}</p>
            <p>Status: {user.status ?? "Status mavjud emas"}</p>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default UsersList;
