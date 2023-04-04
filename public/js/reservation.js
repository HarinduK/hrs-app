$(document).ready(function () {

    $('input[name="daterangepicker"]').daterangepicker();

    $.ajax({
        type: 'GET',
        url: '/hotel/' + splitUrl(2),
        success: function (response) {
            if (response.success == true) {
                initMap(+response.result.latitude, +response.result.longitude, response.result.name);
                $('#lblHotelName').text(response.result.name);
                $('#imgHotel').attr("src", "/img/hotel/" + response.result.img_url);

            } else {
                console.log(response);
            }

        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }
    });

    $.ajax({
        type: 'GET',
        url: '/rooms/' + splitUrl(2),
        success: function (response) {
            if (response.success == true) {
                var html = "";
                for (i = 0; i < response.result.length; i++) {
                    html += '<tr class="table-default">';
                    html += '<td scope="row"><div class="custom-control custom-checkbox custom-checkbox-success"><input type="checkbox" class="custom-control-input" id="' + response.result[i]['id'] + '" ><label class="custom-control-label" for="' + response.result[i]['id'] + '"> </label></div></td>';
                    html += '<th><i class="fa fa-user" aria-hidden="true"></i><i class="fa fa-user" aria-hidden="true"></i></th>';
                    html += '<td>' + response.result[i]['description'] + '</td>';
                    html += '<td>' + response.result[i]['charges'] + '</td>';
                    html += '<td><span class="badge badge-success">Avalable</span></td>';
                    // html += '<td> <span class="badge badge-danger">Booked</span></td>';
                    html += '</tr>';

                }
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

    const bookedRoomList = new Array();
    let currentEmail = "";

    $('#btnReserve').click(function () {
        bookedRoomList.splice(0, bookedRoomList.length);
        var table = $("#tablerooms tbody");
        table.find('tr').each(function (i, el) {
            var $tds = $(this).find('td');

            if ($tds.eq(0).find('input[type="checkbox"]').is(':checked')) {
                // alert($tds.eq(0).find('input[type="checkbox"]').attr('id'));
                temp = [];
                temp['room'] = $tds.eq(0).find('input[type="checkbox"]').attr('id');
                temp['amount'] = $tds.eq(2).text();
                bookedRoomList.push(temp);
                // bookedRoomList['room']=$tds.eq(0).find('input[type="checkbox"]').attr('id');
                // bookedRoomList['amount']=$tds.eq(3).text();
            }
            // do something with productId, product, Quantity
        });
        console.log(bookedRoomList);
        if (bookedRoomList.length < 1) {
            toastr.error(" please select room ");
            return;
        }
        $('#myTab a[href="#profile"]').tab('show')
    });

    let guestId = 0;
    $('#btnNext').click(function () {
        currentEmail = $("input[name='email']").val();
        event.preventDefault();
        // alert($("input[name='_token']").val());
        // return;
        $.ajax({
            type: 'POST',
            url: '/guest',
            data: $('#formHotel').serialize(),
            success: function (response) {
                console.log(response.message);
                if (response.success == true) {
                    guestId = response.result;
                    $('input[name="guestId"]').val(guestId);
                    // toastr.success(response.message);

                    $.ajax({
                        type: 'POST',
                        url: '/reservation',
                        data: {
                            from_date: $('#daterangepicker').data('daterangepicker').startDate.format('YYYY-MM-DD'),
                            to_date: $('#daterangepicker').data('daterangepicker').endDate.format('YYYY-MM-DD'),
                            guest_id: guestId,
                            hotel_id: splitUrl(2),
                            _token: $("input[name='_token']").val()
                        },
                        success: function (response) {
                            console.log(response.message);
                            if (response.success == true) {
                                bookId = response.result;

                                for (i = 0; i < bookedRoomList.length; i++) {
                                    //boolking details
                                    console.log(bookedRoomList);
                                    $.ajax({
                                        type: 'POST',
                                        url: '/bookingDetails',
                                        data: {
                                            book_id: bookId,
                                            room_id: bookedRoomList[i].room,
                                            service_type: 1,
                                            service: 1,
                                            amount: bookedRoomList[i].amount,
                                            _token: $("input[name='_token']").val()
                                        },
                                        success: function (response) {
                                            console.log(response.message);
                                            if (response.success == true) {
                                                bookId = response.result;

                                            } else {
                                                toastr.error("booking added fail ");
                                            }

                                        },
                                        error: function (data) {
                                            console.log('An error occurred.');
                                            console.log(data);
                                        }
                                    });
                                    //end booking details
                                }

                                $('#registerModal').modal('toggle');
                                $('input[name="regi-email"]').val(currentEmail);

                            } else {
                                toastr.error("booking added fail ");
                            }

                        },
                        error: function (data) {
                            console.log('An error occurred.');
                            console.log(data);
                        }
                    });


                } else {
                    toastr.error(" added fail ");
                }

            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    })

    $('#btnSignup').click(function () {
        event.preventDefault();

        if ($('input[name="password1"]').val() != $('input[name="re-password"]').val() || $('input[name="password1"]').val() == "") {
            toastr.error(" password didn't match ");
            return;
        }

        $.ajax({
            type: 'POST',
            url: '/register',
            data: $('#frmRegi').serialize(),
            success: function (response) {
                console.log(response);
                if (response.success == true) {
                   toastr.success("Successfully Regitered...")

                } else {
                    toastr.error("booking added fail ");
                }

            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });

    });

});


function initialize() {
    initMap(6.3763765164162125, 80.36018424992368)
}

function initMap(latitude, longitude, title) {
    var myLatLng = { lat: latitude, lng: longitude };

    var map = new google.maps.Map(document.getElementById('default-map'), {
        zoom: 16,
        center: myLatLng,
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: title
    });
}

function splitUrl(segment) {
    var segments = $(location).attr('href').replace(/^https?:\/\//, '').split('/');
    return segments[segment].replace('?', '');
}

