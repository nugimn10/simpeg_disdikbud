const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'Data Pegawai ',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}
