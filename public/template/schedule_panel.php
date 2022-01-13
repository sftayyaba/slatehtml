<div id="gantt_task_panel" class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="visibility: hidden;" aria-hidden="true">
	<div class="offcanvas-body small">
		<div class="row">
			<div class="col-15 text-center border-end">
				<div class="row row-cols-2 g-3 mt-1 mb-3 align-items-center">
					<div class="col">
						<button class="btn btn-primary">Start</button>
					</div>
					<div class="col">
						<button class="btn btn-warning  btn-rounded">C</button>
					</div>
					<div class="col">
						<button class="btn btn-primary btn-rounded"><i class="fas fa-plus" style="font-size: 12px;"></i></button>
					</div>
					<div class="col">
						<button class="btn btn-outline-info btn-rounded" style="padding:0.375rem 0.55rem">
							<svg width="16" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M19 5V2H17V5H14V7H17V10H19V7H22V5H19ZM8 8C10.21 8 12 6.21 12 4C12 1.79 10.21 0 8 0C5.79 0 4 1.79 4 4C4 6.21 5.79 8 8 8ZM8 2C9.1 2 10 2.9 10 4C10 5.1 9.1 6 8 6C6.9 6 6 5.1 6 4C6 2.9 6.9 2 8 2ZM14.39 10.56C12.71 9.7 10.53 9 8 9C5.47 9 3.29 9.7 1.61 10.56C0.61 11.07 0 12.1 0 13.22V16H16V13.22C16 12.1 15.39 11.07 14.39 10.56ZM14 14H2V13.22C2 12.84 2.2 12.5 2.52 12.34C3.71 11.73 5.63 11 8 11C10.37 11 12.29 11.73 13.48 12.34C13.8 12.5 14 12.84 14 13.22V14Z" fill="#B7C0C6"/>
							</svg>	
						</button>
					</div>
				</div>
			</div>
			<div class="col-3 border-end">
				<div class="row row-cols-2 g-3 align-items-center">
					<div class="col">
						<labe class="form-label">Status</label>
  						<select class="form-select">
							  <option>To Do</option>
						</select>
					</div>
					<div class="col">
						<label class="form-label">Predecessors</label>
  						<input type="text" class="form-control" >
					</div>
					<div class="col mt-0">
						<label class="form-label">Recipe</label>
						<input type="text" class="form-control" >
					</div>
					<div class="col mt-0">
						<label class="form-label">Sucessors</label>
  						<input type="text" class="form-control" >
					</div>
				</div>
			</div>
			<div class="col-15 border-end">
				<label class="form-label">Materials</label>
				<textarea class="form-control" rows="5">Material & Quantity</textarea>
			</div>
			<div class="col-2 border-end">
				<label class="form-label">Forms</label>
				<div class="row mb-1 g-3 align-items-center">
					<div class="col">
						<p>1. RFI #</p>
					</div>
					<div class="col">
						<select class="form-select">
							<option>Status</option>
						</select>
					</div>
				</div>
				<div class="row mb-1 g-3 align-items-center">
					<div class="col">
						<p>2. Pre-inspection #</p>
					</div>
					<div class="col">
						<select class="form-select">
							<option>Status</option>
						</select>
					</div>
				</div>
				<div class="row mb-1 g-3 align-items-center">
					<div class="col">
						<p>3. 3. Inspection #</p>
					</div>
					<div class="col">
						<select class="form-select">
							<option>Status</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-2 border-end">
				<label class="form-label">Constraints</label>
				<div class="row mb-1 g-3 align-items-center">
					<div class="col">
						<p>1. Constraint</p>
					</div>
					<div class="col">
						<select class="form-select">
							<option>Status</option>
						</select>
					</div>
				</div>
				<div class="row mb-1 g-3 align-items-center">
					<div class="col">
						<p>2. Constraint</p>
					</div>
					<div class="col">
						<select class="form-select">
							<option>Status</option>
						</select>
					</div>
				</div>
				<div class="row g-3 align-items-center">
					<div class="col">
						<p>3. Constraint</p>
					</div>
					<div class="col">
						<select class="form-select">
							<option>Status</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-1 border-end">
				<label class="form-label">Cost</label>
				<p>Commitment</p>
				<input type="text" class="form-control text-left" value="$" style="padding-left: 0.2rem;">
				<p>Payout</p>
				<input type="text" class="form-control text-left" value="$" style="padding-left: 0.2rem;">
			</div>
			<div class="col-1">
				<label class="form-label">Carbon</label>
				<textarea class="form-control" rows="5"></textarea>
				<p class="text-center">Units</p>
			</div>
		</div>
	</div>
</div>