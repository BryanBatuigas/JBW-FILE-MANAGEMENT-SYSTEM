var index, table = document.getElementById("customers");
for (var i = 1; i < table.rows.length; i++)
{
    table.rows[i].cells[10].onclick = function()
    {
    var c = confirm("Do you want to delete this row?");
    if (c === true)
    {
        index = this.parentElement.rowIndex;
        table.deleteRow(index);
    }

};
}