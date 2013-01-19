<?php

require_once("../lib/iocurve/iocurve.class.php");
require_once("../lib/iocurve/IocMgmtView.class.php");
#require_once("../lib/iocurve/IocMgmtController.class.php");

$ui = new IocMgmtView();
$ui->setType("points");
echo $ui->drawIocMgmtView();

