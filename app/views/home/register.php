<?= Flasher::Flash(); ?>
<div class="modal modal-signin position-static d-block bg-transparent mt-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Register</h1>
      </div>

      <div class="modal-body p-5 pt-0">
        <form action="<?= BASEURL; ?>/home/proses_register" method="POST">
          <input type="hidden" name="keterangan" id="keterangan" value="tidak aktif">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="nama_user" id="nama_user">
            <label for="nama_user">Nama</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="username" id="username">
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" name="email" id="email">
            <label for="email">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" name="password" id="password">
            <label for="password">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Register</button>
        </form>
        <small class="text-muted">Already have account? Login <b>Now !</b></small>
        <hr class="my-4">
        <h2 class="fs-5 fw-bold mb-3">Login</h2>
        <a href="<?= BASEURL; ?>/home/login" class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
          <svg class="bi me-1" width="16" height="16"></svg>
          Login
        </a>
      </div>
    </div>
  </div>
</div>