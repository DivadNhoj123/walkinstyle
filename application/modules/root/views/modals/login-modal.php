<div class="modal fade" id="login-modal">
	<div class="modal-dialog modal-md">
		<div class="modal-body">
			<style>
				.card {
					background-color: #0a0d36;
					/* Adjusted color */
				}

				.modal-content .form-control {
					border-radius: 30px;
					padding: 15px 25px;
					border: 1px solid #eee;
					width: 100%;
					/* width - sum of horizontal padding */
					margin: 0 auto;
					/* Center align */
					margin-bottom: 20px;
					font-size: 16px;
				}

				.modal-content .primary-btn {
					border-radius: 30px;
					padding: 15px 25px;
					font-size: 16px;
					background-color: #ffbc59;
					border: none;
					color: #fff;
					transition: all 0.3s ease;
					width: calc(100% - 50px);
					/* width - sum of horizontal padding */
					margin: 0 auto;
					/* Center align */
				}
			</style>
			<div class="modal-content">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<i class="ti-close text-warning fw-bold"></i>
								</button>
								<h1 class="fw-bold text-center mt-5 text-white">
									WALK <strong class="text-warning">N</strong> STYLE
								</h1>
								<div class="col-md-12">
									<h3 class="text-white text-center">Log in to enter</h3>
									<form class="row login_form" action="<?= base_url('root/login_process/') ?>" method="post">
										<div class="col-md-12 form-group">
											<input type="email" class="form-control" placeholder="Email" name="email" required>
										</div>
										<div class="col-md-12 form-group">
											<input type="password" class="form-control" placeholder="Password" name="password" required>
										</div>
								</div>
								<div class="text-center ">
									<button type="submit" value="submit" class="primary-btn">Log In</button>
								</div>
								<p class="col text-center text-white">Don't have an account?<a href="" class="text-warning" data-toggle="modal" data-target="#register-modal"> Register Here</a></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>