
$(function () {

    $('form').on('submit', function (e) {
        
    e.preventDefault();
    
    $.ajax({
        type: 'post',
        url: 'task.php',
        data: new formData($('form')[0]),
        success: function () {
            
        }
    });

    });

});