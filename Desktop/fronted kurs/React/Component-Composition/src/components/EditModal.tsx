import React, { useState } from "react";
import Modal from "./Modal";

interface EditModalProps {
  isOpen: boolean;
  onClose: () => void;
  onSave: (newValue: string) => void;
  initialValue: string;
}

const EditModal: React.FC<EditModalProps> = ({ isOpen, onClose, onSave, initialValue }) => {
  const [value, setValue] = useState(initialValue);

  return (
    <Modal
      isOpen={isOpen}
      onClose={onClose}
      title="Tahrirlash"
      content={
        <input
          type="text"
          className="border p-2 w-full"
          value={value}
          onChange={(e) => setValue(e.target.value)}
        />
      }
      footer={
        <>
          <button className="px-4 py-2 bg-gray-300 rounded" onClick={onClose}>Bekor qilish</button>
          <button className="px-4 py-2 bg-blue-500 text-white rounded" onClick={() => onSave(value)}>
            Saqlash
          </button>
        </>
      }
    />
  );
};

export default EditModal;
