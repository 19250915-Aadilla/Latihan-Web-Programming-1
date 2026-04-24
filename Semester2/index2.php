<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
</head>
<body>

<?php include 'nav.php'; ?>

<div style="padding-left:16px">
    <center>
  <h2>Biodata</h2>
  <form method="post" action="" class="mb-4">
  <table style="width:70%; border-collapse: collapse:" border="1">
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><input type="number" name="nim" required></td>
    </tr>
     <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" placeholder="Enter your name" required></td>
    </tr>
    <tr>
      <td></td>
      <td>:</td>
      <td><button type="submit" name="kirim">Kirim</button>
    </tr>
  </table>
  </form>
   <?php if (isset($_POST['kirim'])): ?>
                           
    <strong>NIM:</strong> <?php echo htmlspecialchars($_POST['nim'] ?? ''); ?></p>
    <strong>Nama:</strong> <?php echo htmlspecialchars($_POST['nama'] ?? ''); ?></p>
    <?php endif; ?>
  </center>
</div>

</body>
</html>