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
    <div className="p-4">
      <h1 className="text-2xl font-bold mb-4">Foydalanuvchilar ro‘yxati</h1>
      <ul className="space-y-4">
        {users.map((user) => (
          <li key={user.id} className="p-4 border rounded-lg shadow-md">
            <h2 className="text-xl font-semibold">{user.name}</h2>
            <p className="text-gray-600">📧 {user.email}</p>
            <p>📍 {user.address.city}, {user.address.country}</p>
            <p>🎭 Hobbilar: {user.hobbies.length > 0 ? user.hobbies.join(", ") : "Hobbysi yo'q"}</p>
            <p>🔹 Status: {user.status ?? "Status mavjud emas"}</p>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default UsersList;
