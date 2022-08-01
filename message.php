<?php

if(isset($_SESSION['message']))
{
     ?>
     <script src="assets/js/sweetalert.min.js"></script>
        <script>
            swal({
            title: "<?= $_SESSION['message']?>!",
            text: "",
            icon: "<?= $_SESSION['message_code']?>",
            button: "Ok Done!",
            });
        </script>

     <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Hey!</strong> <?= $_SESSION['message']?> .
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->
    <?php

      unset($_SESSION['message']);
    }
    
     ?>