<!DOCTYPE html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INFOMLBB</title>
  <meta name="description" content="Final Project Pemrograman Web 1" />
  <link rel="stylesheet" href="styleemblems.css" />
</head>

<body>
  <div class="topnav">
    <a class="logoml"><img src="https://upload.wikimedia.org/wikipedia/id/7/72/New_Mobile_Legends_Bang_Bang_2020_Logo.png" length="300" width="250" /></a>
    <a href="index.php">Home</a>
    <a href="herolist.php">Hero Lists</a>
    <a href="emblems.php">Emblems</a>
    <a href="news.php">News</a>
    <a href="aboutme.php">About Me</a>
    <a href="contactme.php" class="contact">Contact Me</a>
  </div>
  </nav>

  <div class="table">
    <h2>Emblems</h2>

    <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Logo</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Festival of Blood</td>
        <td><img src=".festivalofblood.png"></td>
        <td>Emblem ini sering dipakai oleh fighter yang ingin lifesteal tambahan. Emblem menambah ekstra Spell Vamp sebanyak 8 persen. Setiap musuh dibunuh akan bertambah 1 persen maksimal 12 persen.</td>
      </tr>
      <tr>
        <td>Concussive Blast</td>
        <td><img src=".concussiveblast.png"></td>
        <td>Emblem ini paling sering dipakai oleh Roamer yang ingin damage tambahan, tetapi masih tebal. Setelah menyerang, memberikan Magic Damage AOE pada musuh sebanyak 125 + 7 persen HP. Pasif memiliki Cooldown 15 detik.</td>
      </tr>
      <tr>
        <td>Weapon Master</td>
        <td><img src=".weaponmaster.png"></td>
        <td>Emblem ini paling sering dipakai oleh para Marksman yang mau damage tambahan lebih dari item mereka. Emblem meningkatkan bonus atribut Physical Attack dari item sebanyak 50 persen.</td>
      </tr>
      <tr>
        <td>Mage Killer</td>
        <td><img src=".sawi.png"></td>
        <td>Emblem ini paling sering dipakai oleh para Jungler untuk farming yang lebih cepat. Emblem meningkatkan Damage sebanyak 6 persen apabila musuh hanya sendirian</td>
      </tr>
      <tr>
        <td>Mystery Shop</td>
        <td><img src=".mysteryshop.png"></td>
        <td>Emblem ini salah satu emblem bagus, karena bisa mengurangi harga item. Emblem mengurangi harga item sebanyak 10 persen.</td>
      </tr>
      <tr>
        <td>High and Dry</td>
        <td><img src=".highanddry.png"></td>
        <td>Emblem ini paling sering dipakai oleh para Jungler yang biasanya mementingkan solo kill atau ingin Damage lebih kepada musuh yang sendiri. Emblem meningkatkan Damage ke Lord, Turtle, dan Turret sebanyak 20 persen, serta mengurangi Damage dari Lord dan Turtle sebanyak 20 persen.</td>
      </tr>
      <tr>
        <td>Pull Yourself Together</td>
        <td><img src=".pullyourselftogether.png"></td>
        <td>Emblem ini bisa dipakai oleh Roamer atau Support yang ingin waktu respawn dan spellnya lebih singkat. Emblem mengurangi waktu Respawn dan Battle Spell CD sebanyak 15 persen.</td>
      </tr>
      <button onclick="myFunction()">More</button>

      <script>
        function myFunction() {
          alert("Ini adalah 7 emblem yang paling sering dipakai di dunia MLBB. Berikut adalah contohnya.");
        }
      </script>
    </table>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>