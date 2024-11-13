<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

$phpmarks =[76, 58, 89, 42, 15, 102, 95, 33, 45, 32, 83, 55, 93, 62];
    
                          // foreach loop

                          echo "foreach loop <br>";

                          foreach($phpmarks as $element){

                          echo $element."</br>";
                           }
                  
                  
                           // while loop

                           echo "while loop <br>";

                           $R = 0;
                  
                           while($R<=13){
                           echo $phpmarks[$R]."</br>";
                            $R++;
                                       }
                  
                                      // do while loop
                                      
                                       echo "Do while loop <br>";
                  
                                     $N = 0;
                                       do {
                                          echo  $phpmarks[$N]."<br>";
                                          $N++;
                                      }
                                      while ($N <= 13);
                  
                                      // if-else condition 
                  
                                      $number =86;
                                      
                                      if($number>=80){
                                          echo "The grade is: A+";
                                      }
                                      
                                      else if($number >=70){
                                          echo "This grade is: A";
                                      }
                                      
                                      else if($number >=60){
                                          echo "This grade is: A";
                                      }
                                      
                                      else if($number >=50){
                                          echo "This grade is: B";
                                      }
                                      
                                      else if($number >=40){
                                          echo "This grade is: C";
                                      }
                                      
                                      else if($number >=33){
                                          echo "This grade is: D";
                                      }
                  
                                     else if($number<33){
                                      echo "This grade is: F";
                                     }
    
    ?>
</body>
</html>