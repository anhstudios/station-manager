<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $cluster->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $cluster->getName() ?></td>
    </tr>
    <tr>
      <th>Online:</th>
      <td><?php echo $cluster->getOnline() ?></td>
    </tr>
    <tr>
      <th>Primary:</th>
      <td><?php echo $cluster->getPrimaryId() ?></td>
    </tr>
    <tr>
      <th>Version:</th>
      <td><?php echo $cluster->getVersion() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $cluster->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $cluster->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('cluster/edit?id='.$cluster->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('cluster/index') ?>">List</a>
