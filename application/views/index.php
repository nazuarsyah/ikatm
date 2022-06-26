<!DOCTYPE html>
<html lang="en">
<!--header-->
<!--end of header-->
<?php $this->load->view('menu.php'); ?>
<!-- Navigation -->
<!--end of navigation-->
<style type="text/css">
  .hakko {
    background-color: #272626;
    color: #bebebe;
    font-family: monospace;
    font-size: 20px;
    font-style: italic;
  }
</style>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <!--placehold.it/1900x1080')">-->
      <?php foreach ($headers as $hed) { ?>
        <div class="<?php echo $hed['nama_class'] ?>" style="background-image: url('assets/images/header/<?php echo $hed['gambar']; ?>')">
          <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
          </div>
        </div>
      <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</header>
<?php foreach ($texts as $text) { ?>
  <marquee class="hakko" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><?php echo $text['isi_text']; ?></marquee>
<?php } ?>
<!-- Page Content -->
<div class="container">
  <!--Produk-->
  <div class="card my-4">
    <h5 class="card-header card text-white bg-primary">PRODUK</h5>
    <div class="card-body">
      <?php $this->load->view('produk.php'); ?>
      <a href="<?php echo base_url() . 'all_produk' ?>"><button type="button" class="btn btn-primary">Semua Produk >></button></a>
    </div>
  </div>
  <!--Akhir Produk-->


</div>
<!-- /.container -->

<!-- Footer -->
<?php $this->load->view('footer.php'); ?>
<!--End of footer-->

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url() . "assets/vendor/jquery/jquery.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/vendor/bootstrap/js/bootstrap.bundle.min.js" ?>"></script>

</body>

</html>