<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $estilos ?>


  <page backtop="7mm" backbottom="7mm">

    <page_header>
      [[page_cu]]/[[page_nb]]
    </page_header>

  </page>

  <table class="table">
  <colgroup>
    <col style="width: 5%;">
    <col style="width: 25%;">
    <col style="width: 30%;">
    <col style="width: 25%;">
    <col style="width: 15%;">
  </colgroup>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Alias</th>
        <th>Casa</th>
        <th>Bando</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row): ?>
      <tr>
        <td><?= $row['id']?></td>
        <td><?= $row['superhero_name']?></td>
        <td><?= $row['full_name']?></td>
        <td><?= $row['publisher_name']?></td>
        <td><?= $row['alignment']?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

  <page>

    <page_footer>
      Lista de super heroes
    </page_footer>

  </page>

  

</body>
</html>