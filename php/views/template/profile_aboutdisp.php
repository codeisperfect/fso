		<div class="row">
			<div class="col s12">
				<h6 class="teal-text text-darken-1"><i class="material-icons left">perm_identity</i>Basic</h6>
			</div>
		</div>
		<div class="row">
			<div class="col s12 l6">
				<div class="row">
					<div class="col s12">
						Name :
						<span class="grey-text text-darken-1">
							<?php echo Fun::smilymsg($name); ?>
						</span>
					</div>
				</div>
				<?php
					if($ismea) {
				?>
				<div class="row">
					<div class="col s12">
						Email :
						<span class="grey-text text-darken-1">
							<?php echo $email; ?>
						</span>
					</div>
				</div>
				<?php
					}
				?>
				<div class="row">
					<div class="col s12">
						Birthday :
						<span class="grey-text text-darken-1">
							<?php echo $dob; ?>
						</span>
					</div>
				</div>
			</div>
			<div class="col s12 l6">
				<div class="row">
					<div class="col s12">
						Address :<br>
						<span class="grey-text text-darken-1">
							<?php echo Fun::smilymsg($address); ?>
						</span>
					</div>
				</div>
				<?php
					if($ismea) {
				?>
				<div class="row">
					<div class="col s12">
						Mobile Number :
						<span class="grey-text text-darken-1">
							<?php echo Fun::smilymsg($phone); ?>
						</span>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>

