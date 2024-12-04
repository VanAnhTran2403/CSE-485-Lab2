CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL COMMENT '0: người dùng, 1: quản trị viên'
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,`tlunews.sql`
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);
insert into users (id, username, password, role) values (1, 'Toiboid', 'pR3#qXeE45V|g4n', 1);
insert into users (id, username, password, role) values (2, 'Raul', 'aZ5,,Ve@8', 0);
insert into users (id, username, password, role) values (3, 'Clarissa', 'lK6(Pa7ddMUuH>T/', 1);
insert into users (id, username, password, role) values (4, 'Misty', 'cY1!oApd{e', 1);
insert into users (id, username, password, role) values (5, 'Brendan', 'sT3*{11n2', 0);
insert into users (id, username, password, role) values (6, 'Janelle', 'eP4$YjtNk''3~', 1);
insert into users (id, username, password, role) values (7, 'Travus', 'tQ9=(z"$j@.7s*', 0);
insert into users (id, username, password, role) values (8, 'Darrel', 'pT1{C=WM.7', 0);
insert into users (id, username, password, role) values (9, 'Kinsley', 'pI7#v*NL1nTrF=FC', 0);
insert into users (id, username, password, role) values (10, 'Cornelia', 'eW8|G4OWmC6', 1);
insert into users (id, username, password, role) values (11, 'Leslie', 'wO7,N1\&R', 1);
insert into users (id, username, password, role) values (12, 'Salome', 'aQ7_7\wEk7w', 1);
insert into users (id, username, password, role) values (13, 'Kerri', 'sU1%q$mJTY2A', 1);
insert into users (id, username, password, role) values (14, 'Gerald', 'nS7(Q$uf#X$q', 1);
insert into users (id, username, password, role) values (15, 'Alexa', 'wM2{SIZsepiR0', 0);
insert into users (id, username, password, role) values (16, 'Fonzie', 'wC5"6zd!h', 0);
insert into users (id, username, password, role) values (17, 'Violette', 'nU5''gHtO4yQFjQ', 1);
insert into users (id, username, password, role) values (18, 'Bernard', 'kE9+K#DI{$9lY', 0);
insert into users (id, username, password, role) values (19, 'Jeane', 'oO0,~C6El', 1);
insert into users (id, username, password, role) values (20, 'Chryste', 'iP0|OlHbG<c', 0);
insert into users (id, username, password, role) values (21, 'Darcey', 'xE6)"QJx\pHE%', 0);
insert into users (id, username, password, role) values (22, 'Virgilio', 'rM1~BZPOR', 1);
insert into users (id, username, password, role) values (23, 'Lizabeth', 'mU9+pCxle', 0);
insert into users (id, username, password, role) values (24, 'Kendall', 'cV6*A+<L$ftCR(HZ', 1);
insert into users (id, username, password, role) values (25, 'Alyssa', 'bE5*HP,0{F3', 1);
insert into users (id, username, password, role) values (26, 'Valli', 'uB9`2xPQ?nYsyO', 1);
insert into users (id, username, password, role) values (27, 'Rainer', 'hH1|1y/W8=', 0);
insert into users (id, username, password, role) values (28, 'Rosaleen', 'tV0>4\loG=WBR', 0);
insert into users (id, username, password, role) values (29, 'Gale', 'cW9~hv+\oSKLh\~', 1);
insert into users (id, username, password, role) values (30, 'Catherin', 'cS4`ZqbXz}|', 1);
insert into users (id, username, password, role) values (31, 'Aldis', 'uN4?n_xHcG!', 1);
insert into users (id, username, password, role) values (32, 'Adamo', 'vK3?Fd7\/e.8{.)?', 1);
insert into users (id, username, password, role) values (33, 'Merrile', 'vW2#C?g81ZwoQ', 1);
insert into users (id, username, password, role) values (34, 'Kissie', 'zN5\A2gTf', 0);
insert into users (id, username, password, role) values (35, 'Abey', 'iR2.~!t?ri', 1);
insert into users (id, username, password, role) values (36, 'Meredeth', 'nV2/NOJ"', 1);
insert into users (id, username, password, role) values (37, 'Gwenneth', 'pF9\s{+Z#G+#?XA`', 0);
insert into users (id, username, password, role) values (38, 'Darrell', 'dT7./XfPYfF', 1);
insert into users (id, username, password, role) values (39, 'Cilka', 'wP6>f(Cd', 0);
insert into users (id, username, password, role) values (40, 'Ynez', 'kS1&,~4r$Gwp096', 0);
insert into users (id, username, password, role) values (41, 'Elias', 'fG2.xM=2"r', 1);
insert into users (id, username, password, role) values (42, 'Holmes', 'uL2*%!N?4Ayi?L', 0);
insert into users (id, username, password, role) values (43, 'Zach', 'rU3*W,|="k', 0);
insert into users (id, username, password, role) values (44, 'Gisella', 'aG3_P8v3Fy=b?''.', 1);
insert into users (id, username, password, role) values (45, 'Belicia', 'vR2.G}.kTBi0j', 1);
insert into users (id, username, password, role) values (46, 'Faustine', 'lM1,IxT0/vNR3,B', 0);
insert into users (id, username, password, role) values (47, 'Phaedra', 'bC8.)7eUL"LUh@r', 1);
insert into users (id, username, password, role) values (48, 'Valida', 'cW3>/H{h3epjt3', 1);
insert into users (id, username, password, role) values (49, 'Tallia', 'qL6,ntJR?g(A', 0);
insert into users (id, username, password, role) values (50, 'Kessiah', 'oB7{ea`d', 0);

