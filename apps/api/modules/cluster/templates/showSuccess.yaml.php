---
cluster:
  id: <?php echo $cluster['id'] ?> 
  name: <?php echo $cluster['name'] ?> 
  status: <?php echo $cluster['status'] ?> 
  processes: <?php foreach($cluster['Processes'] as $process): ?> 
    - :id: <?php echo $process['id'] ?> 
      :type: <?php echo $process['type'] ?> 
      :version: <?php echo $process['version'] ?> 
      :address: <?php echo $process['address'] ?> 
      :tcp_port: <?php echo $process['tcp_port'] ?> 
      :udp_port: <?php echo $process['udp_port'] ?> 
      :status: <?php echo $process['status'] ?> 
      :last_pulse: <?php echo $process['last_pulse'] ?> 
  <?php endforeach; ?> 
