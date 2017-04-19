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
                 <article>
                    <h1 >Add An Asset</h1>
                    <div id="errorArea" class="alert" style="display:none;"></div>
                    <form method="post" id="addAssetForm">
                        <div class="form-group">
                            <label for="Assetno">Asset Number</label>
                            <input type="text" name="Assetno" class="form-control" placeholder="Asset Number" required  pattern="^[0-9]*$"/>
                        </div>
                        <div class="form-group">
                            <label for="assettype">Asset type</label>
                            <select class="form-control" name="assettype">
                                <option value="Desktop">Desktop</option>
                                <option value="Laptop">Laptop</option>
                                <option value="HDD">Hard Drive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Make">Make</label>
                            <input type="text" name="Make" value="" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="Model">model</label>
                            <input type="text" name="Model" value="" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="Location">Location</label>
                            <input type="text" name="Location" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="PatTest">PatTested Date</label>
                            <input type="date" name="PatTest" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="User">associated To</label>
                            <input type="text" name="User" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn-primary" value="Submit" />
                        </div>
                    </form>
                 </article>

              </section>
          </div>
      </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/myjs.js"></script>
  </body>
</html>
