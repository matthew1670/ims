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
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
          <div class="row">
              <section id="MainContentArea">
                  <article id="Alerts">
                     <h1 >Alerts</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </article>
                  <article id="Assets">
                      <header>
                          <h1 >Vew Assets</h1>
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

                     </tbody>
                     </table>
                  </article>
              </section>
          </div>
      </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/myjs.js" ></script>
  </body>
</html>
