<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>FORM</title>
  </head>
  <body background="assets/bg.jpg"  >
  background: url("bg.jpg");}
    <div class="container">
        <h2 class="alert text-warning text-center mt-3" >CBS ASSESMENT PREDICTION</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="att" class="text-warning">Attendance</label>
                <input type="number" name="att" class="form-control" >
            </div>
            <div class="form-group">
                <label for="kog" class="text-warning">Cognitive</label>
                <input type="number" name="kog" class="form-control" >
            </div>
            <div class="form-group">
                <label for="psi" class="text-warning">Psychomotor</label>
                <input type="number" name="psi" class="form-control" >
            </div>
            <div class="form-group">
                <label for="afe" class="text-warning">Affective</label>
                <input type="number" name="afe" class="form-control" >
            </div>
            <!-- Tombol untuk menampilkan modal-->
            <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#myModal">RESULT</button>
          
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                  <!-- heading modal -->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">CBS ASSESMENT PREDICTION</h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body">
                    <p>bagian body modal.</p>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>