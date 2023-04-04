$(document).ready(function () {

    showHotelList();

});

function showHotelList() {
    $.ajax({
        type: 'GET',
        url: '/hotels',
        success: function (response) {
            console.log(response);
            if (response.success == true) {
                var hotelListHTML= "";
                for (i = 0; i < response.result.length; i++) {
                    var row=response.result[i];
                    hotelListHTML+=createHotelCard(row.id,row.name,row.description,row.address,row.img_url);
                }
                console.log(hotelListHTML);
                $('#hotelCardsList').append(hotelListHTML);

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
    window.location.href = "/reservation/"+id;
}

function createHotelCard(id,name,description,address,img_url){
    return  ' <div class="col-md-6 col-xs-12"> '
                           + ' <div class="card"> '
                           + '    <div class="card-body">'
                           + '        <div class="d-flex justify-content-between">'
                           + '          <div>'
                           + '              <i class="fa fa-heart text-danger mr-2"></i>'
                           + '              213'
                           + '          </div>'
                           + '          <span class="badge bg-warning-bright text-warning">%5 Off</span>'
                           + '      </div>'
                              + '      <div class="my-3">'
                              + '    <a href="#" title="Vase">'
                              + '              <img src="/img/hotel/'+img_url+'" '
                              + '                class="img-fluid rounded" alt="Vase">'
                              + '       </a>'
                              + '   </div>'
                              + '   <div class="text-center">'
                              + '       <a href="#">'
                              + '           <h4>'+ name +'</h4>'
                              + '       </a>'
                              + '       <p>'
                              + '           <span class="text-truncate"> '+ address +'</span>'
                              + '       </p>'
                              + '       <ul class="list-inline">'
                              + '           <li class="list-inline-item">'
                              + '               <i class="fa fa-star text-warning"></i>'
                              + '           </li>'
                              + '           <li class="list-inline-item">'
                              + '               <i class="fa fa-star text-warning"></i>'
                              + '           </li>'
                              + '           <li class="list-inline-item">'
                              + '               <i class="fa fa-star text-warning"></i>'
                              + '           </li>'
                              + '           <li class="list-inline-item">'
                              + '               <i class="fa fa-star-half-o text-warning"></i>'
                              + '           </li>'
                              + '           <li class="list-inline-item">'
                              + '               <i class="fa fa-star-o"></i>'
                              + '           </li>'
                              + '           <li class="list-inline-item">(47)</li>'
                              + '       </ul>'
                              + '       <div class="mt-2">'
                              + '           <button class="btn btn-primary" onclick="edit(' + id + ')">Available</button>'
                              + '       </div>'
                              + '   </div>'
                              + '   </div>'
                              + '   </div> '
                              + '</div>';
}
