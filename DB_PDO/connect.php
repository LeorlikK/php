<?php
/**
 * STRING
 * - CHAR(size) 0-255 символов
 * - VARCHAR(size) 0-65535 символов
 * - BINARY(size)
 * - VARBINARY(size)
 * - TINYBLOB 255 байт
 * - TINYTEXT 255 символов
 * - TEXT(size) 65535 байт
 * - BLOB(size) 65535 байт
 * - MEDIUMTEXT 16,777,215 символов
 * - MEDIUMBLOB 16,777,215 байт
 * - LONGTEXT 4,294,967,295 символов
 * - LONGBLOB 4,294,967,295 байт
 * - ENUM(val1, val2, val3, ...) список значения, максимум 65535
 * - SET(val1, val2, val3, ...) список значения, максимум 64
 *
 * NUMERIC
 * - BIT(size) 1-64
 * - TINYINT(size)  128-127
 * - BOOL
 * - BOOLEAN
 * - SMALLINT(size) -32768 to 32767
 * - MEDIUMINT(size) -8388608 to 8388607
 * - INT(size) -2147483648 to 2147483647
 * - INTEGER(size)
 * - BIGINT(size) -9223372036854775808 to 9223372036854775807
 * - FLOAT(size, d)
 * - FLOAT(p)
 * - DOUBLE(size, d)
 * - DOUBLE PRECISION(size, d)
 * - DECIMAL(size, d)
 * - DEC(size, d)
 *
 * DATE and Time Data Types
 * - DATE YYYY-MM-DD
 * - DATETIME(fsp) YYYY-MM-DD hh:mm:ss
 * - TIMESTAMP(fsp) YYYY-MM-DD hh:mm:ss
 * - TIME(fsp) hh:mm:ss
 * - YEAR 1901 to 2155
 */

echo 'START';
//$msql_connect = mysqli_connect('localhost', 'root', 'root', 'registration');
$db_host = "localhost";
$db_name = "sql";
$db_username = "root";
$db_pass = "root";
try {
    $connect = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage();
    die('Error!');
}

// DATABASE
$connect->query("CREATE DATABASE `sql`");
$connect->query("DROP DATABASE `sql`");

// TABLE
$connect->query("DROP TABLE IF EXISTS accountcountrytable");
$connect->query("DROP TABLE IF EXISTS countriestable");
$connect->query("DROP TABLE IF EXISTS accountstable");

