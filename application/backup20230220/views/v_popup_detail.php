
<script type="text/javascript">
// -------------------- JS Buat Popup Form - START ------------------------------- //
$(window).load(function () {
    $(document).ready(function ($) {
        $("[data-popup-target]").click(function () {
            $("html").addClass("overlay");
            var activePopup = $(this).attr("data-popup-target");
            $(activePopup).addClass("visible");
        });

        $(document).keyup(function (e) {
            if (e.keyCode == 27 && $("html").hasClass("overlay")) {
              clearPopup();
            }
        });

        $(".popup-exit").click(function () {
            clearPopup();
        });

        $(".popup-overlay").click(function () {
            clearPopup();
        });
    });

});
// -------------------- JS Buat Popup Form - END ------------------------------- //

function clearPopup() {
    $(".popup.visible").addClass("transitioning").removeClass("visible");
    $("html").removeClass("overlay");

    setTimeout(function () {
      $(".popup").removeClass("transitioning");
    }, 200);
}
</script>

<style type="text/css">
    /* popup window */

#popup_window {
padding: 10px;
background: #267e8a;
cursor: pointer;
color: #fcfcfc;
}
.popup-overlay {
width: 100%;
height: 100%;
position: fixed;
background: rgba(196, 196, 196, 0.85);
top: 0;
left: 100%;
opacity: 0;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
-webkit-transition: opacity 0.2s ease-out;
-moz-transition: opacity 0.2s ease-out;
-ms-transition: opacity 0.2s ease-out;
-o-transition: opacity 0.2s ease-out;
transition: opacity 0.2s ease-out;
}
.overlay .popup-overlay {
opacity: 1;
left: 0;
}
.popup {
position: fixed;
top: 5%;
left: 50%;
z-index: -9999;
}
.popup .popup-body {
background: #ffffff;
background: -moz-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
background: -webkit-gradient(
  linear,
  left top,
  left bottom,
  color-stop(0%, #ffffff),
  color-stop(100%, #f7f7f7)
);
background: -webkit-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
background: -o-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
background: -ms-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
background: linear-gradient(to bottom, #ffffff 0%, #f7f7f7 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0);
opacity: 0;
min-height: 150px;
width: 800px;
margin-left: -400px;
padding: 20px;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
-webkit-transition: opacity 0.2s ease-out;
-moz-transition: opacity 0.2s ease-out;
-ms-transition: opacity 0.2s ease-out;
-o-transition: opacity 0.2s ease-out;
transition: opacity 0.2s ease-out;
position: relative;
-moz-box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
-webkit-box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
border: 1px solid #e9e9e9;
}

.popup .popup-body {
/*width: 100% !important;
height: 100% !important;*/
}

.popup.visible,
.popup.transitioning {
z-index: 9999;
}
.popup.visible .popup-body {
opacity: 1;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}
.popup .popup-exit {
cursor: pointer;
display: block;
width: 24px;
height: 24px;
position: absolute;
top: 150px;
right: 195px;
background: url("images/quit.png") no-repeat;
}
.popup .popup-content {
overflow: scroll;
height: 450px;
}
.popup-content .popup-title {
font-size: 24px;
border-bottom: 1px solid #e9e9e9;
padding-bottom: 10px;
}
.popup-content p {
font-size: 13px;
text-align: justify;
width: 800px;
}

/* view popup window */
</style>

<!-- ------------------------------------------------------ view popup window detail ------------------------------------------------------ -->
<div class="popup-overlay">&nbsp;</div>
    <div id="popup<?=$identsnya?>" class="popup">
        <div class="popup-body">
            <div class="popup-content">
              <h2>Detail Perekrutan</h2><br>
              <h5>No. Job : <?=$nomjob?></h5>
              <h5>Pekerjaan : <?=$titles?></h5>
              <table id='tbl_detail_popup<?=$identsnya?>' border=1 width="100%" class='table2'>
                    <tr>
                        <th style='display: none;' align='center'>IDPKRJ</th>
                        <th align='center'>Pekerja</th>
                        <th align='center'>Jenis Kelamin</th>
                        <th align='center'>Pengalaman</th>
                        <th align='center'>Perusahaan</th>
                        <th align='center'>Bidang</th>
                    </tr>
                    <?php
                        // print_r($data);
                        $datanya = $this->m_perekrutan->getPerekrutanWeb_detail($identsnya,1);
                        foreach($datanya as $row){
                            $idpkrj = isset($row['REC_PKRJID']) ? $row['REC_PKRJID'] : NULL;
                            $namess = isset($row['PKR_NAMESS']) ? $row['PKR_NAMESS'] : NULL;
                            $jnsklm = isset($row['JNSKLM']) ? $row['JNSKLM'] : NULL;
                            $exprnc = isset($row['PKR_EXPRNC']) ? $row['PKR_EXPRNC'] : NULL;
                            $exprpt = isset($row['PKR_EXPNPT']) ? $row['PKR_EXPNPT'] : NULL;
                            $bidang = isset($row['PKR_EXPBDG']) ? $row['PKR_EXPBDG'] : NULL;

                            // echo $namess.'~'.$jnsklm.'~'.$exprnc.'~'.$exprpt.'~'.$bidang;
                        }

                        echo "
                            <tr border=1>
                                <td style='display:none;'>$idpkrj</td>
                                <td>".ucwords(strtolower($namess))."</td>
                                <td>$jnsklm</td>
                                <td>$exprnc</td>
                                <td>$exprpt</td>
                                <td>$bidang</td>
                            </tr>
                        ";
                    ?>
                </table>
            </div>
        <div align="right"><input type="button" name="close" id="close" value="Close" onclick='clearPopup();' class="genric-btn danger small"></div>
    </div>
</div>
