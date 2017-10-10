    <?php  
      
    /* Filename: peopleapi.php */  
      
    /* Declare a class to contain a person record */  
      
    class Person {  
      
        var $personID;  
        var $firstName;  
        var $lastName;  
      
    }  
      
      
    /* Declare your variables */  
        $items = array();  
      
    /* Populate your array with a list of dummy records */  
      
        for($i = 0; $i < 10; $i++) {  
            $personRecord = new Person();  
            $personRecord->personID = $i;  
            $personRecord->firstName = "Name $i";  
            $personRecord->lastName = "LastName $i";  
            $items[$i] = $personRecord;    
        }  
      
    /* Set the header type for output */  
      
        header('Content-Type: application/json');  
      
    /* Create a variable to hold your JSON data */  
      
        $jsonOutput =  json_encode($items);  
      
    /* Output the JSON data */  
      
        echo $jsonOutput;  
      
    ?>  
