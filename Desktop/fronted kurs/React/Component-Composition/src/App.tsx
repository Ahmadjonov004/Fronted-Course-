import React, { useState } from "react";
import EditModal from "./components/EditModal";
import DeleteModal from "./components/DeleteModal";

const App: React.FC = () => {
  const [isEditOpen, setIsEditOpen] = useState(false);
  const [isDeleteOpen, setIsDeleteOpen] = useState(false);
  const [text, setText] = useState("Dastlabki matn");

  return (
    <div className="p-10">
      <h1 className="text-2xl mb-4">Modal Component Composition</h1>

      <p className="text-lg mb-4">Matn: {text}</p>

      <button className="px-4 py-2 bg-blue-500 text-white rounded mr-2" onClick={() => setIsEditOpen(true)}>
        Tahrirlash
      </button>
      <button className="px-4 py-2 bg-red-500 text-white rounded" onClick={() => setIsDeleteOpen(true)}>
        O‘chirish
      </button>

      {/* Edit Modal */}
      <EditModal
        isOpen={isEditOpen}
        onClose={() => setIsEditOpen(false)}
        onSave={(newValue) => {
          setText(newValue);
          setIsEditOpen(false);
        }}
        initialValue={text}
      />

      {/* Delete Modal */}
      <DeleteModal
        isOpen={isDeleteOpen}
        onClose={() => setIsDeleteOpen(false)}
        onDelete={() => {
          setText("");
          setIsDeleteOpen(false);
        }}
      />
    </div>
  );
};

export default App;
