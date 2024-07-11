<!-- Password Panel-->
<div id="passwordPanel" class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-1">Change Password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"
							onclick="closePassword()">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-3 text-center">
								<p class="my-1 fs-sm">Password</p>
							</div>
							<div class="col-9">
								<form>
									<div class="form-group">
										<label for="current_password" class="fs-xs text-muted">Current Password</label>
										<div class="input-group">
											<input type="password" class="form-control" id="current_password">
											<span class="input-group-text"><i class="fas fa-eye"></i></span>
										</div>
									</div>
									<div class="form-group">
										<label for="new_password" class="fs-xs text-muted">New Password</label>
										<div class="input-group">
											<input type="password" class="form-control" id="new_password">
											<span class="input-group-text"><i class="fas fa-eye"></i></span>
										</div>
									</div>
									<div class="form-group">
										<label for="confirm_password" class="fs-xs text-muted">New Password</label>
										<div class="input-group">
											<input type="password" class="form-control" id="confirm_password">
											<span class="input-group-text"><i class="fas fa-eye"></i></span>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary fs-sm" data-dismiss="modal"
							onclick="closePassword()">Close</button>
						<button type="button" class="btn btn-primary bg-dark-75 text-white fs-sm"
							onclick="closePassword()">Save</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Password Panel-->