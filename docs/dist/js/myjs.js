$(function(){
//ON PAGE LOAD POPULATE THE TABLE FROM THE API FetchAll.php
    $.ajax({
      method: "GET",
      url: "/php/FetchAll.php",
      dataType: 'json',
    })
    .done(function( data ) {
        $.each(data, function(key, value){
            //APPEND TABLE ROW TO THE BODY OF THE ASSETS TABLE
            $("#AssetsTable tbody").append(
            "<tr>"
            + "<td>" + value.assetNo + "</td>"
            + "<td>" + value.type + "</td>"
            + "<td>" + value.added + "</td>"
            + "<td>" + value.Location + "</td>"
            + "<td>" + value.associatedTo + "</td>"
            + "<td> <button class='btn btn-primary' onclick='ShowMore();' id='btn_" +value.id + "'> More Info</button></td>"
            + "</tr>"
            );
        })
    });
//END PAGE LOAD
})
function ShowMore(){
    console.log("Show More Activated");
}
