install_solc("0.6.0")
from solcx import compile_standard, install_solc



with open("./SimpleStorage.sol", "r") as file:
    simple_storage_file = file.read()
    print(simple_storage_file)
 
 compiled_sol = compile_standard(
     "language": "Solidity"
 )