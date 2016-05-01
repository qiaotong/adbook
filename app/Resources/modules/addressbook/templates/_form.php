<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('addressbook/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('addressbook/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'addressbook/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['first_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['first_name']->renderError() ?>
          <?php echo $form['first_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['last_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['last_name']->renderError() ?>
          <?php echo $form['last_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['phone']->renderLabel() ?></th>
        <td>
          <?php echo $form['phone']->renderError() ?>
          <?php echo $form['phone'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created']->renderLabel() ?></th>
        <td>
          <?php echo $form['created']->renderError() ?>
          <?php echo $form['created'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated']->renderError() ?>
          <?php echo $form['updated'] ?>
        </td>
      </tr>

      <tr>
        <th><?php echo $form['Time']->renderLabel() ?></th>
        <td>
          <?php echo $form['Time']->renderError() ?>
          <?php echo $form['Time'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['Date']->renderLabel() ?></th>
        <td>
          <?php echo $form['Date']->renderError() ?>
          <?php echo $form['Date'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['DateRange']->renderLabel() ?></th>
        <td>
          <?php echo $form['DateRange']->renderError() ?>
          <?php echo $form['DateRange'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['DateTime']->renderLabel() ?></th>
        <td>
          <?php echo $form['DateTime']->renderError() ?>
          <?php echo $form['DateTime'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['I18nTime']->renderLabel() ?></th>
        <td>
          <?php echo $form['I18nTime']->renderError() ?>
          <?php echo $form['I18nTime'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['I18nDate']->renderLabel() ?></th>
        <td>
          <?php echo $form['I18nDate']->renderError() ?>
          <?php echo $form['I18nDate'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['I18nDateTime']->renderLabel() ?></th>
        <td>
          <?php echo $form['I18nDateTime']->renderError() ?>
          <?php echo $form['I18nDateTime'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
