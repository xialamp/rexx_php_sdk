<?php
/**
 * Created by PhpStorm.
 * User: fengruiming
 * Date: 2018/11/9
 * Time: 10:19
 */

include_once dirname(dirname(dirname(__FILE__))) . "/autoload.php";

//$sdk = \src\SDK::getInstance("http://seed1.rexxtest.io:26002");
$sdk = \src\SDK::getInstance("http://127.0.0.1:36002"); // localhost

class DigitalAssetDemo extends PHPUnit_Framework_TestCase {
    public function setSDKConfigure($chainId) {
        $sdkConfigure = new \src\model\request\SDKConfigure();
        $sdkConfigure->setChainId($chainId);
        $sdkConfigure->setUrl("http://127.0.0.1:36002");
        $GLOBALS['sdk'] = \src\SDK::getInstanceWithConfigure($sdkConfigure);
    }
    /** @test */
    public function test() {
        $signers = array();
        $signer = new \src\model\response\result\data\Signer();
        array_push($signers, $signer);

    }
    /** @test */
    public function accountCheckValid() {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $request = new \src\model\request\AccountCheckValidRequest();
        $request->setAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $account->checkValid($request);
        $json_result = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_result);
    }

    /** @test */
    public function accountCreate() {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $response = $account->create();
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
        //$this->assertSame($json_response->error_code, 0);
    }

    /** @test */
    public function accountGetInfo() {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $accountGetInfoRequest = new \src\model\request\AccountGetInfoRequest();
        $accountGetInfoRequest->setAddress("");
        $response = $account->getInfo($accountGetInfoRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function accountGetNonce() {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $accountGetNonceRequest = new \src\model\request\AccountGetNonceRequest();
        $accountGetNonceRequest->setAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $account->getNonce($accountGetNonceRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function accountGetBalance() {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $accountGetBalanceRequest = new \src\model\request\AccountGetBalanceRequest();
        $accountGetBalanceRequest->setAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $account->getBalance($accountGetBalanceRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function accountGetAssets() {
        
        $account = $GLOBALS['sdk']->getAccountService();

        $accountGetAssetsRequest = new \src\model\request\AccountGetAssetsRequest();
        $accountGetAssetsRequest->setAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $account->getAssets($accountGetAssetsRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function accountGetMetadata() {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $accountGetMetadataRequest = new \src\model\request\AccountGetMetadataRequest();
        $accountGetMetadataRequest->setAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $accountGetMetadataRequest->setKey("1");
        $response = $account->getMetadata($accountGetMetadataRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function accountCheckActivated() {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $accountCheckActivatedRequest = new \src\model\request\AccountCheckActivatedRequest();
        $accountCheckActivatedRequest->setAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $account->checkActivated($accountCheckActivatedRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function assetGetInfo() {
        $this->setSDKConfigure(10);
        $asset = $GLOBALS['sdk']->getAssetService();

        $assetGetInfoRequest = new \src\model\request\AssetGetInfoRequest();
        $assetGetInfoRequest->setAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $assetGetInfoRequest->setCode("ATP");
        $assetGetInfoRequest->setIssuer("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $asset->getInfo($assetGetInfoRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function contractGetInfo() {
        $this->setSDKConfigure(10);
        $contract = $GLOBALS['sdk']->getContractService();

        $contractGetInfoRequest = new \src\model\request\ContractGetInfoRequest();
        $contractGetInfoRequest->setContractAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $contract->getInfo($contractGetInfoRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function contractGetAddress() {
        $this->setSDKConfigure(10);
        $contract = $GLOBALS['sdk']->getContractService();

        $contractGetAddressRequest = new \src\model\request\ContractGetAddressRequest();
        //$contractGetAddressRequest->setHash("44246c5ba1b8b835a5cbc29bdc9454cdb9a9d049870e41227f2dcfbcf7a07689");
        $contractGetAddressRequest->setHash("68e8f1dea066cef95715de69ec067fd2eb424d85122b8bc4d5feed5a847bb7db");
        $response = $contract->getAddress($contractGetAddressRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function contractCheckValid() {
        $this->setSDKConfigure(10);
        $contract = $GLOBALS['sdk']->getContractService();

        $contractCheckValidRequest = new \src\model\request\ContractCheckValidRequest();
        $contractCheckValidRequest->setContractAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $response = $contract->checkValid($contractCheckValidRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function contractCall() {
        $this->setSDKConfigure(10);
        $contract = $GLOBALS['sdk']->getContractService();

        $contractCallRequest = new \src\model\request\ContractCallRequest();
        $contractCallRequest->setContractAddress("Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV");
        $contractCallRequest->setFeeLimit(10000000000);
        $contractCallRequest->setOptType(1);
        $response = $contract->call($contractCallRequest);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockCheckStatus() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $response = $block->checkStatus();
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetTransactions() {
        $this->setSDKConfigure(0);
        $block = $GLOBALS['sdk']->getBlockService();

        $request = new \src\model\request\BlockGetTransactionsRequest();
        $request->setBlockNumber(581283);
        $response = $block->getTransactions($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetInfo() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $request = new \src\model\request\BlockGetInfoRequest();
        $request->setBlockNumber(10000);
        $response = $block->getInfo($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetLatestInfo() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $response = $block->getLatestInfo();
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetReward() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $request = new \src\model\request\BlockGetRewardRequest();
        $request->setBlockNumber(10000);
        $response = $block->GetReward($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetLatestReward() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $response = $block->GetLatestReward();
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetValidators() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $request = new \src\model\request\BlockGetValidatorsRequest();
        $request->setBlockNumber(1637292);
        $response = $block->GetValidators($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetLatestValidators() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $response = $block->GetLatestValidators();
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetFees() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $request = new \src\model\request\BlockGetFeesRequest();
        $request->setBlockNumber(1637292);
        $response = $block->getFees($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function blockGetLatestFees() {
        $this->setSDKConfigure(10);
        $block = $GLOBALS['sdk']->getBlockService();

        $response = $block->GetLatestFees();
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function transactionBuildBlob() {
        $this->setSDKConfigure(10);
        $transaction =  $GLOBALS['sdk']->getTransactionService();

        // Init variable
        $senderAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        $destAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        $amount = \src\common\Tools::RE2XX("10.9");
        if (!$amount) {
            echo "Failed to change amount REXX to mo\n";
            return;
        }
        $gasPrice = 1000;
        $feeLimit = \src\common\Tools::RE2XX("0.01");
        if (!$feeLimit) {
            echo "Failed to change feeLimit REXX to xx\n";
            return;
        }
        $nonce = 1;

        // Build REXXSendOperation
        $rexxSendOperation = new \src\model\request\operation\REXXSendOperation();
        $rexxSendOperation->setSourceAddress($senderAddress);
        $rexxSendOperation->setDestAddress($destAddress);
        $rexxSendOperation->setAmount($amount);

        // Init request
        $request = new \src\model\request\TransactionBuildBlobRequest();
        $request->setSourceAddress($senderAddress);
        $request->setNonce($nonce);
        $request->setFeeLimit($feeLimit);
        $request->setGasPrice($gasPrice);
        $request->addOperation($rexxSendOperation);
        $request->setCeilLedgerSeq(0);

        // Call buildBlob
        $response = $transaction->buildBlob($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function transactionParseBlob() {
        $this->setSDKConfigure(10);
        $transaction =  $GLOBALS['sdk']->getTransactionService();

        $transactionBlob = "0a24627551666e56596758754d6f3372764345704b4136536652724470617a38443841394561100218c0843d20e8073a5608071224627551666e56596758754d6f3372764345704b4136536652724470617a38443841394561522c0a2462755173757248314d34726a4c6b666a7a6b7852394b584a366a537532723978424e45771080a9e08704";
        $request = new \src\model\request\TransactionParseBlobRequest();
        $request->setBlob($transactionBlob);
        $response = $transaction->parseBlob($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function transactionEvaluteFee() {
        $this->setSDKConfigure(0);
        $transaction =  $GLOBALS['sdk']->getTransactionService();

        // Init variable
        $senderAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        $destAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        $amount = \src\common\Tools::RE2XX("0.01");
        if (!$amount) {
            echo "Failed to change amount REXX to mo\n";
            return;
        }
        $nonce = 27;

        // Build BUSendOperation
        $buSendOperation = new \src\model\request\operation\REXXSendOperation();
        $buSendOperation->setSourceAddress($senderAddress);
        $buSendOperation->setDestAddress($destAddress);
        $buSendOperation->setAmount($amount);

        // Init request
        $request = new \src\model\request\TransactionEvaluateFeeRequest();
        $request->setSourceAddress($senderAddress);
        $request->addOperation($buSendOperation);
        $request->setNonce($nonce);
        $request->setCeilLedgerSeq(0);
        $request->setMetadata(bin2hex("evaluate fees"));

        // Call evaluateFees
        $response = $transaction->evaluateFee($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function transactionSign() {
        $this->setSDKConfigure(10);
        $transaction =  $GLOBALS['sdk']->getTransactionService();

        $transactionBlob = "0a24627551666e56596758754d6f3372764345704b4136536652724470617a38443841394561100218c0843d20e8073a5608071224627551666e56596758754d6f3372764345704b4136536652724470617a38443841394561522c0a2462755173757248314d34726a4c6b666a7a6b7852394b584a366a537532723978424e45771080a9e08704";
        $request = new \src\model\request\TransactionSignRequest();
        $request->setBlob($transactionBlob);
        $request->addPrivateKey("rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi");
        $response = $transaction->sign($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function transactionGetInfo() {
        $this->setSDKConfigure(10);
        $transaction =  $GLOBALS['sdk']->getTransactionService();

        $request = new \src\model\request\TransactionGetInfoRequest();
        $hash = "cb25eb0cb1972eea10690f8d002a22ea9af74d1fba42ddf0519e93fd2df15955";
        $request->setHash($hash);
        $response = $transaction->getInfo($request);
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        var_dump($json_response);
    }

    /** @test */
    public function accountActivate() {
        $this->setSDKConfigure(10);

        // The account private key to activate a new account
        $activatePrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        $initBalance = \src\common\Tools::RE2XX("0.1");
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        // Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("0.01");
        // Metadata
        $metadata = "activate new account";

        // 1. Generate a new account to be activated
        $keyPair = new \src\crypto\key\KeyPair();
        $destAddress = $keyPair->getEncAddress();
        echo $keyPair->getEncPrivateKey() . "\n";
        echo $keyPair->getEncPublicKey() . "\n";
        echo $keyPair->getEncAddress() . "\n";

        // 2. Get the account address to send this transaction
        $activateAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($activatePrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($activateAddress) + 1;

        // 3. Build activateAccount
        $activateAccount = new \src\model\request\operation\AccountActivateOperation();
        $activateAccount->setSourceAddress(null);
        $activateAccount->setDestAddress($activateAddress);
        $activateAccount->setInitBalance($initBalance);
        $activateAccount->setMetadata("activate an account(" . $destAddress . ")");

        $operations = array();
        array_push($operations, $activateAccount);

        $privateKeys = array();
        array_push($privateKeys, $activatePrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $activateAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function accountSetMetadata() {
        $this->setSDKConfigure(0);

        // Init variable
        // The account private key to set metadata
        $accountPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // The metadata key
        $key = "test";
        // The metadata value
        $value = "asdfasdfa";
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("0.01");
        // Metadata
        $metadata = "set metadata";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($accountPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build setMetadata
        $setMetadata = new \src\model\request\operation\AccountSetMetadataOperation();
        $setMetadata->setSourceAddress($accountAddress);
        $setMetadata->setKey($key);
        $setMetadata->setValue($value);

        $operations = array();
        array_push($operations, $setMetadata);

        $privateKeys = array();
        array_push($privateKeys, $accountPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function accountSetPrivilege() {
        $this->setSDKConfigure(10);

        // Init variable
        // The account private key to set privilege
        $accountPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // The signer address
        $signerAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The master weight
        $masterWeight = "4294967295";
        // The signer weight
        $signerWeight = 1;
        // The txThreshold
        $txThreshold = "1";
        //
        $typeThreshold = new \src\model\response\result\data\TypeThreshold();
        $typeThreshold->type = 1;
        $typeThreshold->threshold = 10;
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("0.01");
        // Metadata
        $metadata = "set privilege";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($accountPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build setPrivilege
        $setPrivilege = new \src\model\request\operation\AccountSetPrivilegeOperation();
        $setPrivilege->setSourceAddress(null);
        $setPrivilege->setMasterWeight($masterWeight);
        $signer = new \src\model\response\result\data\Signer();
        $signer->address = $signerAddress;
        $signer->weight = $signerWeight;
        $setPrivilege->addSigner($signer);
        $setPrivilege->setTxThreshold($txThreshold);
        $setPrivilege->addTypeThreshold($typeThreshold);

        $operations = array();
        array_push($operations, $setPrivilege);

        $privateKeys = array();
        array_push($privateKeys, $accountPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function assetIssue() {
        $this->setSDKConfigure(10);

        // Init variable
        // The account private key to issue asset
        $issuerPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // The asset code
        $assetCode = "ATP资产";
        // The asset amount
        $assetAmount = "";
        // The txThreshold
        $txThreshold = "1";
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("50.01");
        // Metadata
        $metadata = "issue asset";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($issuerPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build issueAsset
        $issueAsset = new \src\model\request\operation\AssetIssueOperation();
        $issueAsset->setSourceAddress($accountAddress);
        $issueAsset->setCode($assetCode);
        $issueAsset->setAmount($assetAmount);
        $issueAsset->setMetadata($metadata);

        $operations = array();
        array_push($operations, $issueAsset);

        $privateKeys = array();
        array_push($privateKeys, $issuerPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function assetSend() {
        $this->setSDKConfigure(10);

        // The account private key to send asset
        $senderPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // The account to receive asset
        $destAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The asset code
        $assetCode = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The accout address of issuing asset
        $assetIssuer = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The asset amount to be sent
        $assetAmount = 100000;
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("0.01");
        // Metadata
        $metadata = "send asset";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($senderPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build sendAsset
        $sendAsset = new \src\model\request\operation\AssetSendOperation();
        $sendAsset->setSourceAddress(null);
        $sendAsset->setDestAddress($destAddress);
        $sendAsset->setCode($assetCode);
        $sendAsset->setIssuer($assetIssuer);
        $sendAsset->setAmount($assetAmount);
        $sendAsset->setMetadata($metadata);

        $operations = array();
        array_push($operations, $sendAsset);

        $privateKeys = array();
        array_push($privateKeys, $senderPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function rexxSend() {
        $this->setSDKConfigure(10);

        // The account private key to send rexx
        $senderPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // The account to receive rexx
        $destAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The amount to be sent
        $rexxAmount = \src\common\Tools::RE2XX("10");
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("50.01");
        // Metadata
        $metadata = "发送REXX资产";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($senderPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build sendBU
        $sendREXX = new \src\model\request\operation\REXXSendOperation();
        $sendREXX->setSourceAddress($accountAddress);
        $sendREXX->setDestAddress($destAddress);
        $sendREXX->setAmount($rexxAmount);
        $sendREXX->setMetadata($metadata);

        $operations = array();
        array_push($operations, $sendREXX);

        $privateKeys = array();
        array_push($privateKeys, $senderPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function contractCreate() {
        // The account private key to activate a new account
        $activatePrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        $initBalance = \src\common\Tools::RE2XX("0.1");
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        // Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("0.01");
        // Metadata
        $metadata = "activate new account";

        // 1. Get the account address to send this transaction
        $activateAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($activatePrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($activateAddress) + 1;

        // 2. Build activateAccount
        $contractCreate = new \src\model\request\operation\ContractCreateOperation();
        $contractCreate->setSourceAddress($activateAddress);
        $contractCreate->setInitBalance($initBalance);
        $contractCreate->setPayload("123");
        $contractCreate->setMetadata("activate a contract");

        $operations = array();
        array_push($operations, $contractCreate);

        $privateKeys = array();
        array_push($privateKeys, $activatePrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $activateAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function contractInvokeByREXX() {
        // The account private key to send rexx
        $senderPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // The account to receive rexx
        $destAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The amount to be sent
        $rexxAmount = 0;
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("50.01");
        // Metadata
        $metadata = "发送REXX资产";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($senderPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build sendREXX
        $contractInvokeByREXX = new \src\model\request\operation\ContractInvokeByREXXOperation();
        $contractInvokeByREXX->setSourceAddress($accountAddress);
        $contractInvokeByREXX->setContractAddress($destAddress);
        $contractInvokeByREXX->setRexxAmount(null);
        $contractInvokeByREXX->setMetadata($metadata);

        $operations = array();
        array_push($operations, $contractInvokeByREXX);

        $privateKeys = array();
        array_push($privateKeys, $senderPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function contractInvokeByAsset() {
        // The account private key to send asset
        $senderPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // The account to receive asset
        $destAddress = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The asset code
        $assetCode = "";
        // The accout address of issuing asset
        $assetIssuer = "Rexxhrn3JAMgu86hBBBvWJEekypjK1W1q7W5PSV";
        // The asset amount to be sent
        $assetAmount = 100000;
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("50.01");
        // Metadata
        $metadata = "send asset";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($senderPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build sendAsset
        $contractInvokeByAsset = new \src\model\request\operation\ContractInvokeByAssetOperation();
        $contractInvokeByAsset->setSourceAddress(null);
        $contractInvokeByAsset->setContractAddress($destAddress);
        $contractInvokeByAsset->setCode($assetCode);
        $contractInvokeByAsset->setIssuer($assetIssuer);
        $contractInvokeByAsset->setAssetAmount(null);
        $contractInvokeByAsset->setMetadata($metadata);

        $operations = array();
        array_push($operations, $contractInvokeByAsset);

        $privateKeys = array();
        array_push($privateKeys, $senderPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    /** @test */
    public function logCreate() {
        $this->setSDKConfigure(10);

        // The account private key to create log
        $createLogPrivateKey = "rpkvxyFYQu9B159E2H1VL9U4PuaTvmXt9KMhe3zFKD7qcRXxV5qZEsTi";
        // Log topic
        $topic = "test";
        // Log content
        $data1 = "this is not a error";
        $data2 = "this is a log";
        // The fixed write 1000L, the unit is XX
        $gasPrice = 1000;
        //Set up the maximum cost 0.01REXX
        $feeLimit = \src\common\Tools::RE2XX("50.01");
        // Metadata
        $metadata = "create log";

        // 1. Get the account address to send this transaction
        $accountAddress = \src\crypto\key\KeyPair::getEncAddressByPrivateKey($createLogPrivateKey);
        // Transaction initiation account's nonce + 1
        $nonce = $this->getAccountNonce($accountAddress) + 1;

        // 2. Build createLog
        $createLog = new \src\model\request\operation\LogCreateOperation();
        $createLog->setSourceAddress($accountAddress);
        $createLog->setTopic($topic);
        $createLog->addData($data1);
        $createLog->addData($data2);
        $createLog->setMetadata($metadata);

        $operations = array();
        array_push($operations, $createLog);

        $privateKeys = array();
        array_push($privateKeys, $createLogPrivateKey);

        $hash = DigitalAssetDemo::buildBlobAndSignAndSubmit($privateKeys, $accountAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations);
        if ($hash) {
            echo "Submit transaction successfully, hash: " . $hash;
        }
    }

    private function getAccountNonce($accountAddress) {
        $this->setSDKConfigure(10);
        $account = $GLOBALS['sdk']->getAccountService();

        $accountGetNonceRequest = new \src\model\request\AccountGetNonceRequest();
        $accountGetNonceRequest->setAddress($accountAddress);
        $response = $account->getNonce($accountGetNonceRequest);
        if ($response->error_code != 0) {
            return false;
        }
        return $response->result->nonce;
    }

    private function buildBlobAndSignAndSubmit($privateKeys, $sourceAddress, $nonce, $gasPrice, $feeLimit, $metadata, $operations) {
        $this->setSDKConfigure(10);
        $transaction =  $GLOBALS['sdk']->getTransactionService();

        // Build blob
        $buildBlobRequest = new \src\model\request\TransactionBuildBlobRequest();
        $buildBlobRequest->setSourceAddress($sourceAddress);
        $buildBlobRequest->setNonce($nonce);
        $buildBlobRequest->setGasPrice($gasPrice);
        $buildBlobRequest->setFeeLimit($feeLimit);
        $buildBlobRequest->setOperations($operations);
        if (!$metadata) {
            $buildBlobRequest->setMetadata($metadata);
        }

        $buildBlobResponse = $transaction->buildBlob($buildBlobRequest);
        if ($buildBlobResponse->error_code != 0) {
            echo $buildBlobResponse->error_code . ", " . $buildBlobResponse->error_desc . "\n";
            return false;
        }
        echo "blob: " . $buildBlobResponse->result->transaction_blob . "\n";
        $hash = $buildBlobResponse->result->hash;

        // Sign blob
        $signRequest = new \src\model\request\TransactionSignRequest();
        $signRequest->setBlob($buildBlobResponse->result->transaction_blob);
        $signRequest->setPrivateKeys($privateKeys);
        $signResponse = $transaction->sign($signRequest);
        if ($signResponse->error_code != 0) {
            echo $signResponse->error_desc . "\n";
            return false;
        }
        echo "Sign successfully\n";

        // Submit
        $submitRequest = new \src\model\request\TransactionSubmitRequest();
        $submitRequest->setTransactionBlob($buildBlobResponse->result->transaction_blob);
        $submitRequest->setSignatures($signResponse->result->signatures);
        $submitResponse = $transaction->submit($submitRequest);
        if ($submitResponse->error_code != 0) {
            echo json_encode($submitResponse). "\n";
            return false;
        }
        return $hash;
    }
}
