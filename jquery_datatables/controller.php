<?php   

defined('C5_EXECUTE') or die(_("Access Denied."));

class jquerydatatablesPackage extends Package {

	protected $pkgHandle = 'jquery_datatables';
	protected $appVersionRequired = '5.3.3'; 
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Lets you add a block where you can use jQuery DataTables widgets directly");
	}
	
	public function getPackageName() {
		return t("Jquery-datatables");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('jquerydatatables', $pkg);
		
	}

}