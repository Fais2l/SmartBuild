document.addEventListener('DOMContentLoaded', function() {
  const uploadInput = document.getElementById('uploadPhoto');
  const profileImage = document.getElementById('profileImage');

  if (uploadInput && profileImage) {
    uploadInput.addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          profileImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  }
});