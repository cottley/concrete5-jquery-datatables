<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 

 
if (!$isEditMode) {

  $uinfo = new User();
  if (!$uinfo->IsLoggedIn()) { 
?>
<script language="javascript">
$(function() {
  <?php echo $jscontent; ?>           
});
</script>
<?php
  } else {
?><b>jQuery DataTables - Not activated when logged in</b>
<?php
  }
} else {
?><b>jQuery DataTables - Not activated in edit mode</b>
<?php 
}
?>