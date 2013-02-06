<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$form = Loader::helper('form');
 ?> 

<fieldset><legend>Setup</legend>
<div style="margin-top:8px;">

<label for="jscontent"><?php echo t('Enter the javascript that should be executed automatically to use jQuery DataTables')?></label>
 <?php echo $form->textarea("jscontent", $jscontent, array('rows' => 8, 'cols' => 50)); ?>
<br/>
</div>

</fieldset>

<div class="ccm-spacer" style="margin-bottom:16px;"></div>