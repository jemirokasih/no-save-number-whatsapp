<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Jemiro Kasih">
    <meta name="description" content="Simple Script for you who lazy enough to save number before using whatsapp">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>WA Sender Without Save Number v0.011 || PT Mikrotek Zemiro Indonesia</title>
    <style>
        
        .formwa{    
            padding:40px 20px 20px 20px;
            background-color:#f2f2f2;
            border-radius:5px;
        }
        
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }  
    </style>
  </head>
  <body>
    <div class="container" style="margin-top:50px;">
        <div class="row justify-content-md-center">
            <div class="col-md-4 ">
                <img class='img-fluid' src='logo.png'>
                <form method="GET" action="" class="formwa">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukan Nomor Telfon</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                          </div>
                            <input type="number" class="form-control"  name="nowa">
                        </div>
                        
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        <button type="reset" class="btn btn-link">Bersihkan form</button>
                    </div>
                </form>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4" style="margin-top:20px;">
                <?php
                if ($_GET)
                {
                    $link = "https://api.whatsapp.com/send?phone=62" . $_GET['nowa'];
                    echo '<a class="btn btn-success form-control" href="' . $link . '">KLIK UNTUK WA KE +62' . $_GET['nowa'].'</a>';
                    //echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $link . '">';
                }
                ?>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4 text-center" style="margin-top:50px;">
                2020 &copy; Males Save WA Beta v0.011 by <a href="https://mzi.co.id">MZI</a>
            </div>
            
            
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>