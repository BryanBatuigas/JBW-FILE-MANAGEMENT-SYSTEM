$(document).ready(function(){

    $('#add').click(function(){

        $('#customers').append('<tr id="row" contenteditable="true"> <td><br></td><td><br></td><td><br></td></tr>');
        
    });

});


function error()
{
    window.print()
}
