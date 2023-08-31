<?php
if (isset($_POST['m']) && isset($_POST['l'])) {
  include 'inc/db.php';
  $most = array_count_values($_POST['m']);
  $least = array_count_values($_POST['l']);
  $hasilM = $_POST['m'];
  $hasilL = $_POST['l'];
   $jsonResult = array(
    'm' => $most,
    'l' => $least,
  );

  header('Content-Type: application/json');
  echo json_encode($jsonResult); 

  $result = array();
  $aspect = array('D', 'I', 'S', 'C', 'N');
  foreach ($aspect as $a) {
    $result[$a][1] = isset($most[$a]) ? $most[$a] : 0;
    $result[$a][2] = isset($least[$a]) ? $least[$a] : 0;
    $result[$a][3] = ($a != 'N' ? $result[$a][1] - $result[$a][2] : 0);
  }

  function getDISCResults($db, $result, $line)
  {
    $sql = "
      SELECT
        d.d,i.i,s.s,c.c
      FROM
        (SELECT d FROM tbl_results WHERE line={$line} AND value={$result['D'][$line]}) d,
        (SELECT i FROM tbl_results WHERE line={$line} AND value={$result['I'][$line]}) i,
        (SELECT s FROM tbl_results WHERE line={$line} AND value={$result['S'][$line]}) s,
        (SELECT c FROM tbl_results WHERE line={$line} AND value={$result['C'][$line]}) c
       ";
    $result = $db->query($sql);
    $data = $result->fetch_object();
    $result->free();
    return $data;
  }

  function getPattern($db, $result, $line)
  {
    $disc = getDISCResults($db, $result, $line);
    $D = $disc->d;
    $I = $disc->i;
    $S = $disc->s;
    $C = $disc->c;
    if ($D <= 0 && $I <= 0 && $S <= 0 && $C > 0) $pattern = 1;
    elseif ($D > 0 && $I <= 0 && $S <= 0 && $C <= 0) $pattern = 2;
    elseif ($D > 0 && $I <= 0 && $S <= 0 && $C > 0 && $C >= $D) $pattern = 3;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C <= 0 && $I >= $D) $pattern = 4;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C > 0 && $I >= $D && $D >= $C) $pattern = 5;
    elseif ($D > 0 && $I > 0 && $S > 0 && $C <= 0 && $I >= $D && $D >= $S) $pattern = 6;
    elseif ($D > 0 && $I > 0 && $S > 0 && $C <= 0 && $I >= $S && $S >= $D) $pattern = 7;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C > 0 && $S >= $D && $D >= $C) $pattern = 8;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C <= 0 && $D >= $I) $pattern = 9;
    elseif ($D > 0 && $I > 0 && $S > 0 && $C <= 0 && $D >= $I && $I >= $S) $pattern = 10;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C <= 0 && $D >= $S) $pattern = 11;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C > 0 && $C >= $I && $I >= $S) $pattern = 12;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C > 0 && $C >= $S && $S >= $I) $pattern = 13;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C > 0 && $I >= $S && $I >= $C) $pattern = 14;
    elseif ($D <= 0 && $I <= 0 && $S > 0 && $C <= 0) $pattern = 15;
    elseif ($D <= 0 && $I <= 0 && $S > 0 && $C > 0 && $C >= $S) $pattern = 16;
    elseif ($D <= 0 && $I <= 0 && $S > 0 && $C > 0 && $S >= $C) $pattern = 17;
    elseif ($D > 0 && $I <= 0 && $S <= 0 && $C > 0 && $D >= $C) $pattern = 18;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C > 0 && $D >= $I && $I >= $C) $pattern = 19;
    elseif ($D > 0 && $I > 0 && $S > 0 && $C <= 0 && $D >= $S && $S >= $I) $pattern = 20;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C > 0 && $D >= $S && $S >= $C) $pattern = 21;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C > 0 && $D >= $C && $C >= $I) $pattern = 22;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C > 0 && $D >= $C && $C >= $S) $pattern = 23;
    elseif ($D <= 0 && $I > 0 && $S <= 0 && $C <= 0) $pattern = 24;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C <= 0 && $I >= $S) $pattern = 25;
    elseif ($D <= 0 && $I > 0 && $S <= 0 && $C > 0 && $I >= $C) $pattern = 26;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C > 0 && $I >= $C && $C >= $D) $pattern = 27;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C > 0 && $I >= $C && $C >= $S) $pattern = 28;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C <= 0 && $S >= $D) $pattern = 29;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C <= 0 && $S >= $I) $pattern = 30;
    elseif ($D > 0 && $I > 0 && $S > 0 && $C <= 0 && $S >= $D && $D >= $I) $pattern = 31;
    elseif ($D > 0 && $I > 0 && $S > 0 && $C <= 0 && $S >= $I && $I >= $D) $pattern = 32;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C > 0 && $S >= $I && $I >= $C) $pattern = 33;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C > 0 && $S >= $C && $C >= $D) $pattern = 34;
    elseif ($D <= 0 && $I > 0 && $S > 0 && $C > 0 && $S >= $C && $C >= $I) $pattern = 35;
    elseif ($D <= 0 && $I > 0 && $S <= 0 && $C > 0 && $C >= $I) $pattern = 36;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C > 0 && $C >= $D && $D >= $I) $pattern = 37;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C > 0 && $C >= $D && $D >= $S) $pattern = 38;
    elseif ($D > 0 && $I > 0 && $S <= 0 && $C > 0 && $C >= $I && $I >= $D) $pattern = 39;
    elseif ($D > 0 && $I <= 0 && $S > 0 && $C > 0 && $C >= $S && $S >= $D) $pattern = 40;
    else $pattern = 0;
    $sql = "SELECT * FROM tbl_patterns WHERE id={$pattern}";
    $result = $db->query($sql);
    $data = $result->fetch_object();
    $result->free();
    return array($disc, $data);
  }
  $line1 = getPattern($db, $result, 1);
  $line2 = getPattern($db, $result, 2);
  $line3 = getPattern($db, $result, 3);
