<div class="modal modal-signin position-static d-block bg-transparent mt-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Login</h1>
      </div>

      <div class="modal-body p-5 pt-0">
        <form action="<?= BASEURL; ?>/home/login" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="username" id="username" autofocus>
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" name="password" id="password">
            <label for="password">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login</button>
        </form>
        <small class="text-muted">No have account? register <b>Now !</b></small>
        <hr class="my-4">
        <h2 class="fs-5 fw-bold mb-3">Register</h2>
        <a href="<?= BASEURL; ?>/home/register" class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
          <svg class="bi me-1" width="16" height="16"></svg>
          Register
        </a>
      </div>
    </div>
  </div>
</div>