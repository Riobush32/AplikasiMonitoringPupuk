document.addEventListener('DOMContentLoaded', function () {
    // Mendapatkan elemen-elemen radio
    let themeRadios = document.querySelectorAll('input[name="theme-buttons"]');

    // Memeriksa apakah ada nilai tema yang tersimpan di localStorage
    let savedTheme = localStorage.getItem('selectedTheme');

    // Jika ada, pilih nilai tersebut
    if (savedTheme) {
        let selectedRadio = document.querySelector('input[value="' + savedTheme + '"]');
        if (selectedRadio) {
            selectedRadio.checked = true;
            changeTheme(savedTheme);
        }
    }

    // Menambahkan event listener pada setiap radio
    themeRadios.forEach(function (radio) {
        radio.addEventListener('change', function () {
            // Memanggil fungsi untuk merubah tema
            changeTheme(radio.value);
        });
    });
});

function changeTheme(theme) {
    // Menerapkan tema sesuai dengan nilai radio yang dipilih
    if (theme === 'default') {
        document.body.style.backgroundColor = ''; // Ganti dengan properti CSS yang sesuai
    } else if (theme === 'retro') {
        document.body.style.backgroundColor = ''; // Ganti dengan properti CSS yang sesuai
    } else if (theme === 'cyberpunk') {
        document.body.style.backgroundColor = ''; // Ganti dengan properti CSS yang sesuai
    } else if (theme === 'valentine') {
        document.body.style.backgroundColor = ''; // Ganti dengan properti CSS yang sesuai
    } else if (theme === 'aqua') {
        document.body.style.backgroundColor = ''; // Ganti dengan properti CSS yang sesuai
    }

    // Menyimpan nilai tema ke dalam localStorage
    localStorage.setItem('selectedTheme', theme);
}
