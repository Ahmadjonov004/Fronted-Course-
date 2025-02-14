import React from "react";
import Modal from "./Modal";

interface DeleteModalProps {
  isOpen: boolean;
  onClose: () => void;
  onDelete: () => void;
}

const DeleteModal: React.FC<DeleteModalProps> = ({ isOpen, onClose, onDelete }) => {
  return (
    <Modal
      isOpen={isOpen}
      onClose={onClose}
      title="O‘chirishni tasdiqlash"
      content={<p>Haqiqatan ham bu elementni o‘chirmoqchimisiz?</p>}
      footer={
        <>
          <button className="px-4 py-2 bg-gray-300 rounded" onClick={onClose}>Bekor qilish</button>
          <button className="px-4 py-2 bg-red-500 text-white rounded" onClick={onDelete}>
            Ha, o‘chirish
          </button>
        </>
      }
    />
  );
};

export default DeleteModal;
