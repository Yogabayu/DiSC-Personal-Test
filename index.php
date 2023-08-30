<?php

include 'inc/db.php';
//-- query data from database
$sql = 'SELECT * FROM tbl_personalities ORDER BY id ASC';
$result = $db->query($sql);
$x = array();
$no = 0;
while ($row = $result->fetch_object()) {
  if ($no != $row->no) {
    $no = $row->no;
    $x[$no] = array();
  }
  $x[$no][] = $row;
}
$data = array();
foreach ($x as $dt) {
  foreach ($dt as $d) {
    $data[] = $d;
  }
}
?>
<doctype html>
  <html>

  <head>
    <title>DISC Personality Test</title>
    <meta http-equiv="expires" content="<?php echo date('r'); ?>" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel='stylesheet' href='css/disc.css' />
  </head>

  <body>
    <header>
      <h1>:: DISC Personality Testv2</h1>
    </header>
    <div id='container'>
      <div class='info-box'>
        <b>INSTRUKSI</b> : Setiap nomor di bawah ini memuat 4 (empat) kalimat. Tugas anda adalah : <br />
        <ol>
          <li>Beri tanda/cek pada kolom di bawah huruf [P] di samping kalimat yang PALING menggambarkan diri anda</li>
          <li>Beri tanda/cek pada kolom di bawah huruf [K] di samping kalimat yang PALING TIDAK menggambarkan diri anda
          </li>
        </ol>
        <br />
        <b>PERHATIKAN</b> : Setiap nomor hanya ada 1 (satu) tanda/cek di bawah masing-masing kolom P dan K.<br />
      </div>
      <form method='post' action='result.php'>
        <table class="table table-borderless">
          <thead>
            <tr>
              <?php for ($i = 0; $i < 3; ++$i) : ?>
              <th>No</th>
              <th>Gambaran Diri</th>
              <th>P</th>
              <th>K</th>
              <?php endfor; ?>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($i = 0; $i < 8; $i++) {
              echo "<tr" . ($i % 2 == 0 ? " class='dark'" : "") . ">";
              for ($j = 0; $j < 4; ++$j) {
                for ($n = 0; $n < 3; $n++) {
                  if ($j > 0 && $n == 0) {
                    echo "<tr" . ($i % 2 == 0 ? " class='dark'" : "") . ">";
                  } elseif ($j == 0) {
                    echo "<th rowspan='4'"
                      . ($j == 0 ? " class='first'" : "") . ">"
                      . ($i + $n * 8 + 1)
                      . "</th>";
                  }
                  $no = $n * 8 + $i * 4 + $j + (24 * $n);
                  echo "<td" . ($j == 0 ? " class='first'" : "") . ">
                  {$data[$no]->term}
                  </td>
                  <td" . ($j == 0 ? " class='first'" : "") . ">
                <input type='radio' 
                       name='m[" . ($i + $n * 8) . "]' 
                     value='{$data[$no]->most}' 
                      required />"
                    . "</td>
                  <td" . ($j == 0 ? " class='first'" : "") . ">
                  <input type='radio' 
                         name='l[" . ($i + $n * 8) . "]' 
                         value='{$data[$no]->least}'
                          required/>"
                    . "</td>";
                }
                echo "</tr>";
              }
            }
            ?>
          </tbody>
        </table>
        <p class="text-center">
          <button style="background-color: blue;" id="submit" class="btn btn-primary btn-lg">
            Calculate Results
          </button>
        </p>
      </form>
    </div>
    <script>
      $(document).ready(function () {
        $('input[type="radio"]').on('change', function () {
          var row = $(this).closest('tr');

          var radioP = row.find('input[name^="m"]');
          var radioK = row.find('input[name^="l"]');
          if (radioP.is(':checked') && radioK.is(':checked')) {
            alert("Anda telah memilih 'P' dan 'K' pada baris ini. Harap pilih hanya salah satu.");
            radioP.prop('checked', false);
            radioK.prop('checked', false);
          }
        });
      });
    </script>

  </body>

  </html>