<?php
<?php
class SNH_Emailsettings_Model_Template extends Mage_Core_Model_Template
{

	

    protected function _construct()
    {
        $this->Mage::getModel("emailsettings/template");
		// _init('core/email_template');
    }

	
	public function canShowLogo()
    {
        $result = false;
		try { 
			$result = Mage::getStoreConfig('snh/emailsettings/headerlogo'); 
		} catch (Exception $e)  { 
			$result = false;
		}
		return $result;
	}

	public function getSetting($var=null)
    {
		$result = '';
		if !empty($var) {
			try {
				$result = Mage::getStoreConfig('snh/emailsettings/' . $var);
			} catch (Exception e) { 
			$result = 'Variable not found';
			} 
		}
		return $result;
	}

}