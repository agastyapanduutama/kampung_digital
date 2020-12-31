    <?php
          if ($this->session->flashdata('success')) {
            
            echo '<div class="alert alert-sm alert-success">';
            echo $this->session->flashdata('success');
            echo '</div>';

          }elseif($this->session->flashdata('failed')){
            
            echo '<div class="alert alert-sm alert-warning">';
            echo $this->session->flashdata('failed');
            echo '</div>';
         
          }
      ?>
          <div class="row"> 
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Penduduk</h4>
                  </div>
                  <div class="card-body">
                    <!-- <?= $to_pub ?> -->
                  </div>
                </div>
              </div>
            </div>
         
          </div>
          </div>
          