<?php
namespace Models\Role;
define('RAD_NUM',str_pad(rand(0000,9999),4,'0',STR_PAD_LEFT));

class Buyer extends RoleModel {
    const IDENTIFIER_WITHOUT_SET = '0000000000';
    const NAME_WITHOUT_SET = RAD_NUM;
    public function __construct($identifier, $name, $address = null, $personInCharge = null, $telephoneNumber = null, $facsimileNumber = null, $emailAddress = null, $customerNumber = null, $roleRemark = null) {
        $this->identifier = $identifier;
        $this->name = $name;
        $this->address = $address;
        $this->personInCharge = $personInCharge;
        $this->telephoneNumber = $telephoneNumber;
        $this->facsimileNumber = $facsimileNumber;
        $this->emailAddress = $emailAddress;
        $this->customerNumber = $customerNumber;
        $this->roleRemark = $roleRemark;
    }
}