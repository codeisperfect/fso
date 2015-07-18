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
		<a onclick="hs_toggle(['allocate'], 700);ms.changesym(this);" style="cursor:pointer;">
			<span id="forgot_prefix_arrow"><i class="material-icons tiny">keyboard_arrow_up</i></span>&nbsp;Allocate New Driver
		</a>
	</div>
	<div class='row' id="allocate" style="display:non;" >
		<?php
			dummyheight(20);
		?>
		<div class='col s12 m12 l6' >
			<form onsubmit="if(form.valid.action(this)){form.req(this)};return false;" data-action='allocate' data-res='div.reload($("#allalloc")[0]);' >
				<select name="did" class="browser-default select2" style="width:100%;margin-bottom:20px;" data-condition='simple' >
					<?php
						disp_olist($drivers_select, array("selectalltext" => "Select Driver"));
					?>
				</select>
				<select name="rid" class="browser-default" style="margin-bottom:20px;" data-condition='simple' >
					<?php
						disp_olist($region, array("selectalltext" => "Select Region"));
					?>
				</select>
				<?php
					$locinput("fromloc", "From");
					$locinput("toloc", "To");
				?>
				<button type="submit" class="btn blue waves-effect waves-light" >Add</button>
			</form>
		</div>
		<div class='col s12 m12 l6' >
			<div id="map-canvas" style=""></div>
		</div>
	</div>
	<div>
		<div class="btitle" >All Allocations</div>
		<div data-action='allalloc' id="allalloc" >
		<?php
			load_view("template/allalloc.php", $inp);
		?>
		</div>
	</div>
</div>