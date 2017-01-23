<?php

class DS_News_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {

        $this->loadLayout();
        $this->renderLayout();

//        $this->loadLayout();
//        $layoutHandles = $this->getLayout()->getUpdate()->getHandles();
//        echo '<pre>' . print_r($layoutHandles, true) . '</pre>';
    }

}