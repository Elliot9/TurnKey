<?php
namespace Models\Role;
require __DIR__ . '/../../vendor/autoload.php';

class Seller extends RoleModel {
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

