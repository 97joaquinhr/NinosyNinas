$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $('.custom-file-label').html(fileName);
});
