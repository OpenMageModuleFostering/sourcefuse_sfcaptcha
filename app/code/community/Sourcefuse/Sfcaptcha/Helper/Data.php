<?php

class Sourcefuse_Sfcaptcha_Helper_Data extends Mage_Core_Helper_Abstract
{
	
	/* functions started for contact us */
	
	public function getJqueryContactUs(){
		if(Mage::getSingleton('core/design_package')->getPackageName() != 'rwd')		
		    return 'js/sfcaptcha/jquery.js';
	}

	public function getCssContactus(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/contactus'))     return 'css/sfcaptcha/QapTcha.jquery.css';
	}

	public function getBrowserJsContactus(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/contactus'))     return 'js/sfcaptcha/browser.js';
	}

	public function getJqueryUiContactus(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/contactus'))     return 'js/sfcaptcha/jquery-ui.js';
	}

	public function getJqueryUiTouchContactus(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/contactus'))     return 'js/sfcaptcha/jquery.ui.touch.js';
	}

	public function getQapTchaJsContactus(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/contactus'))     return 'js/sfcaptcha/QapTcha.jquery.js';
	}
	
	
	/* functions ends here */
	
	
	/* functions started for customer login */
	
	public function getJqueryCustomerLogin(){
		
		if(Mage::getSingleton('core/design_package')->getPackageName() != 'rwd')		
		    return 'js/sfcaptcha/jquery.js';
	}

	public function getCssCustomerLogin(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signin'))     return 'css/sfcaptcha/QapTcha.jquery.css';
	}

	public function getBrowserJsCustomerLogin(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signin'))     return 'js/sfcaptcha/browser.js';
	}

	public function getJqueryUiCustomerLogin(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signin'))     return 'js/sfcaptcha/jquery-ui.js';
	}

	public function getJqueryUiTouchCustomerLogin(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signin'))     return 'js/sfcaptcha/jquery.ui.touch.js';
	}

	public function getQapTchaJsCustomerLogin(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signin'))     return 'js/sfcaptcha/QapTcha.jquery.js';
	}
	
	/* functions ends here */
	
		/* functions started for customer signup */
	
	public function getJqueryCustomerSignup(){
		
		 if(Mage::getSingleton('core/design_package')->getPackageName() != 'rwd')		
		    return 'js/sfcaptcha/jquery.js';
	}

	public function getCssCustomerSignup(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signup'))     return 'css/sfcaptcha/QapTcha.jquery.css';
	}

	public function getBrowserJsCustomerSignup(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signup'))     return 'js/sfcaptcha/browser.js';
	}

	public function getJqueryUiCustomerSignup(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signup'))     return 'js/sfcaptcha/jquery-ui.js';
	}

	public function getJqueryUiTouchCustomerSignup(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signup'))     return 'js/sfcaptcha/jquery.ui.touch.js';
	}

	public function getQapTchaJsCustomerSignup(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/signup'))     return 'js/sfcaptcha/QapTcha.jquery.js';
	}
	
	/* functions ends here */
	
	/* functions started for product review */
	
	public function getJqueryProductReview(){
		
		if(Mage::getSingleton('core/design_package')->getPackageName() != 'rwd')		
		    return 'js/sfcaptcha/jquery.js';
	}

	public function getCssProductReview(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/review'))     return 'css/sfcaptcha/QapTcha.jquery.css';
	}

	public function getBrowserJsProductReview(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/review'))     return 'js/sfcaptcha/browser.js';
	}

	public function getJqueryUiProductReview(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/review'))     return 'js/sfcaptcha/jquery-ui.js';
	}

	public function getJqueryUiTouchProductReview(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/review'))     return 'js/sfcaptcha/jquery.ui.touch.js';
	}

	public function getQapTchaJsProductReview(){
		 
		 if(Mage::getStoreConfig('sourcefuse_section/sourcefuse_group/review'))     return 'js/sfcaptcha/QapTcha.jquery.js';
	}
	
	/* functions ends here */
}
