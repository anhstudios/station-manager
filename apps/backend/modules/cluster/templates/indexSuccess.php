<h1>Clusters List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Online</th>
      <th>Primary</th>
      <th>Version</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clusters as $cluster): ?>
    <tr>
      <td><a href="<?php echo url_for('cluster/show?id='.$cluster->getId()) ?>"><?php echo $cluster->getId() ?></a></td>
      <td><?php echo $cluster->getName() ?></td>
      <td><?php echo $cluster->getOnline() ?></td>
      <td><?php echo $cluster->getPrimaryId() ?></td>
      <td><?php echo $cluster->getVersion() ?></td>
      <td><?php echo $cluster->getCreatedAt() ?></td>
      <td><?php echo $cluster->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('cluster/new') ?>">New</a>
