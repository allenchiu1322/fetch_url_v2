$('#btn_submit').click(function() {
    var p_url = $('#txt_url').val();
    if (p_url != '') {
        $('#btn_submit').attr('disabled', 'disabled');
        $.ajax({
            method: 'POST',
            url: 'fetch_url/fetch_this',
            data: { url: p_url },
            success: function(data) {
                $('#result').html(data);
                $('#btn_submit').removeAttr('disabled');
            }
        });
    } else {
        alert('請填入網址');
    }
    return false;
});
