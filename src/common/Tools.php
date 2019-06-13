<?php
/**
 * @author zjl <[<email address>]>
 */
namespace src\common;

use \src\crypto\JsonMapper\JsonMapper;
use \src\exception\SDKException;

class Tools{ 
    /**
     * [isEmpty description]
     * @param  [type]  $info [description]
     * @return boolean       [description]
     */
   static public function isEmpty($info){
        if(empty($info)) {
            return true;
        }
        else {
            return false;
        }   
   }

   /**
    * [isNULL description]
    * @param  [type]  $info [description]
    * @return boolean       [description]
    */
   static public function isNULL($info){
        if(!isset($info)  || is_null($info)) {
            return true;
        }
        else {
            return false;
        }   
   }

    /**
     * unitWithoutDecimals Change unitWithDecimals to unitWithoutDecimals
     * @param  [string]  $unitWithDecimals
     * @param  [int]  $decimals
     * @return int
     */
   static public function unitWithoutDecimals($unitWithDecimals, $decimals){
       if (is_string($unitWithDecimals) || !is_int($unitWithDecimals) || $unitWithDecimals < 0 ||
           is_string($decimals) || !is_int($decimals) || $decimals > 18 || $decimals < 0) {
           return false;
       }
       $unitWithoutDecimals = bcdiv($unitWithDecimals, pow(10, $decimals), $decimals);
       return $unitWithoutDecimals;
   }

    /**
     * unitWithDecimals Change $unitWithoutDecimals to unitWithDecimals
     * @param  [string]  $unitWithoutDecimals
     * @param  [int]  $decimals
     * @return string
     */
   static public function unitWithDecimals($unitWithoutDecimals, $decimals){
       if (!is_string($unitWithoutDecimals) || !is_numeric($unitWithoutDecimals) || bccomp($unitWithoutDecimals, '0') < 0 ||
           is_string($decimals) || !is_int($decimals) || $decimals > 18 || $decimals < 0) {
           return false;
       }
       $unitWithDecimals = (int)bcmul($unitWithoutDecimals, pow(10, $decimals));
       return $unitWithDecimals;
   }

    /**
     * RE2XX Change rexx to XX
     * @param  [string]  $rexx
     * @return int
     */
   static public function RE2XX($rexx) {
        return Tools::unitWithDecimals($rexx, 8);
   }

    /**
     * MO2BU Change mo to rexx
     * @param  [int]  $xx
     * @return string
     */
   static public function XX2RE($xx) {
       return Tools::unitWithoutDecimals($xx, 8);
   }

   static public function jsonToClass($json, $class) {
       try {
           $mapper = new JsonMapper();
           $mapper->bStrictNullTypes = false;
           $resultObject = json_decode($json);
           $classContent = $mapper->map($resultObject, $class);
       }
       catch (\Exception $exception) {
           throw new SDKException("SYSTEM", $exception->getMessage());
       }
       return $classContent;
   }

   static public function jsonArrayToClassArray($jsonArray, $className) {
       try {
           $mapper = new JsonMapper();
           $mapper->bStrictNullTypes = false;
           $resultObject = json_decode($jsonArray);
           $classContent = $mapper->mapArray($resultObject, array(), $className);
       }
       catch (\Exception $exception) {
           throw new SDKException("SYSTEM", $exception->getMessage());
       }
       return $classContent;
   }
}