<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynlCreditclick extends Pay_Controller_Payment {
  protected $_paymentOptionId = 2107;
  protected $_paymentMethodName = 'paynl_creditclick';

}