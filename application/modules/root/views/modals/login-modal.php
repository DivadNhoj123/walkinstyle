<div class="modal fade" id="login-modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-body">
				<div class="modal-content">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="login_box_img">
										<img class="img-fluid" src="<?= base_url('assets/landingTemplate'); ?>/img/banner/banner-img.png" style="height: 400px; width:400px;">

									</div>
								</div>
								<div class="col-lg-6">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i class="ti-close text-warning fw-bold"></i>
									</button>
									<h1 class="fw-bold text-center mt-5"> WALK <strong class="text-warning">N</strong> STYLE</h1>
									<div class="login_form_inner">
										<h3>Log in to enter</h3>
										<form class="row login_form" action="<?= base_url('root/login_process/') ?>" method="post">"
											<div class="col-md-12 form-group">
												<input type="email" class="form-control" placeholder="Email" name="email" required>
											</div>
											<div class="col-md-12 form-group">
												<input type="password" class="form-control" placeholder="Password" name="password" required>
											</div>
											<div class="col-md-12 form-group">
												<div class="creat_account">
													<input type="checkbox" id="f-option2" name="selector">
													<label for="f-option2">Keep me logged in</label>
												</div>
											</div>
											<div class="col-md-12 form-group">
												<button type="submit" value="submit" class="primary-btn">Log In</button>
											</div>
											<p class=" col text-center">Dont't have account?<a href="" class="text-warning" data-toggle="modal" data-target="#register-modal" > Register Here</a> </p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    