insert into categories (id, name) values (1, 'tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo');
insert into categories (id, name) values (2, 'turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam');
insert into categories (id, name) values (3, 'ligula in lacus curabitur at ipsum ac tellus semper interdum');
insert into categories (id, name) values (4, 'est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis');
insert into categories (id, name) values (5, 'tristique in tempus sit amet sem fusce consequat nulla nisl nunc');
insert into categories (id, name) values (6, 'quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus');
insert into categories (id, name) values (7, 'quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis');
insert into categories (id, name) values (8, 'venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut');
insert into categories (id, name) values (9, 'maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum');
insert into categories (id, name) values (10, 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id');
insert into categories (id, name) values (11, 'lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu');
insert into categories (id, name) values (12, 'pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non');
insert into categories (id, name) values (13, 'non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra');
insert into categories (id, name) values (14, 'at velit eu est congue elementum in hac habitasse platea dictumst');
insert into categories (id, name) values (15, 'morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus');
insert into categories (id, name) values (16, 'augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus');
insert into categories (id, name) values (17, 'parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem');
insert into categories (id, name) values (18, 'justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis');
insert into categories (id, name) values (19, 'nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor');
insert into categories (id, name) values (20, 'nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis');
insert into categories (id, name) values (21, 'donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet');
insert into categories (id, name) values (22, 'non mauris morbi non lectus aliquam sit amet diam in magna bibendum');
insert into categories (id, name) values (23, 'imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam');
insert into categories (id, name) values (24, 'aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean');
insert into categories (id, name) values (25, 'in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus');
insert into categories (id, name) values (26, 'accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean');
insert into categories (id, name) values (27, 'rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor');
insert into categories (id, name) values (28, 'elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing');
insert into categories (id, name) values (29, 'rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis');
insert into categories (id, name) values (30, 'pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis');
insert into categories (id, name) values (31, 'tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer');
insert into categories (id, name) values (32, 'massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio');
insert into categories (id, name) values (33, 'blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae');
insert into categories (id, name) values (34, 'ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla');
insert into categories (id, name) values (35, 'maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra');
insert into categories (id, name) values (36, 'non mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui');
insert into categories (id, name) values (37, 'mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus');
insert into categories (id, name) values (38, 'a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla');
insert into categories (id, name) values (39, 'felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices');
insert into categories (id, name) values (40, 'magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices');
insert into categories (id, name) values (41, 'nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam');
insert into categories (id, name) values (42, 'maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus');
insert into categories (id, name) values (43, 'vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas');
insert into categories (id, name) values (44, 'est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis');
insert into categories (id, name) values (45, 'dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt');
insert into categories (id, name) values (46, 'neque aenean auctor gravida sem praesent id massa id nisl venenatis');
insert into categories (id, name) values (47, 'dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis');
insert into categories (id, name) values (48, 'justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere');
insert into categories (id, name) values (49, 'sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus');
insert into categories (id, name) values (50, 'venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate');
