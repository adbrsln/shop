<?php
       if(isset($_GET['s'])){
           $s = $_GET['s'];
         switch ($s){
            case 't':
            echo  '<script type="text/javascript" language="javascript">
            swal("Succesful", "Successs Adding to Cart", "success");</script>';
            break;
            case 'f':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "Fail to add to cart", "error");
            </script>';
            break;
            case 'lt':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesful", "Welcome user!", "success");
            </script>';
            break;
            case 'llt':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesfully Registered", "Please Login to continue", "success");
            </script>';
            break;
             case 'lf':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "username or password went wrong", "error");
            </script>';
            break;
            case 'sf':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "You have no Access! Login First!", "error");
            </script>';
            case 'sfc':
            echo  '<script type="text/javascript" language="javascript"> swal("Oops!", "Your cart is empty ! You will be redirected to shopping page", "warning");
            </script>';
            break;
            case 'p':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesful", "You have Successfully delete the record!", "success");
            </script>';
            break;
        default:
            }
       }?>

<div class="container">

        <hr>

        <!-- Footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;Team <strong>VyHeracless </strong> 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
     $('#confirm').click(function(e) {
     e.preventDefault(); // Prevent the href from redirecting directly
     var linkURL = $(this).attr("href");
     warnBeforeRedirect(linkURL);
     });

      function warnBeforeRedirect(linkURL) {
         swal({
           title: "Do you want to place order?",
           text: "Of course you want right? hop on!",
           type: "success",
           showCancelButton: true
         }, function() {
           // Redirect the user
           window.location.href = linkURL;
         });
       }
    </script>
    <script>
     $('#confirmationdel').click(function(e) {
     e.preventDefault(); // Prevent the href from redirecting directly
     var linkURL = $(this).attr("href");
     warnBeforeRedirect2(linkURL);
     });

      function warnBeforeRedirect2(linkURL) {
         swal({
           title: "Clear Shopping Cart?",
           text: "Caution! You cannot reverse this!",
           type: "warning",
           showCancelButton: true
         }, function() {
           // Redirect the user
           window.location.href = linkURL;
         });
       }
    </script>
</body>

</html>
