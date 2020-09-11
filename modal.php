<div class="modal fade" id="login_admin" tabindex="-1" role="dialog">
	<!-- Modal1 -->
	<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content" style="background:url(images/login_bg.jpg);">
				<div class="modal-header">
				<h3>Silahkan Log-in Admin</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
			<div class="modal-body">
				<form role="form" action="cek_login.php" method="POST">	
					<div class="form-group">
						<input class="form-control" type="text" name="username" placeholder="Username" required="" />
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Password" required="" />
					</div>
			<div class="modal-footer">
				<button type="submit" name="login" class="btn btn-info" >Login</button>
				<button type="reset" class="btn btn-danger" >Reset</button>
			</div>
		</form>
		</div>
	</div>
</div>