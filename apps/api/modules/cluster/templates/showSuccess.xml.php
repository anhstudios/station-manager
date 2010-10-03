<?xml version="1.0" encoding="utf-8"?>
<cluster>
  <id><?php echo $cluster['id'] ?></id>
  <name><?php echo $cluster['name'] ?></name>
  <status><?php echo $cluster['status'] ?></status>
  <processes>  
  <?php foreach ($cluster['Processes'] as $process): ?>  
    <id><?php echo $process['id'] ?></id>
    <type><?php echo $process['type'] ?></type>
    <version><?php echo $process['version'] ?></version>
    <address><?php echo $process['address'] ?></address>
    <tcp_port><?php echo $process['tcp_port'] ?></tcp_port>
    <udp_port><?php echo $process['udp_port'] ?></udp_port>
    <status><?php echo $process['status'] ?></status>
    <last_pulse><?php echo $process['last_pulse'] ?></last_pulse>
  <?php endforeach; ?>
  </processes>
</cluster>