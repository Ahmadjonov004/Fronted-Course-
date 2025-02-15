import React from 'react'
import Modal from '../Modal/Modal'

function editModal() {
  return (
    <div>
        <Modal>
            <div className="title">Tahrirlash</div>
            <input type="text" />
            <button>Bekor qilish</button>
            <button>Saqlash</button>
        </Modal>
    </div>
  )
}

export default editModal