<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<div class="b-example-divider py-3"></div>

<div class="container col-xl-10 col-xxl-8 px-4 py-5 ">
  <div class="row align-items-center g-lg-5 py-5 bg-light">
    <div class="col-lg-5 text-center text-lg-start">
      <img src="fotos/logo.png" class="rounded-3" >
      <h1 class="display-4 fw-bold lh-1 mb-3">Formulario para agregar nueva Imagen</h1>
      <p class="col-lg-10 fs-4">Formulario para añadir imagenes a la galeria por favor rellena todos los campos requeridos.</p>
    </div>
    <div class="col-md-10 mx-auto col-lg-7">
      <form class="p-4 p-md-5 border rounded-3 " method="post" action="addImg.php" enctype="multipart/form-data">

        <?php if (isset($execute)): ?>
           <div class="alert alert-info alert-dismissible fade show" role="alert">
                     se agrego satisfactoriamente la imagen <a href="index.php" class="alert-link">link para ver los cambios</a>.
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
        <?php endif ?>
        <div class="form-floating mb-3">
          <input type="file" name="imagen" class="form-control" id="floatingFile" placeholder="imagen" required>
          <label for="floatingFile">Elige  una imagen</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" name="nombre" class="form-control" id="floatingName" placeholder="name" required>
          <label for="floatingName">Nombre (corto)</label>
        </div>

        <div class="form mb-3">
          <!-- <label for="floatingDescripcion"></label> -->
          <textarea class="form-control" name="descripcion" id="floatingDescripcion" placeholder="Descripcion (Agrega una descripcion detallada y larga)" required></textarea>
        </div>
        <div class="form-floating mb-3">
          <select name="categoria" class="form-control" id="floatingCategoria" placeholder="categoria" required>
            <?php foreach ($cat as $c): ?>
              <option value="<?php echo $c->idcategoria; ?>"><?php echo $c->name; ?></option>
            <?php endforeach; ?>
          </select>
          
          <label for="floatingCategoria">Categoria</label>
        </div>
        <!-- <div class="form-floating mb-3">
          <input type="color" name="color" class="form-control" id="floatingColor" placeholder="Color">
          <label for="floatingColor">Color de la categoria</label>
        </div> -->

        <button class="w-100 btn btn-lg btn-dark" type="submit">Guardar</button>
        <hr class="my-4">
        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
      </form>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>