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
	ausername varchar(20) not null,
	apassword varchar(20) not null,
    primary key(ausername)
    -- foreign key(ausername) references admin(ausername)
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
    
create table fixed_car(
	fid int(5),
    cid int(5) not null,
    fdate date not null,
    fmoney int not null,
    primary key(fid),
    foreign key(cid) references car(cid)
    );
	
    
select * from car_rent, car, users, admin
where car_rent.aid = admin.aid and car_rent.cid = car.cid and
car_rent.uid = users.uid;

SELECT * FROM car_rental.car where cstatus = '2';

select setin, money_a, (deposit - deposit_back), (money_a + deposit - deposit_back) from car_rent;

select fdate, fmoney from fixed_car;

-- 创建视图
-- 查询
select fdate, IFNULL(money_a, 0), IFNULL((deposit - deposit_back),0), ifnull((money_a + deposit - deposit_back),0), fmoney
from fixed_car left join car_rent on car_rent.setin = fixed_car.fdate
union
select setin, money_a, (deposit - deposit_back), (money_a + deposit - deposit_back), ifnull(fmoney,0)
from  car_rent left join fixed_car on car_rent.setin = fixed_car.fdate;

create view date_table_one (dates, rent_in, deposit_in, all_in, fixed_out)
as
select fdate, ifnull(money_a, 0), ifnull((deposit - deposit_back),0), ifnull((money_a + deposit - deposit_back),0), fmoney
from fixed_car left join car_rent on car_rent.setin = fixed_car.fdate
union
select setin, money_a, (deposit - deposit_back), (money_a + deposit - deposit_back), ifnull(fmoney,0)
from  car_rent left join fixed_car on car_rent.setin = fixed_car.fdate;

select dates,rent_in, deposit_in, all_in, fixed_out, ( all_in - fixed_out)
from date_table_one
order by dates;

create view date_table (dates, rent_in, deposit_in, all_in, fixed_out, profit)
as
select dates,rent_in, deposit_in, all_in, fixed_out, ( all_in - fixed_out)
from date_table_one
order by dates;

select date_format(dates,'%Y-%m') ,sum(rent_in), sum(deposit_in) , sum(all_in) , sum(fixed_out) , sum(profit)
from date_table
group by date_format(dates,'%Y-%m')
order by date_format(dates,'%Y-%m');

create view month_table (dates, rent_in, deposit_in, all_in, fixed_out, profit)
as
select date_format(dates,'%Y-%m') ,sum(rent_in), sum(deposit_in) , sum(all_in) , sum(fixed_out) , sum(profit)
from date_table
group by date_format(dates,'%Y-%m')
order by date_format(dates,'%Y-%m');

create view year_table (dates, rent_in, deposit_in, all_in, fixed_out, profit)
as
select year(dates) ,sum(rent_in), sum(deposit_in) , sum(all_in) , sum(fixed_out) , sum(profit)
from date_table
group by year(dates)
order by year(dates);

create view sum_table (rent_in, deposit_in, all_in, fixed_out, profit)
as
select sum(rent_in), sum(deposit_in) , sum(all_in) , sum(fixed_out) , sum(profit)
from date_table;

create view quarter_table (years, dates, rent_in, deposit_in, all_in, fixed_out, profit)
as
select year(dates), quarter(dates) ,sum(rent_in), sum(deposit_in) , sum(all_in) , sum(fixed_out) , sum(profit)
from date_table
group by quarter(dates), year(dates)
order by quarter(dates), year(dates);

select  * from car_rent, car, users, admin
            where car_rent.cid = car.cid and
            car_rent.uid = users.uid and admin.aid = car_rent.aid;