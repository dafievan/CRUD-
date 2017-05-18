<?php $this->load->view('header'); ?>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
     <?php $this->load->view('nav'); ?>
    </nav>

    <div class="container">
      <?php $this->load->view($content); ?>
    </div> <!-- /container -->
<?php $this->load->view('footer'); ?>
