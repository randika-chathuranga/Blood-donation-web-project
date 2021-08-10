
function myFunction(){
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        confirmButtonText: 'Cool'
      })
}

var donorsList;

function loadDonorsList(){
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","donors.json",true);

    xhr.onload = function(){
        donorsList = JSON.parse(this.responseText);
        //console.log(donorsList);
        loadDonorsTable();
    }
    xhr.send();
}

function loadDonorsTable(){
    var table = '';
    table += '<table class="table table-hover table-striped ">'+
    '<thead class="thead-light">'+
        '<tr>'+
            '<th scope="col">First Name</th>'+
            '<th scope="col">Last Name</th>'+
            '<th scope="col">Gender</th>'+
            '<th scope="col">Email</th>'+
            '<th scope="col">Phone Number</th>'+
            '<th scope="col">Blood Group</th>'+
        '</tr>'+
    '</thead>'+
    '<tbody>';
    
        for (let donor of donorsList) {
                table += '<tr onclick="myFunction();">'+
                '<td>' + donor.firstName + '</td>' +
                '<td>' + donor.lastName + '</td>' +
                '<td>' + donor.gender + '</td>' +
                '<td>' + donor.email + '</td>' +
                '<td>' + donor.phoneNumber + '</td>' +
                '<td>' + donor.bloodGroup + '</td>' +
                '</tr>';
        }
        table += ' </tbody>'+
        '</table>';
    document.getElementById('table-container').innerHTML = table ;

}



loadDonorsList();
