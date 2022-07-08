<div class="container py-5">
<div class="py-5">
  <div class="py-5">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php echo form_open("users/save") ?>
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="username" name="username" placeholder="Masukkan Username Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" placeholder="Masukkan Password Anda" type="password" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="created_at" class="col-4 col-form-label">Tanggal Buat</label> 
    <div class="col-8">
      <input id="created_at" name="created_at" placeholder="" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_login" class="col-4 col-form-label">Terakhir Masuk</label> 
    <div class="col-8">
      <input id="last_login" name="last_login" placeholder="Masukkan Email Anda" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-4 col-form-label">Status</label> 
    <div class="col-8">
      <input id="status" name="status" placeholder="Masukkan Status Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="role" class="col-4 col-form-label">Role</label> 
    <div class="col-8">
      <select id="role" name="role" class="custom-select">
        <option value="public">Public</option>
        <option value="admin">Administrator</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success btn-lg active">Submit</button>
    </div>
    <?php echo form_close()?>
  </div>
</div>
</div>
</div>
</div>