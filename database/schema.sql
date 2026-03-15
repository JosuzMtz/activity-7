DROP TABLE IF EXISTS users;
CREATE TABLE users(
	id 				INT 			NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name 			VARCHAR(50) 	NOT NULL,
    email			VARCHAR(50) 	NOT NULL UNIQUE,
    password_hash	VARCHAR(250)	NOT NULL,
    role enum (
		'Student',
        'Professor',
        'Admin') NOT NULL DEFAULT 'Student',
	created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
);

DROP TABLE IF EXISTS student_groups;
CREATE TABLE student_groups(
	id		INT			 	NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name	VARCHAR(50)  	NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
);

DROP TABLE IF EXISTS kits;
CREATE TABLE kits(
	id 			INT 		NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name 		VARCHAR(50) NOT NULL UNIQUE,
    created_at	TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
);

DROP TABLE IF EXISTS courses;
CREATE TABLE courses(
	id 			INT			NOT NULL AUTO_INCREMENT PRIMARY KEY,
    course_key 	VARCHAR(10) NOT NULL,
    title		VARCHAR(50) NOT NULL,
    cover_image VARCHAR(255) 	NULL,
    content		LONGTEXT		NULL,	
    material 	VARCHAR(255) 	NULL,
    kit_id		INT			NOT NULL,
    created_at 	TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at	TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kit_id) REFERENCES kits(id)
);

DROP TABLE IF EXISTS course_student_groups;
CREATE TABLE course_student_groups(
    course_id        INT NOT NULL,
    student_group_id INT NOT NULL,
    created_at       TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at       TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (course_id, student_group_id),
    FOREIGN KEY (course_id)        REFERENCES courses(id),
    FOREIGN KEY (student_group_id) REFERENCES student_groups(id)
);

DROP TABLE IF EXISTS student_group_users;
CREATE TABLE student_group_users(
    user_id          INT NOT NULL,
    student_group_id INT NOT NULL,
    created_at       TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at       TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (student_group_id, user_id),
    FOREIGN KEY (user_id)          REFERENCES users(id),
    FOREIGN KEY (student_group_id) REFERENCES student_groups(id)
);