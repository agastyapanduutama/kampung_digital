    <?php
    if ($this->session->flashdata('success')) {

      echo '<div class="alert alert-sm alert-success">';
      echo $this->session->flashdata('success');
      echo '</div>';
    } elseif ($this->session->flashdata('failed')) {

      echo '<div class="alert alert-sm alert-warning">';
      echo $this->session->flashdata('failed');
      echo '</div>';
    }
    ?>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get('t_penduduk')->num_rows();
              } else {
                echo $this->db->get_where('t_penduduk', ['warga' => $_SESSION['rt']])->num_rows();
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php
        if ($this->session->level != '4'):
      ?>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 1</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '1'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 2</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '2'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 3</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '3'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 4</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '4'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 5</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '5'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 6</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '6'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 7</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '7'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Penduduk RT 8</h4>
            </div>
            <div class="card-body">
              <?php
              if ($this->session->level != '4') {
                echo $data = $this->db->get_where('t_penduduk', ['warga' => '8'])->num_rows();
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php endif ?>
    </div>