$(function(){
    console.log("Javacript Loaded");
//ON PAGE LOAD POPULATE THE TABLE FROM THE API FetchAll.php
    $(fetchAssets)
    $("#query").on("keyup", fetchAssets);
    $("#searchby").on("change", fetchAssets);
//END PAGE LOAD
})
function ShowMore(){
    console.log("Show More Activated");
}

function fetchAssets(){
    $("#AssetsTable tbody").empty();
    var searchby = $("#searchby").val();
    var query = $("#query").val();
    $.ajax({
      method: "GET",
      url: "/php/FetchAll.php",
      dataType: 'json',
      data: {searchby:searchby, query:query}
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
    })
    .fail(function(jqXHR, textStatus, errorThrown){
        $("#AssetsTable tbody").append(
            "<p>Sorry No Results Found</p>"
        )
    });
};
// ADD ASSET FORM JAVASCRIPT AJAX SUBMIT and verification



$("#addAssetForm").submit(function(e){
    e.preventDefault();
    console.log("Form Submited");
    $.ajax({
        method: "POST",
        url: "/php/addtodb.php",
        data: $('#addAssetForm').serialize()
    })
    .done(function(data){
        $("#errorArea").hide("fast").removeClass("alert-warning").addClass("alert-success").show("slow").html("Asset Has Been added to the System");
        $("#addAssetForm").trigger("reset");
    })
    .fail(function(jqXHR, textStatus, errorThrown){
        var errorMsg;
        switch (jqXHR.status) {
            case 409:
                errorMsg = "<strong>Asset is already registeed in the system </strong></br> Please Check the asset number is correct.";
                break;
            case 400:
                errorMsg = "<strong>Bad Request Please Try Again.</strong><br/> If the problem persists then contact the system administrator";
                break;
            default:
                errorMsg = "<strong>Server Error Please Try again later </strong><br/> If the problem persists then contact the system administrator";
                break;
            }
        $("#errorArea").hide("fast").removeClass(" alert-success").addClass(" alert-warning").show("slow");
        $("#errorArea").html(errorMsg);
    });
});
