<div id="printableArea">
<?php
for ($i=0; $i < 36 ; $i++) { 
?>
	<img src="<?php echo base_url('Barcode/barcode_generator')?>/Code39/40/EDT45SGHJKLE/true"/>
<?php
}
?>
</div>

<div style="float:right;">
	<a  class="btn btn-info" href="#" onclick="printDiv('printableArea')">Print</a>
	<a  class="btn btn-danger" href="<?php echo base_url('');?>">CANCEL</a>
</div>
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
	// document.body.style.marginTop="-45px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>