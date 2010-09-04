<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('cluster/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('cluster/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'cluster/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['online']->renderLabel() ?></th>
        <td>
          <?php echo $form['online']->renderError() ?>
          <?php echo $form['online'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['primary_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['primary_id']->renderError() ?>
          <?php echo $form['primary_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['version']->renderLabel() ?></th>
        <td>
          <?php echo $form['version']->renderError() ?>
          <?php echo $form['version'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
