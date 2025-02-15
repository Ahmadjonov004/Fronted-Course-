import React from 'react'
import Modal from '../Modal/Modal'

function deleteModal() {
  return (
    <div>
        <Modal>
            <div className="title">O'chirish</div>
            <button>Bekor qilish</button>
            <button>O'chirish</button>
        </Modal>
    </div>
  )
}

export default deleteModal