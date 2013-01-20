<?php

require_once("../lib/iocurve/iocurve.class.php");
require_once("../lib/iocurve/mgmtView.class.php");
#require_once("../lib/iocurve/mgmtController.class.php");

$ui = new MgmtView();
$ui->setType("types");
echo $ui->drawMgmtView();

