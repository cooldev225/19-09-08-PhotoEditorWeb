<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>
<!-- Wrap -->
<div id="wrap">
<?php $this->load->view('_partials/header-01'); ?>
<?php $this->load->view($inner_view); ?>
</div>
<?php $this->load->view('_partials/footer-01'); ?>
</body>