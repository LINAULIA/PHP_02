<?php
if ($_POST) {
    $nama = $_POST['nama'];
    echo "<div class=\"status-box\">
      <div class=\"isi\">
        $nama
      </div>
    </div>";
    $alamat = $_POST['alamat'];
    echo "<div class=\"status-box\">
      <div class=\"isi\">
        $alamat
      </div>
    </div>";
    $tlp = $_POST['tlp'];
    echo "<div class=\"status-box\">
      <div class=\"isi\">
        $tlp
      </div>
    </div>";
    $jk = $_POST['jk'];
    echo "<div class=\"status-box\">
      <div class=\"isi\">
        $jk
      </div>
    </div>";
}
