function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.change-image').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(function(){
    $('.custom-file input').change(function (e) {
        $(this).next('.custom-file-label').html(e.target.files[0].name);
        readURL(this);
    });
});