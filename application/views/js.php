<script>
	function jvCancel(pagenya){
		self.location.replace(pagenya);
	}
	function jvSave(){
		if(confirm('Simpan data?')){
			document.formgw.submit();
		}
	}
	function openCenterWin(url, height, width, name, parms){
		$('#printanimasi').css('display','none');
		var left = Math.floor( (screen.width - width) / 2);
		var top = Math.floor( (screen.height - height) / 3);
		var winParms = 'top=' + top + ',left=' + left + ',height=' + height + ',width=' + width;
		if (parms) { winParms += ',' + parms; }
		var win = window.open(url, name, winParms);
		if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
		return ;
	}	
</script>
<script src="<?=base_url(JS."jquery.min.js");?>"></script>
<!-- <script src="<?=base_url(JS."jquery.mobile-1.4.5.min.js");?>"></script> -->
<script src="<?=base_url(JS."bootstrap.min.js");?>"></script>

<!--======= start :: jqxwidget loading -->
<script src="<?=base_url(JS."jqxwidgets/jqxcore.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxtabs.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxdropdownbutton.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxdata.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxdata.export.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxwindow.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxtree.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxlayout.js");?>"></script>	
<script src="<?=base_url(JS."jqxwidgets/jqxribbon.js");?>"></script>
<!--===================== start :: grid related -->
<script src="<?=base_url(JS."jqxwidgets/jqxdatatable.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxtreegrid.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.export.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.filter.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.columnsresize.js")?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.grouping.js")?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.selection.js")?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.sort.js")?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.pager.js")?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxgrid.edit.js")?>"></script>

<!--===================== end :: grid related -->
<script src="<?=base_url(JS."jqxwidgets/jqxinput.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxscrollbar.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxbuttons.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxtoolbar.js");?>"></script>	
<script src="<?=base_url(JS."jqxwidgets/jqxdate.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxdatetimeinput.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxnumberinput.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxcalendar.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxmenu.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxdropdownlist.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxlistbox.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxcombobox.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxvalidator.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxsplitter.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/jqxcheckbox.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url(JS."jqxwidgets/globalization/globalize.js");?>"></script>
<script src="<?=base_url(JS."jqxwidgets/globalization/globalize.culture.in-ID.js");?>"></script>

<script src="<?php echo base_url(JS."jquery.MyThumbnail.js");?>"></script>
<script src="<?php echo base_url(JS."magnific-popup.js");?>"></script>
