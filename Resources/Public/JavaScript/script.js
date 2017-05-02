
// Delete action as well as get Update and New record form
function Action (arg) {
    $.ajax({
        type: 'POST',
        url: arg,
        success: function (data) {
            // $('.typo3-fullDoc div').remove();
            $(".typo3-fullDoc").html(data);
        }
    });
    return false;
}

// Save new record 

function saveForm(event)
{
    event.preventDefault();
    var form = $('.saveform');
    var action = form.attr("action"),
        method = form.attr("method"),
        data = form.serialize();

        $.ajax({
            url: action,
            type: method,
            data: data
        }).done(function (data) {
            $(".typo3-fullDoc").html(data);
            // document.getElementById('ext-gen29').src = document.getElementById('ext-gen29').src
        }).fail(function () {
            alert('Error!');return false;
        }).always(function () {
    });
}