//PGSQL - id serial PRIMARY KEY
$connect->query("CREATE TABLE `countriestable`
(
    pk_country bigint PRIMARY KEY AUTO_INCREMENT,
    title text NOT NULL,
    isbn varchar(32) NOT NULL,
    created_at TIMESTAMP
)");
$connect->query("CREATE TABLE `accountstable`
(
    pk_account integer PRIMARY KEY AUTO_INCREMENT,
    name varchar(128) NOT NULL,
    address text NOT NULL,
    fk_country bigint,
    CONSTRAINT name_fk_key_country FOREIGN KEY (fk_country) REFERENCES countriestable(pk_country),
    created_at TIMESTAMP
)");
$connect->query("CREATE TABLE accountcountrytable
(
    id int PRIMARY KEY AUTO_INCREMENT,
    account_id integer NOT NULL,
    country_id bigint NOT NULL,
    CONSTRAINT accountcountry_account_id FOREIGN KEY (account_id) REFERENCES accountstable(pk_account),
    CONSTRAINT accountcountry_country_id FOREIGN KEY (country_id) REFERENCES countriestable(pk_country)
)");

// ALTER
$connect->query("ALTER TABLE accountstable
    ADD COLUMN publisher_id_test integer;
    ALTER TABLE `countriestable`
    ADD CONSTRAINT book_publisher
    FOREIGN KEY (publisher_id_test)
    REFERENCES `testingtable`(publisher_id)
");

// INDEX
$connect->query("CREATE INDEX account_name_idx ON accountstable (name)");
$connect->query("CREATE UNIQUE INDEX account_name_unique ON accountstable (name)");
$connect->query("ALTER TABLE accountstable ADD INDEX name_index (name)");

// SELECT
$result = $connect->query("SELECT DISTINCT created_at, updated_at FROM accounts")->fetchAll();
$result = $connect->query("SELECT COUNT(DISTINCT created_at) FROM accounts")->fetchAll();

$result = $connect->query("SELECT COUNT(*) FROM accounts WHERE id <> 200")->fetchAll();
$result = $connect->query("SELECT * FROM accounts WHERE created_at  > '2023-03-14 07:02:45' AND id > 200")->fetchAll();
$result = $connect->query("SELECT id FROM accounts WHERE (id = 200 OR id = 210 OR id = 220) AND (created_at > '2023-03-16 07:02:40' OR updated_at > '2023-03-16 07:02:50
')")->fetchAll();
$result = $connect->query("SELECT id FROM accounts WHERE id BETWEEN 200 AND 220")->fetchAll();
$result = $connect->query("SELECT id FROM accounts WHERE id IN ('200', '210', '220')")->fetchAll();
$result = $connect->query("SELECT id FROM accounts WHERE id NOT IN ('200', '210', '220')")->fetchAll();

$result = $connect->query("SELECT first_name, id FROM accounts ORDER BY first_name ASC, id DESC")->fetchAll();

$result = $connect->query("SELECT MAX(id) FROM accounts ")->fetchAll();
$result = $connect->query("SELECT MIN(id) FROM accounts ")->fetchAll();
$result = $connect->query("SELECT AVG(id) FROM accounts WHERE id NOT BETWEEN 200 AND 300")->fetchAll();
$result = $connect->query("SELECT SUM(id) FROM accounts")->fetchAll();

$result = $connect->query("SELECT id FROM accounts WHERE id LIKE '_1_'")->fetchAll();
$result = $connect->query("SELECT first_name FROM accounts WHERE first_name LIKE '%vil%'")->fetchAll();

$result = $connect->query("SELECT first_name FROM accounts LIMIT 2")->fetchAll();

$result = $connect->query("SELECT first_name FROM accounts WHERE device_id IS NULL LIMIT 20")->fetchAll();
$result = $connect->query("SELECT first_name FROM accounts WHERE device_id IS NOT NULL LIMIT 20")->fetchAll();

$result = $connect->query("SELECT first_name FROM accounts GROUP BY last_name")->fetchAll();

$result = $connect->query("(SELECT id FROM accounts LIMIT 2) UNION (SELECT first_name FROM accounts LIMIT 2)")->fetchAll();
$result = $connect->query("SELECT id FROM accounts  INTERSECT SELECT id FROM actions")->fetchAll();
$result = $connect->query("SELECT id FROM accounts  EXCEPT SELECT id FROM accounts")->fetchAll();

// INSERT
$connect->query("INSERT INTO countriestable VALUES
    (1, 'russia', '+7', '2023-08-08 10:00:00'),
    (2, 'indonesia', '+59', '2023-08-08 10:00:00');
INSERT INTO  accountstable VALUES
    (1, 'One', '125234234', 1, '2023-08-08 10:00:00'),
    (2, 'Two', '125234234', 2, '2023-08-08 10:00:00')
");
$connect->query("INSERT INTO accountstable (name, address, created_at) VALUES
    ('Three', '+7', '2023-08-08 10:00:00'),
    ('Four', '+7', '2023-08-08 10:00:00')
");

// UPDATE
$connect->query("UPDATE accountstable SET name = 'NewName' WHERE name = 'Three'");

// DELETE
$connect->query("DELETE FROM accountstable WHERE id = 1");

// JOIN
$result = $connect->query("SELECT accountstable.name,  countriestable.title FROM accountstable
    RIGHT JOIN countriestable ON accountstable.fk_country = countriestable.pk_country
")->fetchAll();
$result = $connect->query("SELECT accounts.id, country_id, countries.id FROM accounts
    INNER JOIN countries  ON accounts.country_id = countries.id")->fetchAll();
$result = $connect->query("SELECT accounts.country_id, COUNT(accounts.id) FROM accounts
    INNER JOIN countries ON countries.id = accounts.country_id GROUP BY accounts.country_id
    ")->fetchAll();

// TRANSACTION
try {
    $connect->beginTransaction();
    $connect->query("INSERT INTO `users` (email, password, public) VALUES ('orland69@yandex.ru', '456', '1')");
    $connect->exec("INSERT INTO `users` (id, email, password, public) VALUES (2, 'orland69@yandex.ru', '456', '1')");
    $query = $connect->prepare("INSERT INTO USERS(id, email, password, public) VALUES (:id, :email, :password, :public)");
    $id = 2; $email = "orland69@yandex.ru"; $password = '456'; $public = 1;
    $query->execute(['id' => $id, 'email' => $email, 'password' => $password, 'public' => $public]);
    $id = 3; $email = "elena72@yandex.ru"; $password = '789';
    $query->execute(['id' => $id, 'email' => $email, 'password' => $password, 'public' => $public]);
    $connect->commit();
} catch (PDOException $exception) {
    $connect->rollBack();
}
?>
