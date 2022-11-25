<?php $this->load->view("depan/" . $page) ?>

<br><br>

<footer class="container-fluid text-center">
    <p>Hubungi Kami</p>
    <p class="lead">
        <tel><i class="fa fa-phone"></i>
            <?php echo $web->telepon1 ?>
        </tel> <small>atau</small>
        <tel><i class="fa fa-phone"></i>
            <?php echo $web->telepon2 ?>
        </tel>
    </p>
    <tel><i class="fa fa-envelope" aria-hidden="true"></i>
        <?php echo $web->email ?>
    </tel>
</footer>