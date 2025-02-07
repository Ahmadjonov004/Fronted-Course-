// amali.js
const fileInput = document.getElementById('fileInput');
const selectedFileSpan = document.getElementById('selected-file');
const uploadBtn = document.querySelector('.upload');
const uploadMessage = document.getElementById('upload-message');

fileInput.addEventListener('change', (event) => {
  const selectedFile = event.target.files[0];
  if (selectedFile) {
    selectedFileSpan.textContent = selectedFile.name;
    uploadBtn.disabled = false;
  } else {
    selectedFileSpan.textContent = 'Fayl tanlanmadi';
    uploadBtn.disabled = true;
  }
});uploadBtn.addEventListener('click', async () => {
  if (fileInput.files.length > 0) {
    const formData = new FormData();
    formData.append('file', fileInput.files[0]);
    
    try {
      const response = await fetch('admin.html', {
        method: 'POST',
        body: formData
      });

      if (response.ok) {
        uploadMessage.textContent = 'Fayl muvaffaqiyatli yuklandi';
        const url = URL.createObjectURL(fileInput.files[0]);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'task1.pdf';
        a.click();
        URL.revokeObjectURL(url);
      } else {
        uploadMessage.textContent = 'Faylni yuklashda xatolik yuz berdi';
      }
    } catch (error) {
      uploadMessage.textContent = 'Yuklash jarayonida xatolik yuz berdi';
    }
  } else {
    uploadMessage.textContent = 'Fayl tanlanmaganligi sababli yuklash amalga oshmadi';
  }
});
