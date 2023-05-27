####Database config#### 

########################## got to useraccounts and create OR 
CREATE USER 'hemanth1'@'%' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'hemanth1'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 
##########################

dbname = studentdb 
dbuser = hemanth1
dpassword = hemanth1user 

#########################   
create table student_details(
id bigint(20) not null primary key AUTO_INCREMENT,
name varchar(255) not null,
totalmarks float(50) not null, 
phonenumber int(13) not null 
)
##########################

ALTER TABLE student_details AUTO_INCREMENT=10001; 


###SAMPLE INSERT DATA### 
INSERT INTO `student_details` (`id`, `name`, `totalmarks`, `phonenumber`) VALUES (NULL, 'prabhu', '75.3', '8133788990'); 

INSERT INTO `student_details` (`id`, `name`, `totalmarks`, `phonenumber`) 
VALUES (NULL, 'madhi', '83.4', '8718399333'),(NULL, 'fazil', '88.8', '9011884478');



