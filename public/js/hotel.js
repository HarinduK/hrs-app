$(document).ready(function () {


    //save hotel
    $('#btnSave').click(function () {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/hotel',
            data: $('#formHotel').serialize(),
            success: function (response) {
                console.log(response.message);
                loadHotelTable();
                if (response.success == true) {
                    toastr.success(response.message);
                } else {
                     toastr.error(" added fail ");
                }

            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    });

//update hotel
$('#btnUpdate').click(function () {
    event.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/hotel/'+$('input[name="id"]').val(),
        data: $('#frmHotelUpdate').serialize(),
        success: function (response) {
            console.log(response);
            loadHotelTable();
            if (response.success == true) {
                toastr.success(response.message);
            } else {
                toastr.error(" added fail ");
            }
            $('#editHotelModal').modal('toggle');
        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }
    });
});



    loadHotelTable();

});

function loadHotelTable() {
    $.ajax({
        type: 'GET',
        url: '/hotels',
        success: function (response) {
            console.log(response);
            if (response.success == true) {
                var data=[];
                var data = [];
                for (i = 0; i < response.result.length; i++) {
                    var string_id = "'" +response.result[i]['id']+ "'";
                    data.push({
                        "id": response.result[i]['id'],
                        "name": response.result[i]['name'],
                        "address": response.result[i]['address'],
                        "longitude": response.result[i]['longitude'],
                        "latitude": response.result[i]['latitude'],
                        "edit": '<button class="btn btn-primary" onclick="edit(' + string_id + ')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>',
                        "delete": '<button class="btn btn-danger" onclick="_delete(' + string_id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button>',
                        "view": '<button class="btn btn-success" onclick="view(' + string_id + ')"><i class="fa fa-eye" aria-hidden="true"></i></button>'
                    });
                }

                $('#tblHotels').DataTable({
                    destroy: true,
                    responsive: false,
                    "order": [],
                    "data": data,
                    "columns": [
                        { "data": "id" },
                        { "data": "name" },
                        { "data": "address" },
                        { "data": "longitude" },
                        { "data": "latitude" },
                        { "data": "edit" },
                        { "data": "delete" },
                        { "data": "view" },
                    ],
                    columnDefs: [
                        { width: 30, targets: 0 },
                        { width: 200, targets: 1 },
                        { width: 30, targets: 5 },
                        { width: 30, targets: 6 },
                        { width: 30, targets: 7 }
                    ],
                });

            } else {
                console.log(response);
            }

        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }
    });
}

function edit(id){
    $.ajax({
        type: 'GET',
        url: '/hotel/'+id,
        success: function (response) {
            if (response.success == true) {
                $('input[name="id"]').val(response.result.id);
                $('input[name="name"]').val(response.result.name);
                $('input[name="address"]').val(response.result.address);
                $('input[name="longitude"]').val(response.result.longitude);
                $('input[name="latitude"]').val(response.result.latitude);
            } else {
                console.log(response);
            }

        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }
    });
    $('#editHotelModal').modal('toggle');
}

function view(id){
    window.location.href = "/room/"+id;
}
