
const video = document.getElementById('video');
const startTimeInput = document.getElementById('start-time');
const endTimeInput = document.getElementById('end-time');
const startDisplay = document.getElementById('start-display');
const endDisplay = document.getElementById('end-display');
const previewButton = document.getElementById('preview-button');

let isPlaying = false;

// Update time displays when sliders change
startTimeInput.addEventListener('change', () => {
  video.currentTime = startTimeInput.value;
  updateStartDisplay();
});

endTimeInput.addEventListener('change', () => {
  updateEndDisplay();
});

// Update slider values when video time changes
video.addEventListener('timeupdate', () => {
  startTimeInput.value = video.currentTime;
  updateStartDisplay();
});

// Update start time display
function updateStartDisplay() {
  const minutes = Math.floor(startTimeInput.value / 60);
  const seconds = Math.floor(startTimeInput.value % 60);
  startDisplay.textContent = minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');
}

// Update end time display
function updateEndDisplay() {
  const minutes = Math.floor(endTimeInput.value / 60);
  const seconds = Math.floor(endTimeInput.value % 60);
  endDisplay.textContent = minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');
}

// Preview button functionality (concept, actual trimming not implemented)
previewButton.addEventListener('click', () => {
  // Simulate preview by seeking to start time and stopping at end time
  video.currentTime = startTimeInput.value;
  video.play();
  video.addEventListener('ended', () => {
    video.currentTime = startTimeInput.value;
    video.pause();
  });
});
