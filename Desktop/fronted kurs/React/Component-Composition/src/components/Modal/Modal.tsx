import React from "react"
import './Modal.css'

interface ModalTypes{
    children: React.ReactNode
}
function Modal({children}: ModalTypes) {
  return (
    <div className="modal-container">
        {children}
    </div>
  )
}

export default Modal