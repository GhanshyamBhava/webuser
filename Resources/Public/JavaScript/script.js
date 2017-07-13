$(function () {
    $("body").on("click", ".dob", function(){
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,    
            showButtonPanel: true,
            yearRange: "-100:+0",
            dateFormat: 'dd-mm-yy',
            autoclose: false
        });
        $(this).datepicker("show");
    });
});

// Delete action as well as get Update and New record form
function Action (arg) {
    $.ajax({
        type: 'POST',
        url: arg,
        success: function (data) {
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
var CLIPBOARD;


function getLatLong(){
    var address = $('#address').val();
    
    if (address == '') {
        address = $('#address').val('Bhavnagar, Gujarat, India');
    };

    if (address != '') {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "http://maps.googleapis.com/maps/api/geocode/json",
            data: {'address': address,'sensor':false},
            success: function(data){
                if(data.results.length){
                    $('#latitude').val(data.results[0].geometry.location.lat);
                $('#longitude').val(data.results[0].geometry.location.lng);
                }else{
                $('#latitude').val('invalid address');
                $('#longitude').val('invalid address');
               }
            }
        });
    };
}