<pre>
<?php

class database{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'testing';
    private $mysqli = '';
    private $result = array();
    private $conn = false;

    public function __construct() {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name );
            $this->conn = true;
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }else{
                return true;
            }
        }
    }
    public function insert($table, $params = array()) {
     if ($this->tableExists($table)) {
        print_r($params);

        $table_columns = implode(', ', array_keys($params));
        $table_value = implode("', '",  $params);
       
         $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";
         if ($this->mysqli->query($sql)) {
             array_push($this->result, $this->mysqli->insert_id);
             return true;
         } else {
            array_push($this->result, $this->mysqli->error);
             return false;
         }
         
     }else{
        return false;
     }
    }
    public function update($table, $params = array(),$where= null) {
        if ($this->tableExists($table)) {
            // var_dump($params);
            $args = array();
            foreach ($params as $key => $value) {
                $args[]= "$key = '$value'";
            }
            // var_dump($args);
          $sql ="UPDATE $table SET " . implode(', ', $args);

          if ($where != null) {
             $sql .= " WHERE $where ";
          }
        //   echo $sql;
        if ($this->mysqli->query($sql)) {
            array_push($this->result,$this->mysqli->affected_rows );
            return true;
        } else {
            array_push($this->result,$this->mysqli->error );
            return false;
        }
        
        } else {
            return false;
        }
        
        
    }
    public function delete($table, $where= null) {
        if ($this->tableExists($table)) {
            $sql = "DELETE from $table";
            if ($where != null) {
                $sql .= " WHERE $where ";
            }
            // echo $sql;
            if ($this->mysqli->query($sql)) {
                array_push($this->result,$this->mysqli->affected_rows );
                return true;
            }else {
                array_push($this->result,$this->mysqli->error );
                return false;
            }
        }else{
            return false;
        }
    }
    public function select($table, $rows = "*", $join = null, $where = null, $order = null, $limit = null) {
        if ($this->tableExists($table)) {
            $sql = "SELECT $rows FROM $table ";
            if ($join != null) {
                $sql .= " JOIN $join";
            }
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($order != null) {
                $sql .= " ORDER BY $order";
            }
            if ($limit != null) {
                if ($_GET['page']) {
                    $page = $_GET['page'];
                }else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $sql .= " Limit $start, $limit";
            }
            echo $sql;
            $query = $this->mysqli->query($sql);
                if ($query) {
                    $this->result = $query->fetch_all(MYSQLI_ASSOC);
                    return true;
                }else{
                    array_push($this->result, $this->mysqli->error );
                }
                
        }else{
            return false;
        }
    }
    public function pagination($table, $join = null, $where = null, $limit = null) { 
        if ($this->tableExists($table)) {
            if($limit != null){
                $sql = "SELECT COUNT(*) FROM $table";

                if ($join != null ) {
                    $sql .= " JOIN $join ";
                }
                if ($where != null ) {
                    $sql .= " WHERE $where ";
                }

                $query = $this->mysqli->query($sql);
                
                $total_record = $query->fetch_array();
                $total_record = $total_record[0];
                $total_page = ceil($total_record / $limit) ;
                echo $total_page;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function sql($sql) {
        $query = $this->mysqli->query($sql);
        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        }else{
            array_push($this->result, $this->mysqli->error );
        }
    }
    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);

        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true;
            }else{
                return false;
            }
        }

    }
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }
    
    public function __destruct() {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        }else{
            array_push($this->result, $table .'does not exists!' );
            return false;
        }
    }
    
}

?>
</pre>