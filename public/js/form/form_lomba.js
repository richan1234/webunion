document.addEventListener('DOMContentLoaded', function() {
    const tenggatInput = document.getElementById('tenggat');
    const mulaiInput = document.getElementById('mulai');
    const selesaiInput = document.getElementById('selesai');

    const today = new Date().toISOString().split('T')[0];
    tenggatInput.setAttribute('min', today);

    tenggatInput.addEventListener('change', function() {
      mulaiInput.value = '';
      selesaiInput.value = '';
      const tenggatDate = tenggatInput.value;
      mulaiInput.setAttribute('min', tenggatDate);
    });

    mulaiInput.addEventListener('change', function() {
      selesaiInput.value = '';
      const mulaiDate = mulaiInput.value;
      selesaiInput.setAttribute('min', mulaiDate);
    });
  });