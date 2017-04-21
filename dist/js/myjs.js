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
            + "<td> <a class='btn btn-primary' href='/viewAsset.php?id=" + value.id + "'> More Info</a></td>"
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
// FROM https://css-tricks.com/snippets/javascript/get-url-variables/
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

function getDetails(id){
    $.ajax({
        method: "GET",
        url: "/php/FetchAll.php",
        dataType: 'json',
        data: {searchby:"id", query:id}
    }).done(function(data, textStatus, jqXHR ){
        console.log(data[0]);
        $("[name=Assetno]").val(data[0].assetNo);
        $("[name=Make]").val(data[0].make);
        $("[name=Model]").val(data[0].model);
        $("[name=Location]").val(data[0].Location);
        $("[name=PatTest]").val(data[0].patTestDate.split(' ')[0]);
        $("[name=User]").val(data[0].associatedTo);
    }).fail(function(jqXHR, textStatus, errorThrown){
        console.log(jqXHR.status);
    })
}
