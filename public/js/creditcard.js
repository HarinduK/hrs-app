$(document).ready(function () {


    //save hotel
    $('#btnSave').click(function () {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/cc',
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
        url: '/cc',
        success: function (response) {
            console.log(response);
            if (response.success == true) {
                var data=[];
                var data = [];
                for (i = 0; i < response.result.length; i++) {
                    var string_id = "'" +response.result[i]['id']+ "'";
                    data.push({
                        "id": response.result[i]['id'],
                        "card_number": response.result[i]['card_number'],
                        "cvv": response.result[i]['cvv'],
                        "delete": '<button class="btn btn-danger" onclick="_delete(' + string_id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button>',
                    });
                }

                $('#tblHotels').DataTable({
                    destroy: true,
                    responsive: false,
                    "order": [],
                    "data": data,
                    "columns": [
                        { "data": "id" },
                        { "data": "card_number" },
                        { "data": "cvv" },
                        { "data": "delete" },
                    ],
                    columnDefs: [
                        { width: 30, targets: 0 },
                        { width: 30, targets: 3 },
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
