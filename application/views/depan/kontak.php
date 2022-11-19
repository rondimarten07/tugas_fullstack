<style>
	#peta-google {
		height: 350px;
		width: 100%;
	}

	#peta-google iframe {
		width: 100%;
		height: 300px;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-body">

					<h2>Kontak
						<?php echo $web->judul ?>
					</h2>

					<div id="peta-google">
						<?php echo $web->peta ?>
					</div>
					<p>Alamat Kantor:
						<?php echo $web->alamat ?>
					</p>
					<p class="lead">Telepon: <tel><i class="fa fa-phone"></i>
							<?php echo $web->telepon1 ?>
						</tel> <small>atau</small>
						<tel><i class="fa fa-phone"></i>
							<?php echo $web->telepon2 ?>
						</tel>
					</p>
					<p>Email: <i class="fa fa-envelope" aria-hidden="true"></i>
						<?php echo $web->email ?>
					</p>
				</div>
			</div>
		</div>

	</div>
</div>