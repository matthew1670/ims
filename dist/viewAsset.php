<?php
require $_SERVER['DOCUMENT_ROOT'].'/php/functions.php';
if(!Login_Check()){
    header("Location: /login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>View Assets Details</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
      </head>
    <body>
        <?php navigation(); ?>
        <div id="contain" class="row">
                <section id="MainContentArea">
                   <article>
                       <div id="errorArea" class="alert" style="display:none;"></div>
                      <h1 class="pageTitle">Viewing Asset - <span id="assetID"></span></h1>
                      <div id="assetImg">
                          <img src="/img/Assets-images/default.jpg" alt="Image Of the Asset">
                      </div>
                      <form method="post" id="view-modify-assets">
                          <div class="form-group">
                              <input type="text" name="ID" class="form-control" hidden/>
                          </div>
                          <div class="form-group">
                              <label for="Assetno">Asset Number</label>
                              <input type="text" name="Assetno" class="form-control" placeholder="Asset Number" required disabled  pattern="^[0-9]*$"/>
                          </div>
                          <div class="form-group">
                              <label for="assettype">Asset type</label>
                              <select class="form-control" name="assettype" required disabled>
                                  <option value="Desktop">Desktop</option>
                                  <option value="Laptop">Laptop</option>
                                  <option value="Harddrive">Hard Drive</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="Make">Make</label>
                              <input type="text" name="Make" value="" class="form-control" required disabled />
                          </div>
                          <div class="form-group">
                              <label for="Model">model</label>
                              <input type="text" name="Model" value="" class="form-control" required disabled />
                          </div>
                          <div class="form-group">
                              <label for="Location">Location</label>
                              <input type="text" name="Location" class="form-control" required disabled />
                          </div>
                          <div class="form-group">
                              <label for="PatTest">PatTested Date</label>
                              <input type="date" name="PatTest" class="form-control" required disabled />
                          </div>
                          <div class="form-group">
                              <label for="User">associated To</label>
                              <input type="text" name="User" class="form-control" required disabled />
                          </div>
                          <div class="form-group">
                              <input type="submit" class="form-control btn-primary" value="Submit" />
                          </div>
                      </form>
                   </article>
                </section>
                <aside class="Helper" id="Sidebar">
                    <p><button class="btn btn-success" onclick="enableediting()">Enable Editing</button></p>
                    <p><button class="btn btn-danger" onclick="DeleteAsset(<?php echo $_GET['id']?>)">Delete Asset</button></p>
                </aside>
            </div>
        </div>
        <?php footer(); ?>
        <script type="text/javascript">
            var id = getQueryVariable("id");
            getDetails(id);
        </script>
    </body>
</html>
