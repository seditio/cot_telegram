<!-- BEGIN: MAIN -->
<form class="telegram" method="post" action="index.php?r=telegram&a=send">
	<div class="mb-2">
		<label class="form-label text-danger small mb-1 opacity-75" for="{PHP.L.Username}">{PHP.L.Username}:</label>
		<input type="text" name="{PHP.L.Username}" class="form-control" minlength="3" maxlength="25" required />
	</div>

	<div class="mb-2">
		<label class="form-label text-secondary small mb-1 opacity-75" for="{PHP.L.telegram_phone}">{PHP.L.telegram_phone}:</label>
		<input type="text" name="{PHP.L.telegram_phone}" class="form-control" />
	</div>

	<div class="mb-2">
		<label class="form-label text-danger small mb-1 opacity-75" for="{PHP.L.Email}">{PHP.L.Email}:</label>
		<input type="email" name="{PHP.L.Email}" class="form-control" pattern="^\S+@\S+\.\S+$" required />
	</div>

	<div class="mb-3">
		<label class="form-label text-danger small mb-1 opacity-75" for="{PHP.L.Message}">{PHP.L.Message}:</label>
		<textarea class="form-control" name="{PHP.L.Message}" rows="6" cols="36" minlength="3" maxlength="500" required></textarea>
	</div>

	<div class="d-flex gap-2">
		<button type="submit" class="btn btn-success btn-sm">{PHP.L.Submit}</button>
		<button type="reset" class="btn btn-warning btn-sm">{PHP.L.Reset}</button>
	</div>

	<div class="alert alert-success mt-2" style="display: none;"></div>
	<div class="alert alert-danger mt-2" style="display: none;"></div>
</form>
<!-- END: MAIN -->
