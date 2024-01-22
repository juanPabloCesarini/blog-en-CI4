<?= $this->extend('Front/layout/main') ?>
<?= $this->section('title') ?>
Registro
<?= $this->endSection() ?>
<?= $this->section('css') ?>

<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="section">
     <h1 class="title">Registrate ahora!!</h1>
     <h2 class="subtitle">
          Ingresá unos pocos datos y ya puedes publicar
     </h2>
     <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
               <input name="name" class="input" type="text" placeholder="Nombre">
          </div>
     </div>
     <div class="field">
          <label class="label">Apellido</label>
          <div class="control">
               <input name="surname" class="input" type="text" placeholder="Apellido">
          </div>
     </div>


     <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
               <input name="email" class="input is-danger" type="email" placeholder="Email" value="hello@">
               <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
               </span>
               <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
               </span>
          </div>
          <p class="help is-danger">This email is invalid</p>
     </div>
     <div class="field">
          <label class="label">Contraseña</label>
          <div class="control">
               <input name="password" class="input" type="password" placeholder="Contraseña">
          </div>
     </div>
     <div class="field">
          <label class="label">Cconfirmar contraseña</label>
          <div class="control">
               <input name="password2" class="input" type="password" placeholder="Repetir contraseña">
          </div>
     </div>
     <div class="field">
          <label class="label">País</label>
          <div class="control">
               <div class="select">
                    <select name="id_country">
                         <option>Select dropdown</option>
                         <option>With options</option>
                    </select>
               </div>
          </div>
     </div>




     <div class="field is-grouped">
          <div class="control">
               <button class="button is-success">Registrarse!</button>
          </div>

     </div>
</section>
<?= $this->endSection() ?>