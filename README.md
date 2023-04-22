# DB-Project-Repo
This is the GitHub repo for Team 1's Medical Clinic Database front-end application, containing the files necessary to run the database website.

1) Files

1.1) Database Connection

The file connectToTheDB.php allows for the the front-end application to connect to the database, allowing for insertion, modification, and deletion of data. Any file which requires a connection to the database includes this file.

1.2) Login

Login.php, Login.inc.php, and Login.css create the login web page. Login.php also links to Register.php, RegisterPAT.php, and Register.css, which create the webpage allowing for the registration of a new user account in the database.

1.3) Register

1.4) Patients

The main web page of the patient's view is comprised by patient.php, patient.css, and patient.js.

The patient's web page allows for the patient to view, change, and delete appointments as well as viewing their medical history. Viewing medical history is accomplished by the viewMedicalHistory.php file while viwing appointments is accomplished by viewAppointments.php. Changing appointments is done through changeAppointment.php and changeAppointmentSucc.php, with the latter file connecting to the database using the input provided in the former. Lastly, deleting appointments is with deleteAppointment.php and deleteAppointmentSucc.php.

1.5) Doctors

The doctor web page is created by Doc.php, using doc_script.js and doc_style.css to view inventory, patients, and schedule, as well as for the addition of inventory and patient's medical history, the modification of medical history, ordering inventory, and deletion of inventory.

Viewing inventory, patients, and schedule are accomplished by show_inv.php, show_patients.php, and show_schedule.php respectively.

addinv.php and addMH.php allow for the creation of new tuples in the database for the inventory and medical history tables respectively, both connected by the addInvSucc.php and addMHSucc.php files.

Modifying medical history is done through changeMH.php, changeMHDetail.php, and changeMHDetailSucc.php and the deletion of inventory is accompplished by deleteInv.php and deleteInvSucc.php.

1.6) CEO

The CEO web page consists of the following files: CEO.php, ceo_script.js, and ceo_style.css. 

The web page allows for the creation, modification, and deletion of offices and departments as well as generating the report made possible by the following files: office_report.php, office_create.php, office_create2.php, office_delete.php, office_delete_succ.php, office_update.php, office_update2.php, department_create.php, department_create2.php, department_delete.php, department_delete_succ.php, department_update.php, and department_update2.php. 

The CEO web page also has access to pulling a report for doctors, as well as the creation, modification, and deletion of physicians and specialists with the following files: doctor_report.php, changePhysician.php, changeSpecialist.php, createPhysician.php, createPhysicianSucc.php, createSpecialist.php, createSpecialistSucc.php, deletePhysician.php, deletePhysicianSucc.php, deleteSpecialist.php, deleteSpecialistSucc.php, updatePhysician2.php, and updateSpecialist2.php. 

Lastly, the CEO web page's revenue report is made possible by revenue_report.php and revenue_report2.php.

2) Installation
