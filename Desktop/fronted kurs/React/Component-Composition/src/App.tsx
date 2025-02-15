import { useState } from "react"
import './App.css'
import DeleteModal from "./components/deleteModal/deleteModal"
import EditModal from "./components/editModal/editModal"

function App() {
  const [deleteModal, setDeleteModal] = useState<boolean>(false)
  const [editModal, setEditModal] = useState<boolean>(false)

  function openDeleteModal(){
    if(!deleteModal){
      setDeleteModal(true)
    }
  }
  function openEditMOdal(){
    if(!editModal){
      setEditModal(true)
    }
  }

  return (
    <div className="app">
      <button onClick={openDeleteModal}>Open Delete Modal</button>
      <button onClick={openEditMOdal}>Open Edit Modal</button>
      {editModal && <EditModal/>}
      {deleteModal && <DeleteModal/>}
    </div>
  )
}

export default App