<div class="modal fade" id="joinModal" tabindex="-1"><div class="modal-dialog modal-dialog-centered"><div class="modal-content">
<div class="modal-header"><h5>Join FoodFusion</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<form action="<?=$base?>register.php" method="post" novalidate><div class="modal-body"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>">
<div class="row g-3"><div class="col-md-6"><label class="form-label">First Name</label><input class="form-control" name="first_name" required></div>
<div class="col-md-6"><label class="form-label">Last Name</label><input class="form-control" name="last_name" required></div>
<div class="col-12"><label class="form-label">Email</label><input class="form-control" type="email" name="email" required></div>
<div class="col-md-6"><label class="form-label">Password</label><input class="form-control" type="password" name="password" minlength="8" required></div>
<div class="col-md-6"><label class="form-label">Confirm Password</label><input class="form-control" type="password" name="confirm_password" required></div></div></div>
<div class="modal-footer"><button class="btn btn-primary w-100">Create account</button></div></form></div></div></div>
