<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
</head>
<body>
    <?php
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    
    echo "<tr><td colspan='3' align='center'><b>Name : XYZ</b></td></tr>";
    
    echo "<tr>
            <th>Subject Name</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
          </tr>";
    
    echo "<tr><td>Sub1</td><td>50</td><td>40</td></tr>";
    echo "<tr><td>Sub2</td><td>50</td><td>30</td></tr>";
    echo "<tr><td>Sub3</td><td>50</td><td>45</td></tr>";
    echo "<tr><td>Sub4</td><td>50</td><td>48</td></tr>";
    echo "<tr><td>Sub5</td><td>50</td><td>34</td></tr>";
    
    echo "<tr><td><b>Total</b></td><td><b>250</b></td><td><b>197</b></td></tr>";
    
    echo "<tr><td><b>Percentage</b></td><td colspan='3' align='center'>78.8</td></tr>";
    echo "<tr><td><b>Result</b></td><td>Passed/Failed</td><td>With Distinction</td></tr>";
    
    echo "</table>";
    ?>
</body>
</html>
