<?php
/**
 * User: zjl
 * Date: 2018/08/08 10:00
 */
namespace src\model\request\operation;
use src\model\request\operation\BaseOperation;
use src\common\OperationType;

class ContractInvokeByREXXOperation extends BaseOperation {
    private  $contractAddress; //Longll
    private  $rexxAmount; //Long
    private  $input; //Long

    public function __construct() {
        $this->operationType = OperationType::CONTRACT_INVOKE_BY_REXX;
    }

    /**
     * 
     */
    public function getOperationType() {
        return $this->operationType;
    }

    /**
     * @return mixed
     */
    public function getContractAddress() {
        return $this->contractAddress;
    }

    /**
     * @param mixed $contractAddress
     *
     * @return self
     */
    public function setContractAddress($contractAddress) {
        $this->contractAddress = $contractAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRexxAmount() {
        return $this->rexxAmount;
    }

    /**
     * @param mixed $rexxAmount
     *
     * @return self
     */
    public function setRexxAmount($rexxAmount) {
        $this->rexxAmount = $rexxAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInput() {
        return $this->input;
    }

    /**
     * @param mixed $input
     *
     * @return self
     */
    public function setInput($input) {
        $this->input = $input;
        return $this;
    }
}
?>
