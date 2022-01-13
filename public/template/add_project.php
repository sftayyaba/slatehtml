<!-- Add Project -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addProject" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h4 class="offcanvasTitle">Add a Project</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeAddProject()">
			<span aria-hidden="true">×</span>
		</button>
	</div>
	<div class="offcanvas-body">
		<form id="frmAddProject" class="d-flex flex-column" style="height:100%">
			<div class="addProjectSteps">
				<div class="addProjectStep flex-column">
					<p class="text-sm">Project overview</p>
					<div class="form-group">
						<label for="project_name" class="fs-xs text-muted">Name *</label>
						<input type="text" class="form-control" id="project_name">
					</div>
					<div>
						<label for="project_address" class="fs-xs text-muted">Address *</label>
						<input type="text" class="form-control" id="project_address">
					</div>
					<div class="form-group">
						<label for="o" class="fs-xs text-muted">Postcode *</label>
						<input type="text" class="form-control" id="project_postcode">
					</div>
					<div class="form-group">
						<label for="project_code" class="fs-xs text-muted">Project Code *</label>
						<input type="text" class="form-control" id="project_code">
					</div>
					<div class="form-group">
						<label for="start_date" class="fs-xs text-muted">Start Date *</label>
						<div class="input-group">
							<input type="password" class="form-control" id="start_date">
							<span class="input-group-text"><i class="far fa-calendar"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label for="end_date" class="fs-xs text-muted">End Date *</label>
						<div class="input-group">
							<input type="password" class="form-control" id="end_date">
							<span class="input-group-text"><i class="far fa-calendar"></i></span>
						</div>
					</div>
				</div>
				<div class="addProjectStep flex-column">
					<p class="text-sm">Project details</p>
					<div class="form-group">
						<label for="name" class="fs-xs text-muted">Portfolio *</label>
						<select class="form-control"></select>
					</div>
					<div class="form-group">
						<label for="name" class="fs-xs text-muted">Template *</label>
						<select class="form-control"></select>
					</div>
					<div class="form-group">
						<label for="name" class="fs-xs text-muted">Select a teammate *</label>
						<select class="form-control"></select>
					</div>
					<ul style="list-style:none;padding-inline-start: 0;">
						<li><a href="#" class="text-sm text-dark"><b>Add Teammate</b></a></li>
						<li><a href="#" id="btnCreateTeammate" class="text-sm text-dark"><b>Create a New Teammate</b></a></li>
						<li><a href="#" class="text-sm text-dark"><b>Add More Details</b></a></li>
					</ul>
				</div>
			</div>
			<div class="mt-auto">
				<div class="text-center">
					<ul class="offcanvasSteps">
						<li><button class="offcanvasStepsPage is-active" type="button" ></button></li>
						<li><button class="offcanvasStepsPage" type="button"></button></li>
					</ul>
				</div>
				<div class="row">
					<div class="col text-center">
						<button type="button" id="btnCancel" class="btn btn-bordered w-100" onclick="closeAddProject()">Cancel</button>
						<button type="button" id="btnBack" class="btn btn-bordered w-100 d-none">Back</button>
					</div>
					<div class="col text-center">
						<button type="button" id="btnNext" class="btn btn-primary w-100">Next</button>
						<button type="button" id="btnCreate" class="btn btn-primary w-100 d-none">Create</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Add Project -->