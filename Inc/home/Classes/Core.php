<?php
namespace Inc\home\Classes;
header("Content-Type: application/json; charset=UTF-8");
use Inc\home\InterFaces\makeJson;
use PDO;
use Inc\connection\connect;
use Inc\home\Classes\DATA\Seeds;





class Core implements MakeJson{
    private $pdo = null;
    private $db = null;
    private $table = null;
    private $allCols = array();
    private $names = null;
    private $data_type = null;
    private $data_type_arr = null;
   
    
    

 public function __construct($db){
     $this->db = $db;
     
    connect::getInstance();
    $this->pdo = connect::getConnection();
 }


    public function get_cols($table){
        $this->table = $table;
        $allCols['cols']= array();

      $cols = $this->pdo->query("SELECT * FROM information_schema.COLUMNS where TABLE_NAME = '$table' AND TABLE_SCHEMA = '$this->db'")->fetchAll();
      foreach($cols as $row):
        $row['COLUMN_NAME'];
       $items = array(
        'col_name' => $row['COLUMN_NAME'],
        'data_type' => $row['DATA_TYPE'],
        'extra' => $row['EXTRA'],
        'col_key' =>$row['COLUMN_KEY'],
        'col_length' => $row['CHARACTER_MAXIMUM_LENGTH']
       );
       array_push($allCols["cols"], $items);
      endforeach;

      $this->allCols = $allCols;
     //$this->allCols = $this->get_cols();
    }
    public function get_col_name(){
         $temp = array();
         $temp_data = array();
        foreach($this->allCols['cols'] as $i=>$key ):

         if(!$this->allCols['cols'][$i]['extra'] == "auto_increment"):
         $this->allCols['cols'][$i]['col_name']." ".$this->allCols['cols'][$i]['extra'];

            array_push($temp,  $this->allCols['cols'][$i]['col_name']);
            array_push($temp_data,  $this->allCols['cols'][$i]['data_type']);
        
         endif;

        endforeach;
        $this->names =  $temp;
        $this->data_type =  $temp_data;
        
      
    }
   

    public function seedData(){
        
       $names = $this->get_names();
       $Numvalues = $this->getNumQ();
       $values = $this->setValues();    
       $sql = "insert into ".$this->table."(".$names.") values(".$Numvalues.")";
       $statment = $this->pdo->prepare($sql);
       $statment->execute($values);

    }






    public function setValues(){
       $temp = array();

       if($this->data_type_arr !== null):
       foreach ($this->data_type_arr[0] as $key => $value) {
         if("email" == $key):
            array_push($temp,  $this->random_email());

           elseif("name" == $key):

            array_push($temp,  $this->random_name());
           

            elseif("password" == $key):
                array_push($temp,  $this->random_password());

                elseif("age" == $key):
                    array_push($temp,  $this->random_age());  

                    elseif("username" == $key):
                       
                     array_push($temp,  $this->random_username());  

                     elseif("timestamp" == $key):
                     array_push($temp,  $this->Defualt_random_Time());
                     elseif("date" == $key): 
                        array_push($temp,  $this->Defualt_random_Date());
                     elseif("longtext" == $key):
                        array_push($temp,  $this->Defualt_random_longText());
                            


        endif;

              }

            else:

                $temp = array();
                foreach ($this->allCols['cols'] as $key => $value):
                   if($this->allCols['cols'][$key]['extra'] !== "auto_increment"):
                    
                if($this->allCols['cols'][$key]['data_type'] == "varchar"):
                  array_push($temp,  $this->Defualt_random());

                elseif( $this->allCols['cols'][$key]['data_type']  == "timestamp"):
              array_push($temp,  $this->Defualt_random_Time());
                elseif($this->allCols['cols'][$key]['data_type']  == "date"):
                    array_push($temp,  $this->Defualt_random_Date());
                elseif($this->allCols['cols'][$key]['data_type'] == "longtext"):
                    array_push($temp,  $this->Defualt_random_longText());
                else:
                    array_push($temp,  $this->Defualt_random_num());
                endif;
                   endif;
                   endforeach;
                 
                endif;



                
  
           return $temp;
   }

   function setDataType($arr){
  $this->data_type_arr = $arr;
  
   }


  



    public function get_names(){
        if($this->data_type_arr == null):
        $string = "";
        
        foreach ($this->names as $key => $value):
         $string .= $this->names[$key].",";
           
        endforeach;
        
    else:

        $string = "";  
foreach ($this->data_type_arr[0] as $key => $value) {
    $string .= $this->data_type_arr[0][$key].",";
}

    endif;
     
        return rtrim($string, ',');
    }




    public function getNumQ(){
        if($this->data_type_arr[0] == null):
        $string = "";
        
        foreach ($this->names as $key => $value):
         $string .= "?,";
           
        endforeach;
     
       

    else:
        $string = "";
        
        foreach ($this->data_type_arr[0] as $key => $value):
         $string .= "?,";
           
        endforeach;

    endif;

    return rtrim($string, ',');

    }





    public function random_char(){
         
   
        return "hello random";
    }
 
    public function random_num(){
        return 55;
    }
 
    public function random_name(){
 
        return Seeds::Names();
 
    }
 
    public function random_email(){
        return Seeds::Emails();
    }
 
    public  function random_password(){
        return Seeds::Password();
    }
 
    public function random_age(){
        return   Seeds::Age();
    }
 
    public function random_username(){
        return Seeds::Username();
    }


    public function Defualt_random(){
       
        return Seeds::Names();
     }
 
     public function Defualt_random_num(){
         return Seeds::Numbers();
     }

     public function Defualt_random_Time(){
         return Seeds::TimeStamp();
     }

     public function Defualt_random_Date(){
         return Seeds::Date();
     }

     public function Defualt_random_longText(){
         return Seeds::LongText();
     }


    public function Generate($val){

        for ($i=0; $i < $val; $i++) { 
            $this->seedData();
        }
       
    }
 
 
    public function MakeJson($arr){

    }


}










?>