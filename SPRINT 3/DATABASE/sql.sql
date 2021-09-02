-- this document holds all the SQL statements that i used in my source code
-- i can't exactly separate them from the PHP because of how they're integrated, so here they are.
-- (this file doesn't actually do anything btw)

-- SQL statement used to create the auto-incrementing database of comments
CREATE TABLE comments (
	c_id int(11) NOT null AUTO_INCREMENT PRIMARY KEY,
    u_id varchar(100) NOT null,
    date datetime NOT null,
    c_text TEXT NOT null 
);

-- PHP that i used to assign variables from comment box to the SQL fields
--        $u_id = $_POST['u_id'];
--        $date = $_POST['date'];
--        $c_text = $_POST['c_text'];

-- SQL insertion statement for actually writing these variables to the database
INSERT INTO comments (u_id, date, c_text) 
            VALUES ('$u_id', '$date', '$c_text');

-- SQL selection statement for retrieving all comment information from the database
SELECT * FROM comments;