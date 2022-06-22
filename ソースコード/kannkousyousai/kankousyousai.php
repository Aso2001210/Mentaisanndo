<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>観光詳細</title>
</head>
<body>
<h1><a href="kannkousyousai.php" class="title">三度の飯より明太子</a></h1>
<a href=""><button type="submit" class="btn" style="position: absolute;width: 130px; height: 40px; right: 900px; top: 70px">観光</button></a>
<a href=""><button type="submit" class="btn2" style="position: absolute;width: 130px; height: 40px; right: 700px; top: 70px">グルメ・郷土料理</button></a>
<a href=""><button type="submit" class="btn2" style="position: absolute;width: 130px; height: 40px; right: 500px; top: 70px">お土産</button></a><br>
<a href=""><button type="submit" class="btn2" style="position: absolute;width: 130px; height: 40px; right: 300px; top: 70px">おすすめコース</button></a><br>
<a href=""><button type="submit" class="btn2" style="position: absolute;width: 130px; height: 40px; right: 100px; top: 70px">予約</button></a>

<img src="img/itosima.png">

<h2>糸島</h2>
<br><br>
<p>玄界灘に面した糸島半島<br>
    美しい海岸線に豊かな自然綺麗な夕焼けが見られる、おしゃれなお店<br>
    も多くあり心もおなかも満たせる<br>
    福岡に来たら是非行っておきたいスポット！</p>
<br>
<h2>ホームページ</h2>
<a href="https://www.city.itoshima.lg.jp" target="_blank">https://www.city.itoshima.lg.jp</a>
<?php
require_once "DbMonager.php";
$pdo=getDb();
$sql = $pdo->query("SELECT tourist_sites FROM image ORDER BY RAND() LIMIT 1");
?>
</body>
</html>
