$(function () {

    $('.btnTambahData').on('click', function () {
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#judulModal').html('Tambah Data Mahasiswa')

    });

    $('.tampilModalUbah').on('click', function () {
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});