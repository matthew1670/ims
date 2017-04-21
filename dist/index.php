<?php
include 'php/functions.php';
if(!Login_Check()){
    header("Location: /login.php");
    exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body data-spy="scroll" data-target="#SideNavigation" data-offset="50">
      <div class="container-fluid">
         <?php navigation(); ?>
              <section id="MainContentArea" class="full-width">
                  <article id="Alerts">
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                         <h1 class="alert-heading">Attention</h1>
                         <p>You have Items that need looking at.</p>
                    </div>
                  </article>
                  <article id="Assets">
                      <header>
                          <h1>Vew Assets</h1>
                          <form class="form-inline my-2 my-lg-0">
                            <select class="form-control mr-sm-2" name="searchby" id="searchby">
                                <option value="">Seclect a Search critera</option>
                                <option value="user">User</option>
                                <option value="location">location</option>
                                <option value="type">type</option>
                                <option value="assetno">asset Number</option>
                            </select>
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" id="query" name="query">
                          </form>
                      </header>
                      <div class="table-responsive">
                     <table class="table table-hover" id="AssetsTable">
                     <thead class="thead">
                         <tr>
                             <th>AssetNo</th>
                             <th>Type</th>
                             <th>Added</th>
                             <th>Location</th>
                             <th>Registered User</th>
                             <th>View Details</th>
                         </tr>
                     </thead>
                     <tbody>
                         <!-- All Assets Are Shown Here By Default By JS Script -->
                     </tbody>
                     </table>
                 </div>
                  </article>
              </section>
          </div>
    <?php footer();?>
  </body>
</html>
