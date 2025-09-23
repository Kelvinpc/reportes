<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



  <h2>Reporte</h2>

  <table>
  <colgroup>
    <col style="width: 10%;">
    <col style="width: 25%;">
    <col style="width: 25%;">
    <col style="width: 20%;">
    <col style="width: 20%;">
  </colgroup>
  <thead>
    <tr>
      <td>ID</td>
      <td>Super Hero</td>
      <td>Full name</td>
      <td>Race</td>
      <td>Alignment</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($superheros as $row): ?>
      <tr>
        <td> <?= $row['id']?> </td>
        <td> <?= $row['superhero_name']?> </td>
        <td> <?= $row['full_name']?> </td>
        <td> <?= $row['race']?> </td>
        <td> <?= $row['alignment']?> </td>
      </tr>
    <?php endforeach;?>
  </tbody>
</table>
</body>
</html>

