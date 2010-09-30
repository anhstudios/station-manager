<h1>Cluster List</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Status</th>
      <th>Primary</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td colspan="7">
        <a href="<?php echo url_for('cluster/new') ?>" class="minibutton"><span>New Cluster</span></a>
      </td>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($clusters as $cluster): ?>
    <tr>
      <td><a href="<?php echo url_for('cluster/show?id='.$cluster->getId()) ?>"><?php echo $cluster->getName() ?></a></td>
      <td><?php echo $cluster->getStatus() ?></td>
      <td><?php echo $cluster->getPrimaryId() ?></td>
      <td><?php echo $cluster->getCreatedAt() ?></td>
      <td><?php echo $cluster->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>