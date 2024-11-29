/****************************************************************************************
    Problem Name: 1108. Defanging an IP Address
    Problem Link: https://leetcode.com/problems/defanging-an-ip-address/description/
*****************************************************************************************/


function defangIPaddr(address: string): string {
    return address.split(".").join("[.]");
};

/* function defangIPaddr(address: string): string {
    return address.replaceAll(".", "[.]");
}; */


console.warn(defangIPaddr("1.1.1.1"));