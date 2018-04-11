# ---------------------------------------------------------------------- #
# Target DBMS:           MySQL 5                                         #
# Project name:          Sports Warehouse                                #
# Author:                Hao Chen                                        #
# Created on:            2018-04-10 00:00                                # 
# ---------------------------------------------------------------------- #

DROP DATABASE IF EXISTS SportsWarehouse;

CREATE DATABASE SportsWarehouse;

USE SportsWarehouse;

# ---------------------------------------------------------------------- #
# Tables                                                                 #
# ---------------------------------------------------------------------- #
# ---------------------------------------------------------------------- #
# Add table "Category"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE IF NOT EXISTS category(
category_id         INT(11) NOT NULL AUTO_INCREMENT,
category_name       VARCHAR(512),
PRIMARY KEY (category_id)
);

# ---------------------------------------------------------------------- #
# Add table "Item"                                                       #
# ---------------------------------------------------------------------- #

CREATE TABLE IF NOT EXISTS item(
item_id             INT(11) NOT NULL AUTO_INCREMENT,
item_name           VARCHAR(512) NOT NULL,
item_photo          VARCHAR(20),
item_price          DECIMAL(9,2),
item_saleprice      DECIMAL(9,2) NOT NULL,
item_description    TEXT,
item_featured       BOOLEAN,
item_categoryid     INT(11) NOT NULL,
PRIMARY KEY (item_id));

ALTER TABLE item ADD CONSTRAINT item_cate_fk FOREIGN KEY (item_categoryid) REFERENCES category(category_id);


# ---------------------------------------------------------------------- #
# Info                                                                   #
# ---------------------------------------------------------------------- #
USE SportsWarehouse;
# ---------------------------------------------------------------------- #
# Add info into "Category"                                               #
# ---------------------------------------------------------------------- #

INSERT INTO category VALUES (01,'shoes');
INSERT INTO category VALUES (02,'helmets');
INSERT INTO category VALUES (03,'pans');
INSERT INTO category VALUES (04,'tops');
INSERT INTO category VALUES (05,'balls');
INSERT INTO category VALUES (06,'equipment');
INSERT INTO category VALUES (07,'gear');

# ---------------------------------------------------------------------- #
# Add info into "Item"                                                   #
# ---------------------------------------------------------------------- #

