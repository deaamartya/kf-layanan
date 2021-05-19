$('#rekam-medis-menu').addClass('active')

$('#search_pasien_btn').on('click', () => show_search_result())
$('#input_search_pasien').on('keyup', function(event){
    if(event.key === 'Enter' || event.keyCode === 13){
        show_search_result()
    }
})

function show_search_result(){
    $('.hasil_pencarian').css('display', 'none')
    $('.search_loader').css('display', 'flex')
    
    setTimeout(function(){
        $('.search_loader').css('display', 'none')
        $('.hasil_pencarian').css('display', 'block')
    }, 2000);
}