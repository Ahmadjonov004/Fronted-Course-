import React from "react";
import "../index.css"

interface ModalProps {
  isOpen: boolean;
  onClose: () => void;
  title: string;
  content: React.ReactNode;
  footer: React.ReactNode;
}

const Modal: React.FC<ModalProps> = ({ isOpen, title, content, footer }) => {
  if (!isOpen) return null;

  return (
    <div className="">
      <div className="">
        <h2 className="title">{title}</h2>
        <div className="mt-4">{content}</div>
        <div className="asas">{footer}</div>
      </div>
    </div>
  );
};

export default Modal;
