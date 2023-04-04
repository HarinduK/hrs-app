$(document).ready(function () {

    $('#daterangepicker').daterangepicker();


    $("#btnExport").click(function () {
        $("#tblHotels").table2excel({
            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
            filename: "revenue report",//do not include extension
            fileext: ".xls" // file extension
        });
    });


    $.ajax({
        type: 'GET',
        url: '/revenue',
        success: function (response) {
            console.log(response);
            if (response.success == true) {
                var html = "";
                let total = 0;
                for (i = 0; i < response.result.length; i++) {
                    var row = response.result[i];
                    total += row.amount;
                    html += '<tr>'
                    html += '<td>' + (i + 1) + '</td>';
                    html += '<td>' + row.room_no + '</td>';
                    html += '<td>' + row.from_date + '</td>';
                    html += '<td>' + row.to_date + '</td>';
                    html += '<td style="text-align:right">' + row.amount + '</td>';
                    html += '</tr>';

                }
                html += '<tr><th colspan="4">Total</th><th style="text-align:right">' + total + '</th></tr>';
                $('#tbodyrooms').html(html);
            } else {
                console.log(response);
            }

        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }
    });

});
