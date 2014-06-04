
<html>
    
    <h1>World Travel Site</h1>
    
    <?php
    $continents = array("Europe", "Africa", "North America", "Antarctica", "Asia", "South America", "Oceania");
    sort($continents);
    foreach ($continents as $continents){
        echo "<ul>$continents</ul>";
    }
    
    
            
           ?>
    
    
</html>