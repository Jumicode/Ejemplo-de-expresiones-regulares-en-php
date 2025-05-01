<?php if ($validator->hasErrors()): ?>
  <div class="errors">
    <h3>Errores de Validación:</h3>
    <ul>
      <?php foreach ($errors as $err): ?>
        <li><?= $err ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php else: ?>
  <div class="results">
    <h3>Datos Válidos:</h3>
    <ul>
      <?php foreach ($results as $field => $val): ?>
        <li><strong><?= $field ?>:</strong> <?= $val ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>