$('#periksa-pasien-menu').addClass('active')

CKEDITOR.replace('input_surat_rujukan')
CKEDITOR.replace('input_surat_sehat')
CKEDITOR.replace('input_surat_sakit')

$('#tulis_surat_rujukan_btn').on('click', function(){
    $('#surat_rujukan_modal').modal('show')
})

$('#tulis_surat_sehat_btn').on('click', function(){
    $('#surat_sehat_modal').modal('show')
})

$('#tulis_surat_sakit_btn').on('click', function(){
    $('#surat_sakit_modal').modal('show')
})