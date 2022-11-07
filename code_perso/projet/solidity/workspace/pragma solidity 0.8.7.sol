pragma solidity 0.8.7;

contract test2;

    struct wallet {
        uint balance;
        uint numPayments;
    }
    
    mapping(address => waallet) Wallets;

    function getotalBalance() public view returns(uint) {
        return address(this).balance;
    }
