<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<?php foreach ($card as $i): ?>

  <div class="album py-5 ">

    <div class="container bg-light  p-5">
      <p class="h1 text-center "><?php echo $i->nombre; ?></p>
      <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8 ">
          <div class="card shadow-sm bg-dark text-white">
            <img src="<?php echo base_url(); ?>fotos/<?php echo $i->url; ?>" class="bd-placeholder-img card-img-top">
            <div class="card-body">
              <p class="card-text h1"><?php echo $i->descripcion; ?></p>
              <div class="d-flex justify-content-between align-items-center">

                
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-2"></div>
      </div>
      <h1 class="text-center text-white  rounded-3 py-3 mt-3" style="background: <?php echo $i->color; ?>;">
        <?php echo $i->name; ?>
      </h1>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'includes/footer.php'; ?>