<!-- Profile Panel-->
<div id="profilePanel" class="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title mt-1">Profile Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"
					onclick="closeProfile()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-3 text-center">
						<div class="mb-0">
							<img class="img-avatar img-avatar48 img-avatar-thumb"
								src="https://github.com/mdo.png" alt="">
						</div>
						<p class="my-0"><a class="fw-semibold text-dark fs-xs" href="javascript:void(0)">Upload
								Picture</a>
						</p>
						<p class="my-0"><a class="fw-semibold text-dark fs-xs" href="javascript:void(0)"
								id="btnChangepassword">Change
								Password</a>
						</p>
					</div>
					<div class="col-9">
						<div class="row">
							<div class="col-4">
								<p class="fs-xs mb-1 text-muted">First Name</p>
								<p class="fs-sm mt-0">Senthill</p>
							</div>
							<div class="col-4">
								<p class="fs-xs mb-1 text-muted">Last Name</p>
								<p class="fs-sm mt-0">Kumar</p>
							</div>
							<div class="col-4">
								<p class="fs-xs mb-1 text-muted">Job Title</p>
								<p class="fs-sm mt-0">CTO</p>
							</div>
						</div>
						<form>
							<div class="form-group">
								<label for="phone_number" class="fs-xs text-muted">Phone Number</label>
								<input type="text" class="form-control" id="phone_number">
							</div>
							<div>
								<p class="fs-xs text-muted mb-1">Primary Email</p>
								<p class="text-muted my-1 fs-sm">senthil.kumar@slate.ai</p>
								<p class="fs-xs fw-semibold mt-1"><a class="text-dark">Add secondary email</a>
								</p>
							</div>
							<div class="form-group">
								<label for="address" class="fs-xs text-muted">Address</label>
								<input type="text" class="form-control" id="address">
							</div>
							<div class="form-group">
								<label for="postcode" class="fs-xs text-muted">Postcode</label>
								<input type="text" class="form-control" id="postcode">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary fs-sm" data-dismiss="modal"
					onclick="closeProfile()">Close</button>
				<button type="button" class="btn btn-primary bg-dark-75 text-white fs-sm"
					onclick="closeProfile()">Save</button>
			</div>
		</div>
	</div>
</div>
<!-- End Profile Panel-->