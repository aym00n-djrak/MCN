const nmap = require("node-nmap");
nmap.nmapLocation = "nmap"; //default
let quickscan = new nmap.QuickScan("google.com");
//to fix
