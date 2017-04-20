<?php
require_once '../vendor/autoload.php';
include 'php/functions.php';
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
          <nav class="navbar navbar-toggleable-md navbar-light bg-faded" id="Navbar">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">IMS</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/#assets">View Assets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/AddAsset.php">Add An Asset</a>
                </li>
              </ul>
            </div>
          </nav>
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
                  </article>
              </section>
          </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/myjs.js" ></script>
  </body>
</html>
