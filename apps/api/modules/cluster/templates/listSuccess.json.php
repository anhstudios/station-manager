{
  "clusters": [<?php $nb = count($clusters); $i = 0; foreach($clusters as $cluster): ++$i ?> 
  {
    "id": <?php echo $cluster['id'] ?>,
    "username": "<?php echo $cluster['name'] ?>",
    "status": <?php echo $cluster['status']?>,
  }<?php echo $nb == $i ? '' : ',' ?> <?php endforeach; ?> 
  ]
}