<?php

// class DB {

//     final public const HOSTNAME = 'localhost';
//     final public const USERNAME = 'root';
//     final public const PASSWORD = '';
//     final public const DATABASE = 'shop';

//     public $conn;

//     private $table;
//     private $alias;
//     private $column = [];
//     private $conditions = [];
//     private $on = [];
//     private $orconditions = [];
//     private $values = [];
//     private $order = [];
//     private $group = [];
//     private $innerJoin = [];
//     private $leftjoin = [];
//     private $rightjoin = [];
//     private $outerjoin = [];
//     private $limit;

//     public $result;

//     public function __construct() 
//     {
//         try 
//         {
//             $this->conn = new PDO("mysql:host=".self::HOSTNAME.";dbname=".self::DATABASE."", self::USERNAME, self::PASSWORD);
//         }
//         catch(PDOException $e) {
//             echo "ERROR: " . $e->getMessage();
//         }
//     }

//     public function table(string $table,string $alias = null)
//     {
//         $this->table = $alias === null ? $table : "${table} AS ${alias}";
//         return $this;
//     }

//     public function limit(int $limit)
//     {
//         $this->limit = $limit;
//         return $this;
//     }
//     public function column(string ...$column)
//     {
//         $this->column = $column;
//         return $this;
//     }

//     public function where(string ...$where)
//     {
//         $this->conditions = $where;
//         return $this;
//     }
//     public function orwhere(string ...$orwhere)
//     {
//         $this->orconditions = $orwhere;
//         return $this;
//     }
//     public function on(string ...$on)
//     {
//         $this->on = $on;
//         return $this;
//     }
//     public function group(string ...$group)
//     {
//         $this->group = $group;
//         return $this;
//     }
  
//     public function order(string ...$order)
//     {
//         $this->order = $order;
//         return $this;
//     }
//     public function Innerjoin(string ...$innerjoin)
//     {
//             $this->innerJoin= $innerjoin;
//             return $this;
//     }
//     public function Outerjoin(string ...$outerjoin)
//     {
//             $this->outerjoin= $outerjoin;
//             return $this;
//     }
//     public function leftjoin(string ...$leftjoin)
//     {
//             $this->leftjoin= $leftjoin;
//             return $this;
//     }
//     public function rightjoin(string ...$rightjoin){
//         $this->rightjoin = $rightjoin;
//         return $this;
//     }
//     public function values(...$values)
//     {
//         $this->values = $values;
//         return $this;
//     }

//     public function select()
//     {
//         $where = $this->conditions === [] ? '' : ' WHERE ' . implode(' AND ', $this->conditions);
//         $on = $this->on === [] ? '' : ' ON ' . implode(' AND ', $this->on);
//         $orwhere = $this->orconditions === [] ? '' : ' WHERE ' . implode(' OR ', $this->orconditions);
//         $order = $this->order === [] ? '' : ' ORDER BY ' . implode(' , ', $this->order);
//         $group = $this->group === [] ? '' : ' GROUP BY ' . implode(' , ', $this->group);

//         $innerjoin = $this->innerJoin === [] ? '' : ' INNER JOIN '. implode(' INNER JOIN ', $this->innerJoin). $on;
       
//         $leftjoin = $this->leftjoin === [] ? '' : ' LEFT JOIN '. implode(' LEFT JOIN ', $this->leftjoin). $on;
//         $rightjoin = $this->rightjoin === [] ? '' : ' RIGHT JOIN '. implode(' RTGHT JOIN ', $this->rightjoin). $on;
        
//         $limit = $this->limit === null ? '' : ' LIMIT ' . $this->limit;
//         $column  = $this->column === [] ? '*' : implode(',', $this->column);

//         $outerjoin = $this->outerjoin === [] ? '' : " UNION SELECT $column FROM ".$this->table  .$rightjoin ;
//         $sql = "SELECT " . $column . ' FROM ' . $this->table .$leftjoin .$innerjoin. $outerjoin  .$limit .$where .$orwhere .$group .$order;
   
        
       
//         echo $sql;
        
//         $stm = $this->conn->prepare($sql);
//         if ($stm->execute())
//         {
//             $this->result = $stm->fetchAll();
//         }
//     }

//     public function insert()
//     {
//         $column = $this->column === [] ? '' : " (". implode(',', $this->column) .") ";
//         $values = "(' ". implode("','", $this->values) . " ')";

//         $sql = "INSERT INTO " . $this->table . 'COUNT('.$column.')' . " VALUES " . $values;

//         $this->conn->prepare($sql)->execute();
//     }

//     public function delete()
//     {
//         $where = $this->conditions === [] ? '' : ' WHERE ' . implode(' AND ', $this->conditions);

//         $sql = "DELETE FROM ". $this->table . $where;
//         $this->conn->prepare($sql)->execute();
//     }

//     public function update(){
//         $where = " WHERE " . implode(' AND ', $this->conditions);

//         $values = implode(', ', $this->values);

//         $sql = "UPDATE ". $this->table . " SET " . $values . $where;
        
//         $this->conn->prepare($sql)->execute();
//     }



// }
// $product = new DB();
// $product->table('products')->column()->order('price')->select();
// echo "<hr>";
// echo "<h2>Order By</h2>";
// foreach ($product->result as $p) {
  
//     echo $p['name']."<br>";
//     echo $p['price']."<br>";
//     echo $p['details']."<br>";
  

// }
/* Connection to database */
	$conn =mysqli_connect("localhost","root","","blog");

	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
