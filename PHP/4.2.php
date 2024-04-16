<table border="1">
  <tr>
    <th></th>
    <?php for ($i = 4; $i <= 9; $i++): ?>
      <th><?= $i ?></th>
    <?php endfor; ?>
  </tr>
  <?php for ($i = 4; $i <= 9; $i++): ?>
    <tr>
      <td><?= $i ?></td>
      <?php for ($j = 4; $j <= 9; $j++): ?>
        <td><?= $i * $j ?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
</table>
