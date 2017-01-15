create database registration charset utf8 collate utf8_unicode_ci;
use registration;

create table tbluser(
    fldid int AUTO_INCREMENT,
    fldfname varchar(255),
    fldlname varchar(255),
    fldname_father varchar(255),
    fldid_sh varchar(50),
    fldnational_code varchar(50),
    fldbirth_day varchar(20),
    fldbirth_place varchar(300),
    fldreligion varchar(255),
    fldmarital_status tinyint,
    fldsex tinyint,
    fldmalitary tinyint,
    flddate_time_work varchar(3000),
    fldaddress_location varchar(3000),
    fldaddress_workplace varchar(3000),
    fldaddress_location_phone varchar(20),
    fldaddress_workplace_phone varchar(20),
    fldemail varchar(600),
    fldmobile varchar(20),
    create_at datetime,
    update_at datetime DEFAULT CURRENT_TIMESTAMP ON Update CURRENT_TIMESTAMP,
    primary key(fldid)
    );

create table tblacademic_status(
    fldid int AUTO_INCREMENT,
    fldlevel varchar(255),
    fldfield varchar(255),
    fldtendency varchar(300),
    flduniversity varchar(300),
    fldgpa float,
    flddate_start varchar(50),
    flddate_end varchar(50),
    create_at datetime,
    update_at datetime default current_timestamp on update current_timestamp,
    fldtbluser_id int,
    primary key (fldid),
    foreign key(fldtbluser_id) references tbluser(fldid)
    );

create table tbldepartment(
    fldid int AUTO_INCREMENT,
    fldgroup varchar(255),
    fldlevel varchar(255),
    create_at datetime,
    update_at datetime default current_timestamp on update current_timestamp,
    primary key (fldid)
    );

create table tblcourse(
    fldid int AUTO_INCREMENT,
    fldname varchar(255),
    fldtbldeparment_id int,
    create_at datetime,
    update_at datetime default current_timestamp on update current_timestamp,
    primary key (fldid),
    foreign key(fldtbldeparment_id) references tbldepartment(fldid)
    );

create table tblchoosecourse(
    fldid int AUTO_INCREMENT,
    fldtblcourse_id int,
    fldtbluser_id int,
    create_at datetime,
    update_at datetime default current_timestamp on update current_timestamp,
    primary key (fldid),
    foreign key(fldtblcourse_id) references tblcourse(fldid),
    foreign key(fldtbluser_id) references tbluser(fldid)
    );
    
create table tblteaching_experience(
    fldid int AUTO_INCREMENT,
    flduniversity varchar(255),
    fldname_course varchar(255),
    fldyear varchar(50),
    create_at datetime,
    update_at datetime default current_timestamp on update current_timestamp,
    primary key (fldid)
    );

create table tblemployement_record(
    fldid int AUTO_INCREMENT,
    fldname_company varchar(255),
    fldside varchar(255),
    flddate_start varchar(50),
    flddate_end varchar(255),
    create_at datetime,
    update_at datetime default current_timestamp on update current_timestamp,
    primary key (fldid)
);

create table tblresearch_activies(
    fldid int AUTO_INCREMENT,
    fldtitle varchar(300),
    fldplace_publication varchar(450),
    flddate_publication varchar(50),
    create_at datetime,
    update_at datetime default current_timestamp on update current_timestamp,
    primary key (fldid)
);