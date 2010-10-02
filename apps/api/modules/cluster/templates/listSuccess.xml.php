<?xml version="1.0" encoding="utf-8"?>
<clusters>
<?php foreach ($clusters as $cluster): ?>
  <cluster>
    <id><?php echo $cluster['id'] ?></id>
    <name><?php echo $cluster['name'] ?></name>
    <status><?php echo $cluster['status'] ?></status>
  </cluster>
<?php endforeach; ?>
</clusters>