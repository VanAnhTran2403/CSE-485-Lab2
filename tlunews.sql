create table users (
	id INT,
	username VARCHAR(50),
	password VARCHAR(50),
	role VARCHAR(50)
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE news (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    image VARCHAR(255),
    created_at DATETIME,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

insert into users (id, username, password, role) values (1, 'ekeighley0', 'vS4nFpm9VV.jDRHO', 'Construction Manager');
insert into users (id, username, password, role) values (2, 'charhoff1', 'iV4KAjY/wJpC', 'Subcontractor');
insert into users (id, username, password, role) values (3, 'kdakhov2', 'hW5d8O)S`i/@!', 'Architect');
insert into users (id, username, password, role) values (4, 'adelooze3', 'nV3basaWZR+C', 'Construction Worker');
insert into users (id, username, password, role) values (5, 'rfarney4', 'qU0(iK)jZUq', 'Surveyor');
insert into users (id, username, password, role) values (6, 'mdenziloe5', 'aI5J~lt!', 'Engineer');
insert into users (id, username, password, role) values (7, 'laveries6', 'nE7y0Q=lMW$oX)*', 'Surveyor');
insert into users (id, username, password, role) values (8, 'cmaingot7', 'rK7D1z9p{e#''x', 'Construction Foreman');
insert into users (id, username, password, role) values (9, 'aterrazzo8', 'sO7gKrC>~Z''1<', 'Subcontractor');
insert into users (id, username, password, role) values (10, 'hberrill9', 'hX6yeWPXU}(nH0', 'Electrician');
insert into users (id, username, password, role) values (11, 'jhrynczyka', 'qO7EpxU4dJ|_"', 'Estimator');
insert into users (id, username, password, role) values (12, 'yblackfordb', 'xR4H2N}a', 'Construction Expeditor');
insert into users (id, username, password, role) values (13, 'faldousc', 'tO9>ox(Fxt', 'Construction Foreman');
insert into users (id, username, password, role) values (14, 'jrennockd', 'gV7KaYgoyt6pJl', 'Estimator');
insert into users (id, username, password, role) values (15, 'freinbeche', 'xQ1pXjHO', 'Construction Foreman');
insert into users (id, username, password, role) values (16, 'cspacyf', 'lH4Ce@@6nlsI', 'Construction Expeditor');
insert into users (id, username, password, role) values (17, 'wlombardog', 'dE8mYB1gPx`O', 'Subcontractor');
insert into users (id, username, password, role) values (18, 'chairsineh', 'cT7tM<%rr', 'Construction Foreman');
insert into users (id, username, password, role) values (19, 'ielsomi', 'hZ0FuIC(g''{A/xX''', 'Architect');
insert into users (id, username, password, role) values (20, 'jclaypoolj', 'qM8rUdsw>`11a~6', 'Construction Expeditor');
insert into users (id, username, password, role) values (21, 'dnewberyk', 'bP0hWV{Ty', 'Construction Expeditor');
insert into users (id, username, password, role) values (22, 'lduchateaul', 'kT5aoLB{)uz#jw', 'Subcontractor');
insert into users (id, username, password, role) values (23, 'pgomersallm', 'tO6C.?q(F', 'Construction Worker');
insert into users (id, username, password, role) values (24, 'gcopsn', 'vG9j?krCp\$9hc8t', 'Construction Foreman');
insert into users (id, username, password, role) values (25, 'pthomersono', 'pV9?UrmL,', 'Electrician');
insert into users (id, username, password, role) values (26, 'ppleasep', 'tV99o+)X/7k', 'Supervisor');
insert into users (id, username, password, role) values (27, 'remeneyq', 'cC5?1>`A,YN51r(7', 'Construction Expeditor');
insert into users (id, username, password, role) values (28, 'mimpeyr', 'gN3H!S''=wS', 'Surveyor');
insert into users (id, username, password, role) values (29, 'dtristrams', 'kX7JLX2''', 'Subcontractor');
insert into users (id, username, password, role) values (30, 'iifet', 'bD1{~S@sk', 'Engineer');
insert into users (id, username, password, role) values (31, 'rfosdicku', 'uO7O9F''3', 'Supervisor');
insert into users (id, username, password, role) values (32, 'feddiesv', 'cG7#9zlvwsV~s', 'Subcontractor');
insert into users (id, username, password, role) values (33, 'aswaddenw', 'aD21{a%{', 'Construction Expeditor');
insert into users (id, username, password, role) values (34, 'obenoitx', 'yQ4`6pzNR_L/6e', 'Architect');
insert into users (id, username, password, role) values (35, 'csivetery', 'aJ7U1?8A', 'Project Manager');
insert into users (id, username, password, role) values (36, 'ffernyhoughz', 'yA6lS*L1WDt{2Tr', 'Construction Foreman');
insert into users (id, username, password, role) values (37, 'rduchenne10', 'xT9j~&<VN8', 'Construction Worker');
insert into users (id, username, password, role) values (38, 'dtipton11', 'wG834RGc>c1"|NoC', 'Construction Worker');
insert into users (id, username, password, role) values (39, 'fyushmanov12', 'hS6"4deDAj(o', 'Construction Foreman');
insert into users (id, username, password, role) values (40, 'skemson13', 'fW8pN`a9l!|&J', 'Electrician');
insert into users (id, username, password, role) values (41, 'mratt14', 'fJ1!*<>hn', 'Engineer');
insert into users (id, username, password, role) values (42, 'pannes15', 'qB0c\+._h#', 'Construction Manager');
insert into users (id, username, password, role) values (43, 'aboggish16', 'yX1+XCw}b', 'Construction Worker');
insert into users (id, username, password, role) values (44, 'aagg17', 'kF7=EUIi8/=@i~"', 'Construction Worker');
insert into users (id, username, password, role) values (45, 'wdorgan18', 'cJ4+O?*V', 'Construction Manager');
insert into users (id, username, password, role) values (46, 'abackes19', 'iT16V+47T+#n98', 'Construction Manager');
insert into users (id, username, password, role) values (47, 'alealle1a', 'fP9p1&BdI.9IGL', 'Construction Manager');
insert into users (id, username, password, role) values (48, 'bpattenden1b', 'pO69{PW~_/h2"B', 'Project Manager');
insert into users (id, username, password, role) values (49, 'llintott1c', 'bO0"3fT\C', 'Engineer');
insert into users (id, username, password, role) values (50, 'ekinane1d', 'kI2O#n\5b)Jz&H}?', 'Surveyor');

insert into categories (id, name) values (1, 'Partridge');
insert into categories (id, name) values (2, 'Scutching');
insert into categories (id, name) values (3, 'Skahill');
insert into categories (id, name) values (4, 'McElhinney');
insert into categories (id, name) values (5, 'Seldner');
insert into categories (id, name) values (6, 'Keaveney');
insert into categories (id, name) values (7, 'Wakelin');
insert into categories (id, name) values (8, 'Fidoe');
insert into categories (id, name) values (9, 'Yakovliv');
insert into categories (id, name) values (10, 'Huitt');
insert into categories (id, name) values (11, 'Schinetti');
insert into categories (id, name) values (12, 'Seson');
insert into categories (id, name) values (13, 'Pittem');
insert into categories (id, name) values (14, 'Paddington');
insert into categories (id, name) values (15, 'Golson');
insert into categories (id, name) values (16, 'Wedlock');
insert into categories (id, name) values (17, 'Chamberlaine');
insert into categories (id, name) values (18, 'Hazelhurst');
insert into categories (id, name) values (19, 'Scoines');
insert into categories (id, name) values (20, 'Edelheit');
insert into categories (id, name) values (21, 'Faro');
insert into categories (id, name) values (22, 'Huff');
insert into categories (id, name) values (23, 'Fahy');
insert into categories (id, name) values (24, 'Takos');
insert into categories (id, name) values (25, 'Rawcliffe');
insert into categories (id, name) values (26, 'Quare');
insert into categories (id, name) values (27, 'Whitehorne');
insert into categories (id, name) values (28, 'Cloney');
insert into categories (id, name) values (29, 'Full');
insert into categories (id, name) values (30, 'McInnery');
insert into categories (id, name) values (31, 'MacAulay');
insert into categories (id, name) values (32, 'Brims');
insert into categories (id, name) values (33, 'Wildor');
insert into categories (id, name) values (34, 'Jewsbury');
insert into categories (id, name) values (35, 'Hrinchishin');
insert into categories (id, name) values (36, 'Leahy');
insert into categories (id, name) values (37, 'Kewish');
insert into categories (id, name) values (38, 'Negro');
insert into categories (id, name) values (39, 'McVity');
insert into categories (id, name) values (40, 'Ruggles');
insert into categories (id, name) values (41, 'Pietz');
insert into categories (id, name) values (42, 'Riggert');
insert into categories (id, name) values (43, 'Mallaby');
insert into categories (id, name) values (44, 'Lindeman');
insert into categories (id, name) values (45, 'Schermick');
insert into categories (id, name) values (46, 'Schriren');
insert into categories (id, name) values (47, 'Korba');
insert into categories (id, name) values (48, 'Monkleigh');
insert into categories (id, name) values (49, 'Jouaneton');
insert into categories (id, name) values (50, 'Basso');


insert into news (id, title, content, image, created_at , category_id) values (1, 'Dr', 'trang', 'http://dummyimage.com/191x100.png/dddddd/000000', '2024-01-22', 1);
insert into news (id, title, content, image, created_at , category_id) values (2, 'Mr', 'trang', 'http://dummyimage.com/191x100.png/5fa2dd/ffffff', '2024-03-05', 2);
insert into news (id, title, content, image, created_at , category_id) values (3, 'Dr', 'trang', 'http://dummyimage.com/145x100.png/dddddd/000000', '2024-04-08', 3);
insert into news (id, title, content, image, created_at , category_id) values (4, 'Rev', 'trang', 'http://dummyimage.com/166x100.png/cc0000/ffffff', '2024-09-26', 4);
insert into news (id, title, content, image, created_at , category_id) values (5, 'Mrs', 'trang', 'http://dummyimage.com/241x100.png/5fa2dd/ffffff', '2024-08-05', 5);
insert into news (id, title, content, image, created_at , category_id) values (6, 'Dr', 'trang', 'http://dummyimage.com/223x100.png/dddddd/000000', '2024-08-26', 6);
insert into news (id, title, content, image, created_at , category_id) values (7, 'Mrs', 'trang', 'http://dummyimage.com/149x100.png/5fa2dd/ffffff', '2024-06-16', 7);
insert into news (id, title, content, image, created_at , category_id) values (8, 'Dr', 'trang', 'http://dummyimage.com/128x100.png/5fa2dd/ffffff', '2024-09-14', 8);
insert into news (id, title, content, image, created_at , category_id) values (9, 'Honorable', 'trang', 'http://dummyimage.com/221x100.png/dddddd/000000', '2024-01-09', 9);
insert into news (id, title, content, image, created_at , category_id) values (10, 'Mr', 'trang', 'http://dummyimage.com/218x100.png/ff4444/ffffff', '2024-04-30', 10);
insert into news (id, title, content, image, created_at , category_id) values (11, 'Dr', 'trang', 'http://dummyimage.com/206x100.png/cc0000/ffffff', '2024-10-09', 11);
insert into news (id, title, content, image, created_at , category_id) values (12, 'Dr', 'trang', 'http://dummyimage.com/213x100.png/cc0000/ffffff', '2024-02-23', 12);
insert into news (id, title, content, image, created_at , category_id) values (13, 'Rev', 'trang', 'http://dummyimage.com/128x100.png/ff4444/ffffff', '2024-08-11', 13);
insert into news (id, title, content, image, created_at , category_id) values (14, 'Rev', 'trang', 'http://dummyimage.com/112x100.png/dddddd/000000', '2024-07-03', 14);
insert into news (id, title, content, image, created_at , category_id) values (15, 'Dr', 'trang', 'http://dummyimage.com/187x100.png/ff4444/ffffff', '2024-05-29', 15);
insert into news (id, title, content, image, created_at , category_id) values (16, 'Ms', 'trang', 'http://dummyimage.com/240x100.png/ff4444/ffffff', '2024-06-15', 16);
insert into news (id, title, content, image, created_at , category_id) values (17, 'Mr', 'trang', 'http://dummyimage.com/113x100.png/cc0000/ffffff', '2024-01-24', 17);
insert into news (id, title, content, image, created_at , category_id) values (18, 'Mrs', 'trang', 'http://dummyimage.com/244x100.png/ff4444/ffffff', '2024-05-01', 18);
insert into news (id, title, content, image, created_at , category_id) values (19, 'Ms', 'trang', 'http://dummyimage.com/147x100.png/dddddd/000000', '2024-10-13', 19);
insert into news (id, title, content, image, created_at , category_id) values (20, 'Mr', 'trang', 'http://dummyimage.com/152x100.png/ff4444/ffffff', '2024-07-01', 20);
insert into news (id, title, content, image, created_at , category_id) values (21, 'Dr', 'trang', 'http://dummyimage.com/143x100.png/dddddd/000000', '2024-05-07', 21);
insert into news (id, title, content, image, created_at , category_id) values (22, 'Mr', 'trang', 'http://dummyimage.com/232x100.png/ff4444/ffffff', '2024-01-30', 22);
insert into news (id, title, content, image, created_at , category_id) values (23, 'Mr', 'trang', 'http://dummyimage.com/154x100.png/cc0000/ffffff', '2024-11-16', 23);
insert into news (id, title, content, image, created_at , category_id) values (24, 'Mr', 'trang', 'http://dummyimage.com/206x100.png/dddddd/000000', '2024-09-08', 24);
insert into news (id, title, content, image, created_at , category_id) values (25, 'Ms', 'trang', 'http://dummyimage.com/199x100.png/cc0000/ffffff', '2024-01-15', 25);
insert into news (id, title, content, image, created_at , category_id) values (26, 'Dr', 'trang', 'http://dummyimage.com/139x100.png/ff4444/ffffff', '2024-02-15', 26);
insert into news (id, title, content, image, created_at , category_id) values (27, 'Mrs', 'trang', 'http://dummyimage.com/240x100.png/ff4444/ffffff', '2024-07-07', 27);
insert into news (id, title, content, image, created_at , category_id) values (28, 'Mrs', 'trang', 'http://dummyimage.com/128x100.png/cc0000/ffffff', '2024-03-19', 28);
insert into news (id, title, content, image, created_at , category_id) values (29, 'Mr', 'trang', 'http://dummyimage.com/146x100.png/dddddd/000000', '2024-10-20', 29);
insert into news (id, title, content, image, created_at , category_id) values (30, 'Mr', 'trang', 'http://dummyimage.com/153x100.png/cc0000/ffffff', '2024-01-22', 30);
insert into news (id, title, content, image, created_at , category_id) values (31, 'Mrs', 'trang', 'http://dummyimage.com/233x100.png/cc0000/ffffff', '2024-02-12', 31);
insert into news (id, title, content, image, created_at , category_id) values (32, 'Rev', 'trang', 'http://dummyimage.com/237x100.png/dddddd/000000', '2023-12-17', 32);
insert into news (id, title, content, image, created_at , category_id) values (33, 'Honorable', 'trang', 'http://dummyimage.com/202x100.png/ff4444/ffffff', '2024-01-28', 33);
insert into news (id, title, content, image, created_at , category_id) values (34, 'Mrs', 'trang', 'http://dummyimage.com/190x100.png/cc0000/ffffff', '2024-06-30', 34);
insert into news (id, title, content, image, created_at , category_id) values (35, 'Mrs', 'trang', 'http://dummyimage.com/140x100.png/5fa2dd/ffffff', '2024-01-22', 35);
insert into news (id, title, content, image, created_at , category_id) values (36, 'Rev', 'trang', 'http://dummyimage.com/250x100.png/cc0000/ffffff', '2024-01-29', 36);
insert into news (id, title, content, image, created_at , category_id) values (37, 'Mrs', 'trang', 'http://dummyimage.com/109x100.png/cc0000/ffffff', '2024-06-01', 37);
insert into news (id, title, content, image, created_at , category_id) values (38, 'Ms', 'trang', 'http://dummyimage.com/231x100.png/5fa2dd/ffffff', '2024-09-04', 38);
insert into news (id, title, content, image, created_at , category_id) values (39, 'Mrs', 'trang', 'http://dummyimage.com/193x100.png/dddddd/000000', '2024-03-19', 39);
insert into news (id, title, content, image, created_at , category_id) values (40, 'Honorable', 'trang', 'http://dummyimage.com/123x100.png/dddddd/000000', '2024-06-26', 40);
insert into news (id, title, content, image, created_at , category_id) values (41, 'Mrs', 'trang', 'http://dummyimage.com/145x100.png/cc0000/ffffff', '2024-10-20', 41);
insert into news (id, title, content, image, created_at , category_id) values (42, 'Dr', 'trang', 'http://dummyimage.com/153x100.png/dddddd/000000', '2024-04-17', 42);
insert into news (id, title, content, image, created_at , category_id) values (43, 'Mr', 'trang', 'http://dummyimage.com/171x100.png/dddddd/000000', '2023-12-19', 43);
insert into news (id, title, content, image, created_at , category_id) values (44, 'Rev', 'trang', 'http://dummyimage.com/206x100.png/cc0000/ffffff', '2024-12-03', 44);
insert into news (id, title, content, image, created_at , category_id) values (45, 'Honorable', 'trang', 'http://dummyimage.com/157x100.png/5fa2dd/ffffff', '2024-04-13', 45);
insert into news (id, title, content, image, created_at , category_id) values (46, 'Ms', 'trang', 'http://dummyimage.com/185x100.png/ff4444/ffffff', '2024-04-28', 46);
insert into news (id, title, content, image, created_at , category_id) values (47, 'Ms', 'trang', 'http://dummyimage.com/185x100.png/5fa2dd/ffffff', '2023-12-14', 47);
insert into news (id, title, content, image, created_at , category_id) values (48, 'Rev', 'trang', 'http://dummyimage.com/188x100.png/5fa2dd/ffffff', '2024-04-11', 48);
insert into news (id, title, content, image, created_at , category_id) values (49, 'Dr', 'trang', 'http://dummyimage.com/107x100.png/dddddd/000000', '2024-10-25', 49);
insert into news (id, title, content, image, created_at , category_id) values (50, 'Rev', 'trang', 'http://dummyimage.com/143x100.png/cc0000/ffffff', '2024-10-19', 50);