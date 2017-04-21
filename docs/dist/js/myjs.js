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
        $('form input, form select').attr('disabled', 'disabled');
        $("[name=Assetno]").val(data[0].assetNo);
        $("#assetID").html(data[0].assetNo);
        $("[name='assettype']").val(data[0].type).prop('selected', true);
        $("[name=Make]").val(data[0].make);
        $("[name=Model]").val(data[0].model);
        $("[name=Location]").val(data[0].Location);
        $("[name=PatTest]").val(data[0].patTestDate.split(' ')[0]);
        $("[name=User]").val(data[0].associatedTo);
        $("[name=ID]").val(data[0].id);
    }).fail(function(jqXHR, textStatus, errorThrown){
        console.log(jqXHR.status);
    })
}

function enableediting(){
    $('form input, form select').removeAttr('disabled');
    $('form input[type="submit"]').show();
}

$("#view-modify-assets").submit(function(e){
    e.preventDefault();
    console.log("Form Submited");
    console.log($('#view-modify-assets').serialize());
    $.ajax({
        method: "POST",
        url: "/php/modify.php",
        data: $('#view-modify-assets').serialize()
    }).done(function(data, textStatus, jqXHR ){
        console.log(textStatus);
        $('form input, form select').attr('disabled', 'disabled');
        $('form input[type="submit"]').hide();
        $("#errorArea").hide("fast").removeClass("alert-warning").addClass("alert-success").show("slow").html("Asset Has Been updated in the System").delay(5000).hide("slow");


    }).fail(function(jqXHR, textStatus, errorThrown){
        switch (jqXHR.status) {
            case 400:
                errorMsg = "<strong>Bad Request Please Try Again.</strong><br/> If the problem persists then contact the system administrator";
                break;
            case 503:
                errorMsg = "<strong>There is an issue with the system.</strong><br/> If the problem persists then contact the system administrator";
                break;
            default:
                errorMsg = "<strong>Server Error Please Try again later </strong><br/> If the problem persists then contact the system administrator";
                break;
            }
        $("#errorArea").hide("fast").removeClass(" alert-success").addClass(" alert-warning").show("slow").html(errorMsg);
    })
});


$("#loginform").submit(function(e){
    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
        method: "POST",
        url: "/php/login.php",
        data: $(this).serialize()
    }).done(function(data, textStatus, jqXHR ){
       window.location.href = "/";
    }).fail(function(jqXHR, textStatus, errorThrown){
        switch (jqXHR.status) {
            case 400:
                errorMsg = "<strong>Bad Request Please Try Again.</strong><br/> If the problem persists then contact the system administrator";
                break;
            case 503:
                errorMsg = "<strong>There is an issue with the system.</strong><br/> If the problem persists then contact the system administrator";
                break;
            case 401:
                errorMsg = "<strong>Bad Login Details.</strong><br/> Please Try Again.";
                break;
            default:
                errorMsg = "<strong>Server Error Please Try again later </strong><br/> If the problem persists then contact the system administrator";
                break;
            }
        $("#errorArea").show("slow").html(errorMsg);
    })
});
