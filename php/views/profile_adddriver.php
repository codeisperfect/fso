<?php
$locinput = function($name, $label, $type='text') {
	$id = "local1".$name;
?>
	<div class='input-field' >
		<label for="<?php echo $id; ?>" ><?php echo $label; ?></label>
		<input type='<?php echo $type; ?>' name="<?php echo $name; ?>" id="<?php echo $id; ?>" placeholder="" data-condition='simple' />
	</div>
<?php
};

dummyheight(100);
?>
<div>
	<div>
		<a onclick="hs_toggle(['addd'], 700);ms.changesym(this);" style="cursor:pointer;">
			<span id="forgot_prefix_arrow"><i class="material-icons tiny">keyboard_arrow_up</i></span>&nbsp;Add New Driver
		</a>
	</div>
	<div class='row' id="addd" style="display:none;" >
		<?php
			dummyheight(20);
		?>
		<div class='col s12 m12 l6' >
			<form onsubmit="if(form.valid.action(this)){form.req(this)};return false;" data-action='adddriver' data-res='success.push(""+data==0?"Unable to insert":"Successfully Added");div.reload($("#alldrivers")[0]);' >
				<?php
					$locinput("name", "Name");
					$locinput("phone", "Phone");
					$locinput("email", "Email");
				?>
				<button type="submit" class="btn blue waves-effect waves-light" >Add</button>
			</form>
		</div>
		<div class='col s12 m12 l6' >
			<div id="map-canvas" style=""></div>
		</div>
	</div>
	<div>
		<div class="btitle" >All Drivers</div>
		<div data-action='alldrivers' id='alldrivers' >
		<?php
			load_view("template/alldriver.php", $inp);
		?>
		</div>
	</div>
</div>