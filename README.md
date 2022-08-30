# COSC349 Assignment 1  
  
## Vagrant Configuration  
This vagrant project sets up 3 VMs in Virtualbox.  
1. Webserver - Running Apache serving PHP scripts  
2. Dbserver - Running MySQL database  
3. Posserver - Running phpMyAdmin through Apache  
  
## Setup Vagrant  
To setup vagrant clone this repo and cd into the root of this repo  
After you have done that run the following command to lanuch vagrant to setup the virtual machines  
`` vagrant up ``  
  
There is no need for manual interaction, the setup process is fully automated.  
   
## Interacting with VMs  
The webserver is hosted on http://127.0.0.1:8080  
The posserver is hosted on http://127.0.0.1:8181/phpmyadmin  
You can interact with dbserver by ssh into dbserver
  
## User accounts  
There are 2 MySQL accounts setup on dbserver  
  
- webuser  
    - username: webuser  
    - password: insecure_db_pw  
  
- posuser  
    - username: posuser  
    - password: posaccount  
  
You can use any of these accounts to sign into phpMyAdmin, they currently have both the same permissions.
