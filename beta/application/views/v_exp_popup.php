<html>
  <head>
    <title>Simple popup using jquery</title>

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
        width: 90% !important;
        height: 80% !important;
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
        height: 650px;
      }
      .popup-content .popup-title {
        font-size: 24px;
        border-bottom: 1px solid #e9e9e9;
        padding-bottom: 10px;
      }
      .popup-content p {
        font-size: 13px;
        text-align: justify;
      }

      /* popup window */
    </style>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      // You can place JavaScript like this
      //<![CDATA[
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

          function clearPopup() {
            $(".popup.visible")
              .addClass("transitioning")
              .removeClass("visible");
            $("html").removeClass("overlay");

            setTimeout(function () {
              $(".popup").removeClass("transitioning");
            }, 200);
          }
        });
      });
    </script>
  </head>
  <body>
    <a style="cursor: pointer" data-popup-target="#popup1"
      >Click to show popup</a
    >

    <div id="popup1" class="popup">
      <div class="popup-body">
        <div class="popup-content">
          <h1>Popup Title</h1>
          Lorem ipsum dolor sit amet, sea decore appetere te. Pro cu idque
          lucilius, eu sint ludus pri. Pro unum lucilius nominati eu, in mea
          iusto periculis. At utamur sadipscing necessitatibus cum. Libris
          ancillae sed ex, ullum erant forensibus vim at, vel libris putant
          ei.<br />

          Mei ut posse persius salutatus, duo decore dignissim et. Cibo blandit
          abhorreant et mel, quando animal facilis cu nam, pri mucius verear
          oportere in. Cu vel oportere voluptatibus. Mel graeco expetenda ei,
          alii dicat invenire duo in.<br />

          Augue menandri an eam. Ea eam suscipit consulatu. Est id primis
          explicari imperdiet, ut purto tacimates cotidieque nec. In nonumy
          adipiscing quaerendum usu. Ea nam etiam salutatus, mazim saperet qui
          ne.<br />

          Duo at impetus labitur, his vero nullam animal cu. Liber ignota
          utroque in mei, prima detraxit dissentias cum ut. An mei utamur latine
          abhorreant. Possim convenire inciderint per no, nec et liber virtute.
          Liber primis abhorreant ea mel.<br />

          Vitae omnesque ullamcorper has an, sea eruditi albucius dignissim an.
          At posse liber clita vim, vidisse albucius pri ad. Ad his labore
          eloquentiam. Senserit scribentur eloquentiam pri in, ei vim dolor
          affert. Ei porro electram usu, qui quot justo partiendo in, ei
          volutpat scripserit mea. Et verterem praesent ius, clita dictas pri
          ad.
        </div>
      </div>
    </div>

    <div class="popup-overlay">&nbsp;</div>
  </body>
</html>