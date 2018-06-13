create table users(
	uid int(5) auto_increment,   -- 自增
    uname varchar(10) not null,
    uidnum varchar(20) not null,
	utel varchar(20) not null,
	ulicese varchar(15) not null,
	uage int,
	isvip varchar(2) not null,
    primary key(uid)
    );

create table users_login(
	uid int(5),
	username varchar(20) not null,
	upassword varchar(20) not null,
    primary key(uid),
    foreign key(uid) references  users(uid)
    );
    
create table car(
	cid int(5) auto_increment,
	cplant varchar(20) not null,
	cbrand varchar(20) not null,
	cmodel varchar(20) not null,
	ccolor varchar(20),
	cvolume varchar(20),
	cdate date,
	coil varchar(20) not null,
	cstate int not null,
	crent int not null,
	cnote varchar(100),
    primary key(cid)
    );
    
create table admin(
	aid int(5) auto_increment,
	aname varchar(20) not null,
	aposition varchar(20) not null,
	aidnum varchar(20) not null,
    primary key(aid)
    );
    
create table admin_login(
	aid int(5),
	ausername varchar(20) not null,
	apassword varchar(20) not null,
    primary key(aid),
    foreign key(aid) references admin(aid)
    );
    
create table car_rent(
	contractid int(5) auto_increment,
	cid int(5),
	uid int(5),
	aid int(5),
	conditions varchar(10) not null,
	deposit int not null,
	money_b int not null,
	money_a int,
	setout datetime not null,
	setin datetime,
	state int,
	deposit_back int,
	fine int,
	note varchar(100),
    primary key(contractid),
    foreign key(cid) references car(cid),
    foreign key(uid) references users(uid),
    foreign key(aid) references admin(aid)
    );




