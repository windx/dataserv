<?php
$ds = new DataServ();

$ds->sethost("127.0.0.1");
$ds->setuser("root");
$ds->setpasswd("root");
$ds->setdb("pw8");

$ds->settable("pw_house_agency");
$ds->setfields(
	  array("agencyid"=>"",
                "name"=>array("int",20,50),
                "address"=>array("int",20,50),
	        "icon"=>"icon",
                "bgimg"=>"bgimg",
	        "mainbusiness"=>1,
                "adminname"=>"admin",
		"isopen"=>1,
		"vieworder"=>1
          )
);
$ds->create(1,1);
$ds->loaddata();
