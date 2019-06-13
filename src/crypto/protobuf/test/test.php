<?php
require "../../../../vendor/autoload.php";
require "../GPBMetadata/Common.php";
require "../GPBMetadata/Chain.php";

use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBType;

require "../Protocol/Transaction.php";
require "../Protocol/Operation.php";
require "../Protocol/OperationCreateAccount.php";

$tran = new \Protocol\Transaction();
$tran->setNonce(1);
$tran->setSourceAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
$tran->setMetadata("test");
$tran->setGasPrice(1000);
$tran->setFeeLimit(1000000);

$opers = new RepeatedField(GPBType::MESSAGE, Protocol\Operation::class);
$oper = new Protocol\Operation();
$oper->setSourceAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
$oper->setMetadata("test");
$oper->setType(1);

$createAccount = new \Protocol\OperationCreateAccount();
$createAccount->setDestAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
$createAccount->setInitBalance(999999999897999998);
$oper->setCreateAccount($createAccount);

$opers[] = $oper;
$tran->setOperations($opers);

$serialTran = $tran->serializeToString();

$tranParse = new \Protocol\Transaction();
$tranParse->mergeFromString($serialTran);

var_dump($tranParse);