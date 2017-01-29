<?php

namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class AnalysisController
 *
 * PHP Version 5
 *
 * @category  PHP
 * @package   Data\Controller
 * @author    Simplicity Trade GmbH <it@simplicity.ag>
 * @copyright 2014-2016 Simplicity Trade GmbH
 * @license   Proprietary http://www.simplicity.ag
 */
class AnalysisController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}