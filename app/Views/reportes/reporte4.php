<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>cuarto report</h1>

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
    <?php foreach ($heroes as $heroe): ?>
      <tr>
        <td><?= $heroe['id']?></td>
        <td><?= $heroe['superhero_name']?></td>
        <td><?= $heroe['full_name']?></td>
        <td><?= $heroe['publisher_name']?></td>
        <td><?= $heroe['alignment']?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  
</body>
</html>