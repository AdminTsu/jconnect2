<?
$txtSearch = $this->input->post('txtSearch');
$segment1 = $this->uri->segment(1);
?>
<script>
  $(document).ready(function(e){
      $('.search-panel .dropdown-menu').find('a').click(function(e) {
          e.preventDefault();
          var param = $(this).attr("href").replace("#","");
          var concept = $(this).text();
          $('.search-panel span#search_concept').text(concept);
          $('.input-group #search_param').val(param);
      });
      //$('#tabs').tabs({ fx: { opacity: 'toggle' } });
      //$('#tabs').tabs();
  });
  
  function jvCari(){
    //alert($('.search-panel span#search_concept').text());

      //var param = $('.search-panel span#search_concept').attr("href").replace("#","");
      var kategori = $('.search-panel span#search_concept').text();
      if (kategori=="Pencarian") {
        alert('Pilih Kategori Pencarian!');
        return false;
      }
      var txtsearch = $('#txtSearch').val();
      $('[name=\"txtcari\"]').val(txtsearch);
      $('[name=\"txtkategori\"]').val(kategori);
      document.frmCari.submit();
    //alert('detanto');
  }

  function jvShowfile(type,idents){
    if(type==1){
      type='pdf'
    }
    var param = {};
    param['type'] = type;
    param['idents'] = idents;
    $.post('/document/file',param,function(data){
      if(data!='false'){
        if(type=='pdf'){
          var newWindow = window.open(data, '_blank');
          newWindow.focus();
        }else{
          window.location.href = data;    
        }
      }else{
        alert('Berkas tidak ditemukan!');
      }
      
    });
  }  
</script>
<?
$top = 55;
if ($this->viewerpage=='admin'){
  if($this->session->userdata('USR_LAYOUT')=="samping"){
    $top = 5;
  }
}
?>
  <div class="container" style = 'padding: <?=$top?>px 10px 5px 10px; width:100%;height: 100%'>
    <div id=contentBody style = 'width:100%;height: 100%'>
      <div style="height:40px"><?=$breadcrumb?></div>
      <div style="width:100%;height:93%">
      <?=$content?>
      </div>
    </div>  
  </div>
  <form name=frmCari class="form-horizontal" method=post action="/cari/dokumen">
    <input type=hidden name=txtcari>
    <input type=hidden name=txtkategori>
  </form>  

