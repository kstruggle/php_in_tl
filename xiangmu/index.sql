create table title (
  id int PRIMARY KEY auto_increment,
  title VARCHAR (10) NOT NULL
);

INSERT INTO title VALUES (null,'尼玛1'),(null,'尼玛2'),(null,'尼玛3'),(null,'尼玛4'),(null,'尼玛5'),(null,'尼玛6'),(null,'尼玛7'),(null,'尼玛8'),(null,'尼玛9'),(null,'尼玛10');

INSERT into title VALUES (null,'尼玛11'),(null,'尼玛12'),(null,'尼玛13'),(null,'尼玛14'),(null,'尼玛15'),(null,'尼玛16');



SELECT * form contents WHERE title = $titleid;

create table contents (
  id int PRIMARY KEY auto_increment,
  titleid int NOT NULL,
  contents VARCHAR (20)
);

INSERT INTO contents VALUES (null,1,'我去1'),(null,2,'我去2'),(null,3,'我去3'),(null,4,'我去4'),(null,5,'我去5'),(null,6,'我去6'),(null,7,'我去7'),(null,8,'我去8'),(null,9,'我去9'),(null,10,'我去10'),(null,11,'我去11'),(null,12,'我去12'),(null,13,'我去13'),(null,14,'我去14'),(null,15,'我去15'),(null,16,'我去16');
INSERT INTO contents VALUES (null,1,'我去kkk'),(null,2,'我去kkk'),(null,3,'我去kkk'),(null,4,'我去kkk'),(null,5,'我去kkk'),(null,6,'我去kkk'),(null,7,'我去kkk'),(null,8,'我去kkk'),(null,9,'我去kkk'),(null,10,'我去kkk'),(null,11,'我去kkk'),(null,12,'我去kkk'),(null,13,'我去kkk'),(null,14,'我去kkk'),(null,15,'我去kkk'),(null,16,'我去kkk');






