<?php
 /*
  +-------------------------------------------------------------------------+
  | Copyright 2010-2021, Davide Franco			                            |
  |                                                                         |
  | This program is free software; you can redistribute it and/or           |
  | modify it under the terms of the GNU General Public License             |
  | as published by the Free Software Foundation; either version 2          |
  | of the License, or (at your option) any later version.                  |
  |                                                                         |
  | This program is distributed in the hope that it will be useful,         |
  | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
  | GNU General Public License for more details.                            |
  +-------------------------------------------------------------------------+
 */

class FileSets_Model extends CModel
{

    // ==================================================================================
    // Function: 	count()
    // Parameters:	$tablename
    //				$filter (optional)
    // Return:		return row count for one table
    // ==================================================================================

    public function count($tablename = 'FileSet', $filter = null)
    {
        $fields    = array( "COUNT(DISTINCT $tablename) as filesets_count" );
        $table    = 'FileSet';

     // Prepare and execute query
        $statment     = CDBQuery::get_Select(array( 'table' => $table, 'fields' => $fields ));
        $result     = $this->run_query($statment);

        $result = $result->fetch();
        return $result['filesets_count'];
    }
}