?>
<doctype html>
  <html>

  <head>
    <title>DISC Personality Test</title>
    <!-- <link rel='stylesheet' href='css/disc.css' /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/raphael.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/morris.min.js"></script>
  </head>

  <body>
    <header class="text-center">
      <h1>:: DISC Personality Result</h1>
    </header>
    <div class="container mt-5" style="display:flex;justify-content:center;">
      <table class="table table-bordered mx-auto" style="max-width: 800px; align-self:center">
        <caption class="text-center">GRAPH</caption>
        <thead class="text-center">
          <tr>
            <th>Graph I<br />Most</th>
            <th>Graph II<br />Least</th>
            <th>Graph III<br />Change</th>
          </tr>
        </thead>
        <tbody>
          <?php
      $i = 0;
      foreach ($aspect as $a) {
        echo "<tr>
          <td><span class='badge bg-primary' data-badge='{$a}'>{$result[$a][1]}</span></td>
          <td><span class='badge bg-secondary' data-badge='{$a}'>{$result[$a][2]}</span></td>
          <td><span class='badge bg-info' data-badge='{$a}'>{$result[$a][3]}</span></td>
        </tr>";
      }
      ?>
        </tbody>
      </table>
    </div>

    <div class="container mt-5">
      <header class="text-center">
        <h1>GRAPH</h1>
      </header>
      <div class="text-center" style="max-width: 700px; margin: 0 auto;">
        <canvas id="graph"></canvas>
      </div>
    </div>
    <div class="container mt-5">
      <h1 class="text-center">RESULT</h1>
      <div>
        <h2>Gambaran Karakter</h2>
        <div class="row">
          <div class="col-md-4">
            <b>Kepribadian di muka umum</b><br />
            <h4><?php echo $line1[1]->pattern; ?></h4>
            <ul>
              <?php echo "<li>" . implode('</li><li>', explode(',', $line1[1]->behaviour)) . "</li>"; ?>
            </ul>
          </div>
          <div class="col-md-4">
            <b>Kepribadian saat mendapat tekanan</b><br />
            <h4><?php echo $line2[1]->pattern; ?></h4>
            <ul>
              <?php echo "<li>" . implode('</li><li>', explode(',', $line2[1]->behaviour)) . "</li>"; ?>
            </ul>
          </div>
          <div class="col-md-4">
            <b>Kepribadian asli yang tersembunyi</b><br />
            <h4><?php echo $line3[1]->pattern; ?></h4>
            <ul>
              <?php echo "<li>" . implode('</li><li>', explode(',', $line3[1]->behaviour)) . "</li>"; ?>
            </ul>
          </div>
        </div>

        <h2>Deskripsi Kepribadian</h2>
        <p><?php echo $line3[1]->description; ?></p>

        <h2>Job Match</h2>
        <ul>
          <?php echo "<li>" . implode('</li><li>', explode(',', $line3[1]->jobs)) . "</li>"; ?>
        </ul>
      </div>
    </div>

    <?php
  }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const ctx = document.getElementById('graph').getContext('2d');

      const data = {
        labels: ['D', 'I', 'S', 'C'],
        datasets: [{
            label: 'MOST Mask Public Self',
            data: [<?= "{$line1[0]->d}, {$line1[0]->i}, {$line1[0]->s}, {$line1[0]->c}" ?>],
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
          },
          {
            label: 'LEAST Core Private Self',
            data: [<?= "{$line2[0]->d}, {$line2[0]->i}, {$line2[0]->s}, {$line2[0]->c}" ?>],
            borderColor: 'rgb(255, 99, 132)',
            tension: 0.1
          },
          {
            label: 'CHANGE Mirror Perceived Self',
            data: [<?= "{$line3[0]->d}, {$line3[0]->i}, {$line3[0]->s}, {$line3[0]->c}" ?>],
            borderColor: 'rgb(54, 162, 235)',
            tension: 0.1
          }
        ]
      };

      const config = {
        type: 'line',
        data: data,
        options: {
          scales: {
            y: {
              min: -8,
              max: 8
            }
          }
        }
      };

      const chart = new Chart(ctx, config);
    </script>
  </body>

  </html>