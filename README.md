# LabNotes
## Steps To folow to setup Electronic-labnotebook :-

Summary: E-lab notebook, which is hosted in NCBS, is based on DRUPAL CMS and it is installed on a LAMP server.

### Major Version : DRUPAL 7

> 1. LAMP Server installation [Please follow any link from google to install Linux OS,Apache, Mysql,PHP]

> 2. Please install a drupal installtion in the webserver.
Link: https://www.drupal.org/docs/7/install

> 3. Import the Code files and database to the newly installed drupal installation.
> 4. Do the changes required as per your Institute/Lab requirement.

### Kindly install the database and copy the source code files to /var/www/html/ or websites path after the installation of LAMP, MySQL and Drupal.

Example: Site name change, admin email-id and password change.

username:  **admin**  
password: **ElectronicLABnotebook@20!9**

test user for Faculty's Lab  [Where "Faculty's Lab" is an example to "Dr. Ramesh Lab"]  
username : **test-user1-facilty**  
password: **test12**

> 5. Please follow these steps to setup a new e-labnote/Faculty’s LAB in the newly installed elabnotebook. Steps to setup new labnote for a faculty.

> a) Go to **Structure -> types Export/import** links available

> b)  Click Export

copy text and change the content type machine name and then import again.

> c) Create faculty role and faculty account

> d) Assign permission to that role for accessing those content type(View own, view any, edit own).

> e) In "content type-faculty" post , map content type with the respective faculty. (For notification of New/Seen setup)

> f) In **Administration » Structure » Blocks -> In footer block** - "site_name_based_on_role" block, add code for the newly created role with that faculty name to show up in the website name.

> g) In **Administration » Configuration » User interface -> Jammer** - to remove revision log, select those content type.

> h) In **People->permissions -> roles-> faculty_role** - give permission to create and edit own to the newly created role.

> i) In **People->permissions -> roles-> faculty_role** - give search permission only to search content related to their lab

> j) In **Administration » Structure » Blocks -> Lab Members** , select the new faculty role to access the block.


-----------------------------------------------End------------------------------

Note: - We will NOT include any copyright material or sensitive information (like email address) into this repository. Due to privacy reasons, We could not extend further help in Installation/Configuration of Labnotes. 

Any such request will not be entertained. User has to arrange setup their own server.
