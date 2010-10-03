{
  "cluster": {
    "id": <?php echo $cluster['id'] ?>,
    "username": "<?php echo $cluster['name'] ?>",
    "status": <?php echo $cluster['status']?>,
    "processes": [<?php $nb = count($cluster['Processes']); $i = 0; foreach($cluster['Processes'] as $process): ++$i ?>
    {
      "id": <?php echo $process['id'] ?>,
      "type": <?php echo $process['type'] ?>,
      "version": <?php echo $process['version'] ?>,
      "address": <?php echo $process['address'] ?>,
      "tcp_port": <?php echo $process['tcp_port'] ?>,
      "udp_port": <?php echo $process['udp_port'] ?>,
      "status": <?php echo $process['status'] ?>,
      "last_pulse": <?php echo $process['last_pulse'] ?>,
    }<?php echo $nb == $i ? '' : ',' ?> <?php endforeach; ?> ]
  }
}