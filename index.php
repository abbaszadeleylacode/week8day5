<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <style type="text/css">
        .box{
          border: 2px solid #014C8D;
          background-color: #009DFE;
        }
        th{
          color: white;
          font-size: 24px;
        }
        .title{
          color: white;
          font-size: 24px;
          text-transform: uppercase;
        }

      </style>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <style media="screen">
   </style>
   <body>
      <div class="container">
        <div class="container-fluid box">
        <div class="col-md-8 col-md-offset-2">
            <div class="row ">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="title text-center">Qeydiyyat</h3>
                        <form method="post" action="upload.php" enctype="multipart/form-data">
                              <div class="form-group">
                                  <input type="text" class="form-control" name="name" placeholder="Adı">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="location" placeholder="Yer adı">
                              </div>
                              <div class="form-group">
                                  <input type="file" class="form-control" name="Photo">
                              </div>
                              <div class="form-group">
                                  <input class="btn btn-default pull-right" type="submit" value="Yüklə" name="Submit">
                              </div>
                        </form>
                </div>
                </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Yükləyən</th>
                                    <th>Yer</th>
                                    <th>Fayl</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                 $myFile = fopen("uploadedfile.txt","a+") or die ("Fayl yoxdur");
                                      $FileList = [];
                                         while (!feof($myFile)) {
                                            $files[] = fgets($myFile);
                                         };
                                    fclose($myFile);
                                    $files = explode("@_+_@",file_get_contents("uploadedfile.txt"));
                                    foreach ($files as $key => $value) {
                                       $files[$key] = explode("|",$value);
                                    };
                                    foreach ($files as $value) {
                                       echo "<tr>";
                                       if (isset($value[1])) {
                                          echo "<td>$value[0]</td><td>$value[1]</td><td><img src='uploads/$value[2]' style='width:100px;height:100px;'></td>";
                                       }
                                       echo "</tr>";
                                    }
                               ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
   </body>
</html>