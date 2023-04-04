$(document).ready(function () {
    //save hotel
    $('#btnSave').click(function () {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/room',
            data: $('#formHotel').serialize(),
            success: function (response) {
                console.log(response.message);
                loadTable();
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
            url: '/room/' + $('input[name="id"]').val(),
            data: $('#frmHotelUpdate').serialize(),
            success: function (response) {
                console.log(response);
                loadTable();
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

    loadTable();

});

function loadTable() {
    $.ajax({
        type: 'GET',
        url: '/rooms/'+splitUrl(2),
        success: function (response) {
            console.log(response);
            if (response.success == true) {
                var data = [];
                for (i = 0; i < response.result.length; i++) {
                    var string_id = "'" + response.result[i]['id'] + "'";
                    data.push({
                        "id": response.result[i]['id'],
                        "room_no": response.result[i]['room_no'],
                        "charges": response.result[i]['charges'],
                        "description": response.result[i]['description'],
                        // "status": response.result[i]['status'],
                        "edit": '<button class="btn btn-primary" onclick="edit(' + string_id + ')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>',
                        "view": '<button class="btn btn-success" onclick="view(' + string_id + ')"><i class="fa fa-eye" aria-hidden="true"></i></button>',
                        "delete": '<button class="btn btn-danger" onclick="_delete(' + string_id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button>'
                    });
                }

                $('#tblHotels').DataTable({
                    destroy: true,
                    responsive: false,
                    "order": [],
                    "data": data,
                    "columns": [
                        { "data": "id" },
                        { "data": "room_no" },
                        { "data": "charges" },
                        { "data": "description" },
                        // { "data": "status" },
                        { "data": "edit" },
                        { "data": "view" },
                        { "data": "delete" },
                    ],
                    columnDefs: [
                        { width: 100, targets: 0 },
                        { width: 30, targets: 3 },
                        { width: 30, targets: 4 },
                        { width: 30, targets: 5 }
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

function edit(id) {
    $.ajax({
        type: 'GET',
        url: '/findroom/' + id,
        success: function (response) {
            if (response.success == true) {
                $('input[name="id"]').val(response.result.id);
                $('#frmHotelUpdate input[name="room_no"]').val(response.result.room_no);
                $('#frmHotelUpdate input[name="charges"]').val(response.result.charges);
                $('#frmHotelUpdate input[name="description"]').val(response.result.description);
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


function splitUrl(segment) {
    var segments = $(location).attr('href').replace(/^https?:\/\//, '').split('/');
    return segments[segment];
}
