<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filtrar personaje</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<h1>Filtrar personaje</h1>

<select name="filtrar" id="filtrar" class="form-select">
  <option value="">Selecciona un Publisher</option>
  <?php foreach ($rows as $row): ?>
    <option value="<?= $row['id'] ?>"><?= $row['publisher_name'] ?></option>
  <?php endforeach; ?>
</select>

<a id="generatePdfLink" href="#" class="btn btn-sm btn-danger delete" style="display: none;">
  <i class="fa-solid fa-trash">Generar PDF</i>
</a>

<script>
  document.getElementById('filtrar').addEventListener('change', function() {
    var selectedId = this.value;
    var pdfLink = '<?= base_url('reportes/r4/') ?>' + selectedId; 

    var pdfBtn = document.getElementById('generatePdfLink');
    if (selectedId) {
      pdfBtn.href = pdfLink;
      pdfBtn.style.display = 'inline-block';
    } else {
      pdfBtn.style.display = 'none';
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
