<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

  <div class="album py-5 ">
    <div class="container p-5 bg-light">
      <h3 class="py-2 text-center">Selecciona una categoria:
        <?php foreach ($cat as $c): ?>
          <a href="index.php?c=<?php echo $c->idcategoria; ?>" class="btn text-white" style="background: <?php echo $c->color; ?>;"><?php echo $c->name; ?></a>
        <?php endforeach ?>
      </h3>
    </div>
    <div class="container bg-dark p-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($card as $i): ?>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img src="<?php echo base_url(); ?>fotos/<?php echo $i->url; ?>" class="bd-placeholder-img card-img-top">
              <div class="card-body">
                <p class="card-text"><?php echo $i->nombre; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="info.php?id=<?php echo $i->id; ?>" class="btn btn-sx btn-outline-dark">Mas info...</a>
                  </div>
                  <div class="badge" style="background: <?php echo $i->color; ?>;">
                    <?php echo $i->name; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  
<?php include 'includes/footer.php'; ?>