<h3>Datos Recibidos (Sin Validar):</h3>
<ul>
  <?php foreach ($results as $field => $val): ?>
    <li><strong><?= $field ?>:</strong> <?= $val ?></li>
  <?php endforeach; ?>
</ul>