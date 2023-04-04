$(document).ready(function () {

    load();


});

function load(){
    $.ajax({
        type: 'GET',
        url: '/rslist',
        success: function (response) {
            console.log(response);
            if (response.success == true) {
                var html = "";
                for (i = 0; i < response.result.length; i++) {
                    var row = response.result[i];
                    html += '<tr>'
                    html += '<td>' + (i + 1) + '</td>';
                    html += '<td>' + row.guest + '</td>';
                    html += '<td>' + row.hotel + '</td>';
                    html += '<td>' + row.room_no + '</td>';
                    html += '<td>' + row.from_date + '</td>';
                    html += '<td>' + row.to_date + '</td>';
                    if (row.status == 0) {
                        html += '<td><span class="badge badge-primary">pending</span></td>';
                        if (userRole != 2) {
                            html += '<td><button class="btn btn-primary" onclick="edit(' + row.id + ',' + row.status + ')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Check in</button></td>';
                        }
                    } else if (row.status == 1) {
                        html += '<td><span class="badge badge-success">checked in</span></td>';
                        if (userRole != 2) {
                            html += '<td><button class="btn btn-success" onclick="edit(' + row.id + ',' + row.status + ')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Check out</button></td>';
                        }
                    } else if (row.status == 2) {
                        html += '<td><span class="badge badge-danger">checked out</span></td>';
                        if (userRole != 2) {
                            html += '<td><button disabled class="btn btn-dark" onclick="edit(' + row.id + ',' + row.status + ')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Checked out</button></td>';
                        }
                    }


                    html += '</tr>';

                }
                // html +='<tr><th colspan="4">Total</th><th style="text-align:right">'+total+'</th></tr>';
                $('#tbodyrooms').html(html);
                console.log(html);
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


function edit(id,status){
    $.ajax({
        type: 'POST',
        url: '/rsstatus',
        data: {
            id:id,
            status:status+1,
            _token: $("input[name='_token']").val()
        },
        success: function (response) {
            load();
        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }
    });
}
