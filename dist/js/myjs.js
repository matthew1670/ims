$(function(){
          console.log("Ready");
    $('#SideNavigationPanel').on('activate.bs.scrollspy', function () {
      console.log("activated");
    })
    $('#MainContentArea').on('activate.bs.scrollspy', function () {
      console.log("activated");
    })
})
