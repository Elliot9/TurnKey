<?php
namespace Models\Role;
class BuyerFactory implements IRoleFactory {
    private $identifier;
    private $name;
    private $address;
    private $personInCharge;
    private $telephoneNumber;
    private $facsimileNumber;
    private $emailAddress;
    private $customerNumber;
    private $roleRemark;

    public function setIdentifier($id): void {
        $this->identifier = $id;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setPersonInCharge($personInCharge): void {
        $this->personInCharge = $personInCharge;
    }

    public function setTelephoneNumber($telephoneNumber): void {
        $this->telephoneNumber = $telephoneNumber;
    }

    public function setFacsimileNumber($facsimileNumber): void {
        $this->facsimileNumber = $facsimileNumber;
    }

    public function setEmailAddress($emailAddress): void {
        $this->emailAddress = $emailAddress;
    }

    public function setCustomerNumber($customerNumber): void {
       $this->customerNumber = $customerNumber;
    }

    public function setRoleRemark($roleRemark): void {
        $this->roleRemark = $roleRemark;
    }

    public function create(): RoleModel {
        $buyer = new Buyer($this->identifier ?? Buyer::IDENTIFIER_WITHOUT_SET, $this->name ?? Buyer::NAME_WITHOUT_SET, $this->address, $this->personInCharge, $this->telephoneNumber, $this->facsimileNumber, $this->emailAddress, $this->customerNumber, $this->roleRemark);
        return $buyer;
    }

}