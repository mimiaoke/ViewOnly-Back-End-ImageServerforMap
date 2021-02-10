<?php
// database connection class that will be kept above web root
// can just use a static method here, no need to create an object

class DatabaseConnection {
	
	static function connect() {
		  return new DB\SQL(
			'mysql:host=localhost;port=3306;dbname=sedinbu4_mydb01',
			'sedinbu4_user01',
			'MYsql2087583'
		  );
	}
	
}

?>