INSERT INTO item VALUES (1001,'Adidas Finale 17 Cap Soccer Ball','1001.jpg',46.00,34.95,"Styled After The Official Match Ball Of Europe's Premier Tournament, This Quality Ball Is Decorated With An Eye-Catching Print Of The Iconic Star-Panel Design. Machine Stitched For A Long Life.",TRUE,05);
INSERT INTO item VALUES (1002,'Harsh Pro EPS Skate Helmet','1002.jpg',NULL,70.00,'Harsh PRO A super EPS tested helmet from Harsh, This HX1 Black model is very lightweight and durable, perfect for boys and girls. This great helmet from Harsh is EPS tested to comply with the safety industry standard certificates. With their new "overmold" technology the helmet shell and EPS foam that is injected into the mold, gives no gaps, no deterioration and a phenomenal weight.',TRUE,02);
INSERT INTO item VALUES (1003,'Nike Sport 600ml Water Bottle','1003.jpg',17.50,15.00,'Nike Sport Water Bottle - Brt Crimson',TRUE,06);
INSERT INTO item VALUES (1004,'Red Corner Womens Bout Boxing Glove','1004.jpg',NULL,79.95,'Red Corner Womens Bout Boxing Glove-Black. Tapered glove shape is designed for women to reduce movement and minimise hand fatigue. Outside layer is soft embossed polyurethane. The protective padding has 3 layers of closed cell and air cell foam.',TRUE,07);
INSERT INTO item VALUES (1005,'Asics Gel Lethal Tigreor 10 IT Football Boots','1005.jpg',NULL,160,'The GEL-Lethal Tigreor 10 IT is premium football boot/shoe designed for players wanting the best. Not only does it carry over all the excellent shoe tech from the previous model, such HG10mm (raising the heel by 10mm to minimise injury). Dual Density Outsole (for excellent durability).',TRUE,01);
INSERT INTO item VALUES (1006,'Adidas Predator 18.1 Firm Ground Senior Football Boot','1006.jpg',NULL,249.95,"It's your ball. Your move. Your chance to prove it. Create what opponents can only imagine. Control what they think they own. It's your pitch. Your crowd. With Predator, you master control. These football boots have a knit upper that provides superior ball control and a stretchy adidas Primeknit collar for ease of entry. The outsole is designed for firm ground.",FALSE,01);
INSERT INTO item VALUES (1007,'Classic Brumbies Adult Home Jersey 2018','1007.jpg',NULL,94.95,'Classic Brumbies Adult Home Jersey 2018',FALSE,04);
INSERT INTO item VALUES (1008,'ISC Brisbane Broncos Adults 2018 Home Jersey','1008.jpg',NULL,94.95,'ISC Brisbane Broncos Adults 2018 Home Jersey',FALSE,04);
INSERT INTO item VALUES (1009,'ISC Brisbane Broncos Adults 2018 Training Singlet','1009.jpg',NULL,94.95,'ISC Brisbane Broncos Adults 2018 Training Singlet',FALSE,04);
INSERT INTO item VALUES (1010,'ISC Canberra Raiders Adults 2018 Training Singlet','1010.jpg',94.95,74.95,'ISC Canberra Raiders Adults 2018 Training Singlet',FALSE,04);
INSERT INTO item VALUES (1011,'ISC Queensland State Of Origin Adults Jersey 2018','1011.jpg',94.95,74.95,'ISC Queensland State Of Origin Adults Jersey 2018',FALSE,04);
INSERT INTO item VALUES (1012,'Nike Air Max Infuriate Mens Basketball Shoe','1012.jpg',NULL,114.95,"Designed for stability and containment with a cushioned feel, the Men's Nike Air Max Infuriate Low Basketball Shoe locks your foot down using full-length Flywire cables. A 180-degree Max Air unit in the heel helps cushion impact while a phylon midsole provides a comfortable ride.",FALSE,01);
INSERT INTO item VALUES (1013,'Nike Alpha Medium Training Duffel Bag','1013.jpg',NULL,64.95,"Men's Nike Alpha (Medium) Training Duffel Bag has an adjustable side clip that allows you to turn it into a convenient cross-body shoulder bag for easy, out-of-the-way carrying like a backpack.",FALSE,06);
INSERT INTO item VALUES (1014,'Nike Mens Sportswear Futura HBR 1 Tee','1014.jpg',NULL,34.95,'Nike Mens Sportswear Futura HBR 1 Tee',FALSE,04);
INSERT INTO item VALUES (1015,'Nike Mesh Daybreak Running Cap','1015.jpg',NULL,34.95,'Nike Mesh Daybreak Running Cap',FALSE,06);
INSERT INTO item VALUES (1016,'Nike Team Hustle D 8 GS Boys Basketball Shoe','1016.jpg',NULL,34.95,"Boys' Nike Team Hustle D 8 (GS) Basketball Shoe is built with a leather upper integrated with foam-backed mesh for comfort. A midfoot strap locks your foot down, while a lightweight, flexible foam midsole provides toe-to-heel cushioning.",FALSE,01);
INSERT INTO item VALUES (1017,'Nike Zoom Assersion Mens Basketball Shoe','1017.jpg',NULL,34.95,"Men's Nike Zoom Assersion Basketball Shoe allows you to engage every part of your foot with a micro traction pattern that wraps up the sides. An engineered mesh forefoot band integrates with Flywire technology to keep you locked in during multidirectional movement.",FALSE,01);
INSERT INTO item VALUES (1018,'Skins A400 Series Mens Compression Long Tights','1018.jpg',NULL,199.95,'Our SKINS A400 Men’s Long Tights are constructed using five different technical fabrics and 24 individual panels. These panels follow the natural lines of your muscles and tendons with the seams placed to act as anchor points, offering focused support and stability to major muscle groups.',FALSE,03);
INSERT INTO item VALUES (1019,'Spalding WNBL Game Ball Indoor Size 7 Basketball','1019.jpg',NULL,134.95,'The Spalding WNBL Official Game Ball features a new and improved design with exclusive ZK cover material for advanced moisture management and improved dry and wet grip. The soft carcass and channel design allows for improved grip and control.',FALSE,05);
INSERT INTO item VALUES (1020,'Sydney City Roosters Adults Home Jersey','1020.jpg',NULL,94.95,'Sydney City Roosters Adults Home Jersey',FALSE,04);
INSERT INTO item VALUES (1021,'Red Corner Womens Silver Label Focus Kit-Feathers','1021.jpg',NULL,149.95,'Focus kits combine the punch mitt and focus pads together so you can train with a partner. Good focus pads will fit well and feel like an extension of your arm and hand. A well crafted focus pad will have a small ball in the palm which feels snug and means the user doesn’t have to worry about the pad flying off when struck. Adjustable straps at the back of the pad help keep it also in place.',FALSE,07);
