
function loadPopUp(i) {
    Swal.fire({
        title: "Donor's Details ("+donorsList[i].bloodGroup+')',
        html: '<table class = "table table-danger table-hover">' +
             '<tr>'+
             '<td>Name </td>'+
             '<td>'+donorsList[i].firstName+
             '</tr>'+ '<tr>'+
             '<td>Gender </td>'+
             '<td>'+donorsList[i].gender+
             '</tr>'+ '<tr>'+
             '<td>Body Weight (kg) </td>'+
             '<td>'+donorsList[i].bodyWeight+
             '</tr>'+ '<tr>'+
             '<td>Address </td>'+
             '<td>'+donorsList[i].address+
             '</tr>'+ '<tr>'+
             '<td>Email </td>'+
             '<td>'+donorsList[i].email+
             '</tr>'+ '<tr>'+
             '<td>Phone Number </td>'+
             '<td>'+donorsList[i].phoneNumber+
             '</tr>'+
        '</table>'
    });
}

var donorsList;

function loadDonorsList() {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "donors.json", true);

    xhr.onload = function () {
        donorsList = JSON.parse(this.responseText);
        //console.log(donorsList);
        loadDonorsTable();
    }
    xhr.send();
}

function loadDonorsTable() {
    var table = '';
    table += '<table class="table table-hover table-striped ">' +
        '<thead class="thead-light">' +
        '<tr>' +
        '<th scope="col">Name</th>' +
        '<th scope="col">Blood Group</th>' +
        '</tr>' +
        '</thead>' +
        '<tbody>';

    for (let i in donorsList) {
        table += '<tr onclick="loadPopUp(' + i + ');">' +
            '<td>' + donorsList[i].firstName + '</td>' +
            '<td>' + donorsList[i].bloodGroup + '</td>' +
            '</tr>';
    }
    table += ' </tbody>' +
        '</table>';
    document.getElementById('table-container').innerHTML = table;

}



loadDonorsList();
