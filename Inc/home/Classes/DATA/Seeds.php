<?php
namespace Inc\home\Classes\DATA;

class Seeds{



 public static function Names(){
    $arr = array("Hossam", "Eslam" , "Ahmed" , "Mohamed" ,
      "Mostafa" , "Hank" , "Aaron" , "Frank" , "Abagnale" ,
      "Edward" , "Abbey" , "James" , "Abourezk" , "Jane" , 
      "Ace" , "John" , "Abigail" , "Adama" , "Rabin" ,
      "Glida" , "Ranke" , "Rae" , "Nigel" , "Reid" ,
      "George" , "Kelly" , "Scott", "Anthony" , "Spider");
    $num = rand(0 , count($arr)-1);
      
        return $arr[$num];
     }


     public static function Emails(){
      
    $name = self::Names();
    $email = $name."@gmail.com";
   
      
        return $email;

     }


     public static function Age(){
      $num = rand(12 , 70);

      return $num;

     }

     public static function Password(){
 
 $na = "aB1cC2dD3eE4fF5gG6hH7iI8jJ9kK0lL@mM#nN!oO^pP+qQ_rR-sS=tT~uU/vV]wW@xX5yY!zZ";

$pass = "";
for ($i=0; $i <10; $i++) { 
    $num = rand(0 , 73);
    $pass .= $na[$num];
}
return  $pass;

     }

     public static function Username(){
   
      $name = self::Names();
      $num = rand(0 , 100);
      $username = $name."".$num;
      return $username;

     }


     public static function Numbers(){
      $num = rand(4000 , 900000);
       
      return $num;

     }

     public static function TimeStamp(){
     $date = date("Y-m-d");
     $time = date("H:i:s");
     $full_date = $date." ".$time;
      return $full_date;
     }

     public static function Date(){
      $date = date("Y-m-d");
     
      $full_date = $date;
       return $full_date;
      }



      public static function LongText(){
       
                  $tx1 = "Space is the boundless three-dimensional extent in which objects 
                  and events have relative position and direction.[1] Physical space
                  is often conceived in three linear dimensions, although modern physicists
                  usually consider it, with time, to be part of a boundless four-dimensional
                  continuum known as spacetime. The concept of space is considered to be of 
                  fundamental importance to an understanding of the physical universe. However,
                  disagreement continues between philosophers over whether it is itself an entity, 
                  a relationship between entities, or part of a conceptual framework.
                  Debates concerning the nature, essence and the mode of existence of space date 
                  back to antiquity; namely, to treatises like the Timaeus of Plato, or Socrates 
                  in his reflections on what the Greeks called khôra , or in the Physics of 
                  Aristotle (Book IV, Delta) in the definition of topos (i.e. place), or in the 
                  later  in the Discourse on Place (Qawl fi al-Makan) of the 11th-century Arab
                  polymath Alhazen.[2] Many of these classical philosophical questions were 
                  discussed in the Renaissance and then reformulated in the 17th century, 
                  particularly during the early development of classical mechanics. 
                  In Isaac Newton's view, space was absolute—in the sense that it existed 
                  permanently and independently of whether there was any matter in the space.[3]
                  Other natural philosophers, notably Gottfried Leibniz, thought instead that 
                  space was in fact a collection of relations between objects, given by their 
                  distance and direction from one another. In the 18th century, the philosopher 
                  and theologian George Berkeley attempted to refute the  in his Essay Towards
                  a New Theory of Vision. ";


            $tx2 = "An atom is the smallest constituent unit of ordinary matter that has the properties of 
                    a chemical element. Every solid, liquid, gas, and plasma is composed of neutral or ionized atoms. 
                    Atoms are extremely small; typical sizes are around 100 picometers (a ten-billionth of a meter, in
                    the short scale).Atoms are small enough that attempting to predict their behavior using classical 
                    physics – as if they were billiard balls, for example – gives noticeably incorrect predictions due 
                    to quantum effects. Through the development of physics, atomic models have incorporated quantum
                    principles to better explain and predict this behavior.
                    Every atom is composed of a nucleus and one or more electrons bound to the nucleus.
                    The nucleus is made of one or more protons and typically a similar number of neutrons. 
                    Protons and neutrons are called nucleons. More than 99.94% of an atom's mass is in the nucleus.
                    The protons have a positive electric charge, the electrons have a negative electric charge,
                    and the neutrons have no electric charge. If the number of protons and electrons are equal, 
                    that atom is electrically neutral. If an atom has more or fewer electrons than protons, then 
                    it has an overall negative or positive charge, respectively, and it is called an ion.
                    The electrons of an atom are attracted to the protons in an atomic nucleus by this electromagnetic 
                    force. The protons and neutrons in the nucleus are attracted to each other by a different force, 
                    the nuclear force, which is usually stronger than the electromagnetic force repelling the positively
                    charged protons from one another. Under certain circumstances, the repelling electromagnetic
                    force becomes stronger than the nuclear force, and nucleons can be ejected from the nucleus,
                    leaving behind a different element: nuclear decay resulting in nuclear transmutation.";
                   
                     
                    $tx3 = "The word engine derives from Old French engin, from the Latin ingenium–the root of the 
                    word ingenious.
                    Pre-industrial weapons of war, such as catapults, trebuchets and battering rams, were called 
                    siege engines, and knowledge of how to construct them was often treated as a military secret. 
                    The word gin, as in cotton gin, is short for engine. Most mechanical devices invented during 
                    the industrial revolution were described as engines—the steam engine being a notable example.
                    However, the original steam engines, such as those by Thomas Savery, were not mechanical engines 
                    but pumps. In this manner, a fire engine in its original form was merely a water pump, with the
                    engine being transported to the fire by horses.
                    In modern usage, the term engine typically describes devices, 
                    like steam engines and internal combustion engines, that burn or 
                    otherwise consume fuel to perform mechanical work by exerting a 
                    torque or linear force (usually in the form of thrust). 
                    Devices converting heat energy into motion are commonly referred to 
                    simply as engines.[3] Examples of engines which exert a torque include 
                    the familiar automobile gasoline and diesel engines, as well as turboshafts. 
                    Examples of engines which produce thrust include turbofans and rockets.
                    When the internal combustion engine was invented, the term motor was initially 
                    used to distinguish it from the steam engine—which was in wide use at the time, 
                    powering locomotives and other vehicles such as steam rollers. The term motor 
                    derives from the Latin verb moto which means to set in motion, or maintain motion.
                    Thus a motor is a device that imparts motion.
                    Motor and engine are interchangeable in standard English.[4] 
                    In some engineering jargons, the two words have different meanings, 
                    in which engine is a device that burns or otherwise consumes fuel,
                    changing its chemical composition, and a motor is a device driven by 
                    electricity, air, or hydraulic pressure, which does not change the chemical
                    composition of its energy source.[5][6] However, rocketry uses the term rocket
                    motor, even though they consume fuel.";
             
                    $ar = array($tx1 , $tx2 , $tx3);
                    $num = rand(0 , 2);
                    $txt = $ar[$num];
                    return $txt;



      }







}













?>