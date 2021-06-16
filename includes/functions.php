<?php
	function query(/* sql[, ... ]*/)
	{
		//sql statement
		$sql= func_get_arg(0);

		//paraments, if any
		$parameters = array_slice(func_get_args(), 1);

		//try to connect to database
		static $handle;
		if(!isset($handle))
		{
			try{
				//connect to database
				$handle=new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME . ";port=" . PORT,USERNAME, PASSWORD);
				//ensure that PDO:prepare returns false
				$handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			}
			catch (Exception $e)
			{
				trigger_error($e->getMessage(), E_USER_ERROR);
				exit;
			}
		}

		//prepare SQL statement
		$statement=$handle->prepare($sql);
		if($statement===false)
		{
			//trigger (big,orange) error
			trigger_error($handle->errorInfo()[2], E_USER_ERROR);
			exit;
		}
		//execute SQL statement
		$results=$statement->execute($parameters);

		//retur result set's rows, if any
		if($results !== false)
		{
			return $statement->fetchAll(PDO::FETCH_ASSOC);
		}
		else
		{
			return false;
		}
	}
	function redirect(){
        header("Location: http://example.com");
    }
?>