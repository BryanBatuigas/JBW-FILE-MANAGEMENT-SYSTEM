function error()
{
    var company_name =document.getElementById("input1");
    var address=document.getElementById("input2");
    var purchasing_officer=document.getElementById("input3");
    var engineer_in_charge=document.getElementById("input4");
    var subject=document.getElementById("input5");
    var project_name=document.getElementById("input6");
    var price=document.getElementById("input7");
    var terms_of_project=document.getElementById("input8");

    if(company_name.value == "" || address.value == "" || purchasing_officer.value == "" || engineer_in_charge.value == "" || subject.value == "" || project_name.value == "" || price.value == "" || terms_of_project.value == "")
    {
        alert("Please complete the quotation letter form");
    }
    else
    {
        
    var userval = confirm("Are you sure you want to submit?");
    if(userval == true)
    {
        window.print();
        document.getElementById("input1").value = null;
        document.getElementById("input2").value = null;
        document.getElementById("input3").value = null;
        document.getElementById("input4").value = null;
        document.getElementById("input5").value = null;
        document.getElementById("input6").value = null;
        document.getElementById("input7").value = null;
        document.getElementById("input8").value = null;
    }
    }   
}

function number(evt)
{
    var ch = String.fromCharCode(evt.which);

    if(!(/[0-9]/.test(ch)))
    {
        evt.preventDefault();
    }
}

function letter1(evt)
{
    var ch = String.fromCharCode(evt.which);

    if(!(/[a-zA-Z]/.test(ch)))
    {
        evt.preventDefault();
    }
}

function letter2(evt)
{
    var ch = String.fromCharCode(evt.which);

    if(!(/[a-zA-Z]/.test(ch)))
    {
        evt.preventDefault();
    }
}

function letter3(evt)
{
    var ch = String.fromCharCode(evt.which);

    if(!(/[a-zA-Z]/.test(ch)))
    {
        evt.preventDefault();
    }
}