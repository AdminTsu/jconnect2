
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <?php
            // sediakan nohp target
            // $nohp = hp('081288853847');
            $nohp = hp('08111035838');
            // atur pesan dengan helper text urlencode
            $message = '&text=' . urlencode('Halo gan');
            // cek user_agent / device yang digunakan user
            // kalau mobil maka pakai api.whatsapp.com
            // if ($this->agent->is_mobile()){
              $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
            // tapi kalau desktop pakai web.whatsapp.com
            // }else{
            //   $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
            // }
          ?>

          <a class="btn btn-success" target="_blank" href="<?php echo $linkWA ?>">Chat WA</a>

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->