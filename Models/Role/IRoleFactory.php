<?php
namespace Models\Role;
interface IRoleFactory {
    public function setIdentifier($id):void;
    public function setName($name):void;
    public function setAddress($address):void;
    public function setPersonInCharge($personInCharge):void;
    public function setTelephoneNumber($telephoneNumber):void;
    public function setFacsimileNumber($facsimileNumber):void;
    public function setEmailAddress($emailAddress):void;
    public function setCustomerNumber($customerNumber):void;
    public function setRoleRemark($roleRemark):void;
    public function create():RoleModel;
}