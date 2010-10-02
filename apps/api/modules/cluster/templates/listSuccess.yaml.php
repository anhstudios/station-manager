---
clusters:
<?php foreach($clusters as $cluster): ?>
- :id: <?php echo $cluster['id'] ?> 
  :name: <?php echo $cluster['name'] ?> 
  :status: <?php echo $cluster['status'] ?> 
<?php endforeach; ?>

