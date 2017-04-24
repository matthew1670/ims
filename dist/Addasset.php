<?php
require $_SERVER['DOCUMENT_ROOT'].'/php/functions.php';
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
          <div id="contain" class="row">
                  <section id="MainContentArea">
                     <article>
                        <h1 class="pageTitle">Add An Asset</h1>
                        <div id="errorArea" class="alert" style="display:none;"></div>
                        <form method="POST" id="addAssetForm" action="/php/addtodb.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Assetno">Asset Number</label>
                                <input type="text" name="Assetno" class="form-control" placeholder="Asset Number" required  pattern="^[0-9]*$"/>
                            </div>
                            <div class="form-group">
                                <label for="assettype">Asset type</label>
                                <select class="form-control" name="assettype">
                                    <option value="Desktop">Desktop</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Harddrive">Hard Drive</option>
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
                                <label for="img">Image</label>
                                <input type="file" name="img" class="form-control">
                                <img id="ImgPreview" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn-primary" value="Submit" />
                            </div>
                        </form>
                     </article>
                  </section>
                  <aside class="Helper" id="Sidebar">
                      <p><strong>Asset Number:</strong>This is the number associated to the Asset.</p>
                      <p><strong>Asset Type:</strong>Defines what type the asset is.</p>
                      <p><strong>Make:</strong>What is the make of the Asset?</p>
                      <p><strong>Model:</strong>What is the Model of the Asset?</p>
                      <p><strong>Locaion:</strong>Where is the Asset Located?</p>
                      <p><strong>PatTested Date:</strong>When was the device last PAT tested?</p>
                      <p><strong>Associated To:</strong>Who is the asset associated to?</p>
                  </aside>
              </div>
          </div>
      </div>
             <?php footer(); ?>
  </body>
</html>
