<?php    
	defined('C5_EXECUTE') or die(_("Access Denied."));
	class JquerydatatablesBlockController extends BlockController {
		
		var $pobj;
		 
		protected $btTable = 'btJquerydatatables';
		protected $btInterfaceWidth = "400";
		protected $btInterfaceHeight = "230";
		
		
		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Lets you add a block that will allow access to jQuery DataTable widgets.");
		}
		
		public function getBlockTypeName() {
			return t("jQuery DataTables");
		}
				
		function __construct($obj = null) {		
			parent::__construct($obj);	
		}
    
    public function on_page_view() {
      $bv = new BlockView();
      $bv->setBlockObject($this->getBlockObject());
      $blockURL = $bv->getBlockURL();
      $pg = Page::getCurrentPage();
      if (!$pg->isEditMode()) {
        $html = Loader::helper('html');      
        $this->addHeaderItem($html->css("{$blockURL}/media/css/demo_page.css"));
        $this->addHeaderItem($html->css("{$blockURL}/media/css/demo_table.css"));  
        $this->addHeaderItem($html->javascript("{$blockURL}/media/js/jquery.dataTables.js"));
        $this->addHeaderItem($html->javascript("{$blockURL}/media/js/ZeroClipboard.js"));
        $this->addHeaderItem($html->javascript("{$blockURL}/media/js/TableTools.js"));
      }
      $this->set('isEditMode', $pg->isEditMode());
		}
    
		function view(){ 
      $this->set('jscontent', $this->jscontent);      
		}
		
		function save($data) { 
			$args['jscontent'] = isset($data['jscontent']) ? $data['jscontent'] : '';
			parent::save($args);
		}
		
	}
	
?>