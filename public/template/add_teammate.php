<!-- Add Project -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addTeammate" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h4 class="offcanvasTitle">Create a new Teammate</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeAddTeammate()">
			<span aria-hidden="true">×</span>
		</button>
	</div>
	<div class="offcanvas-body">
		<form id="frmAddTeammate" class="d-flex flex-column" style="height:100%">
			<div class="form-group">
				<label for="first_name" class="fs-xs text-muted">Email *</label>
				<select class="form-select">
					<option></option>
					<option>email@email.com</option>
				</select>
			</div>		
			<div class="form-group">
				<label for="first_name" class="fs-xs text-muted">First Name *</label>
				<input type="text" class="form-control" id="first_name">
			</div>
			<div>
			<label for="last_name" class="fs-xs text-muted">Last Name *</label>
				<input type="text" class="form-control" id="last_name">
			</div>
			<div class="form-group">
				<label for="job_title" class="fs-xs text-muted">Job Title *</label>
				<input type="text" class="form-control" id="job_title">
			</div>
			<div class="form-group">
				<label for="project_code" class="fs-xs text-muted">Slate Role</label>
				<select class="form-control"></select>
			</div>
			<div class="form-group">
				<label for="start_date" class="fs-xs text-muted">Project</label>
				<select class="form-select">
					<option></option>
					<option>Project 1</option>
				</select>
			</div>
			<ul style="list-style:none;padding-inline-start: 0;">
				<li><a href="#" class="text-sm text-dark"><b>Add new project</b></a></li>
			</ul>
			<div class="form-group">
				<label for="end_date" class="fs-xs text-muted">Select Company</label>
				<select class="form-select">
					<option></option>
					<option>Company 1</option>
				</select>
			</div>
			<ul style="list-style:none;padding-inline-start: 0;">
				<li><a href="#" class="text-sm text-dark"><b>Add new company</b></a></li>
			</ul>
			<div class="mt-auto">
				<div class="row">
					<div class="col text-center">
						<button type="button" class="btn btn-bordered w-100" onclick="closeAddTeammate()">Cancel</button>
					</div>
					<div class="col text-center">
						<button type="button" id="btnCreateTeammate" class="btn btn-primary w-100">Create Teammate</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Add Project -->