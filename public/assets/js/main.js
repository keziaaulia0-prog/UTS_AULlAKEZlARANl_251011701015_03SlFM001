// kalkulator biaya sewa di halaman detail mobil
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('jumlahHari');
    var output = document.getElementById('totalSewa');
    if (!input || !output) return;

    var harga = parseInt(input.dataset.harga, 10);

    function hitung() {
        var hari = parseInt(input.value, 10);
        if (isNaN(hari) || hari < 1) hari = 1;
        var total = hari * harga;
        output.textContent = 'Rp ' + total.toLocaleString('id-ID');
    }

    input.addEventListener('input', hitung);
    hitung();
});
