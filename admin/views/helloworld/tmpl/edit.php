<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<form action="<?php echo JRoute::_('index.php?option=com_helloworld&layout=edit&id='.(int) $this->item->id); ?>"
      method="post" name="adminForm" id="adminForm" class="form-validate">
      <!-- note : id = "helloworld-form" empêche le fonctionnement des boutons "edit", "new" -->
        <fieldset class="adminform">
                <legend><?php echo JText::_( 'COM_HELLOWORLD_HELLOWORLD_DETAILS' ); ?></legend>
                <?php foreach($this->form->getFieldset() as $field): ?>
                        <?php if (!$field->hidden): ?>
                                <?php echo $field->label; ?>
                        <?php endif; ?>
                        <?php echo $field->input; ?>
                <?php endforeach; ?>
        </fieldset>
        <div>
                <input type="hidden" name="task" value="helloworld.edit" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>