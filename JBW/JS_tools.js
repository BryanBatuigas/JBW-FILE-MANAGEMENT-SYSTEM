$(document).ready(function(){

    $('#add').click(function(){

        $('#customers').append('<tr id="row" contenteditable="true"> <td><br></td><td><br></td><td><br></td></tr>');
        
    });

});


function error()
{
    var cell = document.getElementById("row1");
    var cell2 = document.getElementById("row2");
    var cell3 = document.getElementById("row3");

    if(cell.value =="" || cell2.value =="" || cell3.value =="")
    {
        alert("The table is empty!");
    }
    else
    {
        alert("The table is empty!");
        window.print()

    }

}
