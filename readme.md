# logApp-scaling-octo

This repo is for Practice Set 5-06

### Test Accounts

- Username: test, Password: 1234 (Account type: admin)
- Username: john, Password: 12345 (Account type: guest)

---

Passwords are hashed before it is compared to the password hash stored in the database.

---

### Database

The database used is mysql.

#### Backup

Import the file ".\DelgadoCabitac_logappdbbackup.sql" (MySQL Workbench)

### Tables:

#### Person

-pid int AI PK

-lastname varchar(45)

-firstname varchar(45)

-address varchar(45)

-logdt datetime

#### Account

-acc_id varchar(45) PK

-username varchar(45)

-password_hash varchar(100)

-acc_type varchar(45)
"# logApp-Cabitac" 
