<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_ProductLabels
 * @version     1.0.0
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */

class Apptha_Productlabels_Block_Adminhtml_Productlabels extends Mage_Adminhtml_Block_Widget_Grid_Container
{	
	
  public function __construct()
  { 		  	
  	$this->_controller = 'adminhtml_productlabels';
    $this->_blockGroup = 'productlabels';
  	$_helper = Mage::helper('productlabels');				
	$this->_headerText = Mage::helper('productlabels')->__('Label Manager');
   	$this->_addButtonLabel = Mage::helper('productlabels')->__('Add Label');
    parent::__construct();		
	
	}
}