#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Program
#------------------------------------------------------------

CREATE TABLE Program(
        id              int (11) Auto_increment  NOT NULL ,
        thumbnail_image Varchar (25) NOT NULL ,
        title           Varchar (25) NOT NULL ,
        event_date      Date NOT NULL ,
        subtitle        Varchar (25) ,
        description     Longtext NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Jazz_News
#------------------------------------------------------------

CREATE TABLE Jazz_News(
        id          int (11) Auto_increment  NOT NULL ,
        news_date   Date ,
        title       Varchar (25) NOT NULL ,
        description Varchar (25) NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Jazz_Blog
#------------------------------------------------------------

CREATE TABLE Jazz_Blog(
        id              int (11) Auto_increment  NOT NULL ,
        thumbnail_image Varchar (25) ,
        author          Varchar (25) NOT NULL ,
        description     Longtext ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Auditors_treasure
#------------------------------------------------------------

CREATE TABLE Auditors_treasure(
        id                int (11) Auto_increment  NOT NULL ,
        last_name         Varchar (25) NOT NULL ,
        first_name        Varchar (25) NOT NULL ,
        age               Int NOT NULL ,
        email             Varchar (25) NOT NULL ,
        zip_code          Int NOT NULL ,
        phone_number      Int NOT NULL ,
        track_title       Varchar (25) NOT NULL ,
        record            Varchar (25) ,
        artist_name       Varchar (25) NOT NULL ,
        year              Int NOT NULL ,
        label             Varchar (25) ,
        track_description Longtext ,
        file              Varchar (25) NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;

