CREATE TABLE tb_golongan (
	gol_id INT(11) NOT NULL AUTO_INCREMENT,
	gol_kode VARCHAR(10) NOT NULL,
	gol_name VARCHAR(50) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(gol_id)
);

CREATE TABLE tb_user (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL UNIQUE,
	user_password VARCHAR(100) NOT NULL,
	user_nama VARCHAR(100) NOT NULL,
	user_alamat TEXT NOT NULL,
	user_hp VARCHAR(25) NOT NULL,
	user_pos VARCHAR(5) NOT NULL,
	user_role TINYINT(5) NOT NULL,
	user_aktif TINYINT(2) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id)
);

CREATE TABLE tb_pelanggan (
	pel_id INT(11) NOT NULL AUTO_INCREMENT,
	pel_id_gol INT(11) NOT NULL,
	pel_no VARCHAR(20) NOT NULL,
	pel_nama VARCHAR(50) NOT NULL,
	pel_alamat TEXT NOT NULL,
	pel_hp VARCHAR(50) NOT NULL,
	pel_ktp VARCHAR(50) NOT NULL,
	pel_seri VARCHAR(50) NOT NULL,
	pel_meteran INT(11) NOT NULL,
	pel_aktif enum("Y","N") NOT NULL,
	pel_id_user INT(11) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pel_id),
	FOREIGN KEY (pel_id_gol) REFERENCES tb_golongan(gol_id),
	FOREIGN KEY (pel_id_user) REFERENCES tb_user(user_id)
);

INSERT INTO
	tb_user
VALUES
	(
		1,
		'admin@gmail.com',
		'*4ACFE3202A5FF5CF467898FC58AAB1D615029441',
		'Administrator',
        'Medan',
        '08213849232',
        '23194',
        1,
        1,
		'2023-11-03 03:40:43',
		NULL
	);