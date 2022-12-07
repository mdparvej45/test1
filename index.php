<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class six</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <!-- Use for loop  -->
    <!--
<select name="years">
    <?php
        for($i = 1990 ; $i <= 2020 ; $i++){
            
           echo "<option value=". $i .">". $i ."</option>";
        }
    
    ?>
</select>
<select name="years">
    <?php
        for($r = 2022 ; $r >= 1990 ; $r--){
            
           echo "<option value=". $r .">". $r ."</option>";
        }
    
    ?>
</select>
<br>
<?php
for($i = 1; $i < 11; $i++){
    echo str_repeat('*', $i) . '<br>';
}

?>
<?php
for($i = 11; $i >= 1; $i--){
    echo str_repeat('*', $i) . '<br>';
}
//Times Table 
$num = 10002;
for($i = 1; $i <= 10; $i++){
    $result = $num * $i;
    echo "$num * $i = $result <br>";
}
//deposite application
$deposite = [
    300,
    500,
    800
];
$total = 0;
for($i = 0; $i < count($deposite); $i++){
    $total = $deposite[$i] + $total;
    echo $total . "<br>";

}
//deposite application
$deposites = [
    300,
    500,
    800
];
$total_deposite = [];
$totals = 0;
for($e = 0; $e < count($deposites); $e++){
    $totals = $deposites[$e] + $totals;
    array_push($total_deposite, $totals);

}
print_r($total_deposite);
echo '<br>';
//factorieal calculation:
$number = 10;
$factorial = 1;
for($f = 1; $f < $number; $f++){
    $factorial *= $f;
}
echo $factorial;
echo '<br>';
//factorieal calculation:
$number = 10;
$factorial = 1;
for($f = 1; $f > $number; $f--){
    $factorial *= $f;
}
echo $factorial;
echo '<br>';


//1 to 100 times table with nasted loop
for($t = 1; $t <= 100; $t++){
    for($r = 1; $r <= 10 ; $r++){
        $result = $t * $r;
        echo "$t * $r = $result <br>";
    }
    echo  '=====End======';
    echo "<br>";    
}
echo "<br>";    



//While loop
$p = 1;
while($p <= 100){
    echo $p . '<br>';
    $p++;

}
?>
 -->

<ul>

    <?php
    $names = ['Parvej', 'Korim', 'Hasan', 'Takrim'];
    foreach($names as $name){
        echo "<h1>My name is $name </h1>";
    }

    ?>
</ul>

<!-- //foreach loop use case : -->
    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Detiles</th>
            <th scope="col">Skill</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $names = [
             [
            'Parvej',
            'Web Developer',
            'Full stack web developer',
            'html, css, bootstrap, js and php',
            'Active'], 
             [
            'kamal',
            'Web Developer',
            'Full stack web developer',
            'html, css, bootstrap, js and php',
            'Active'], 
             [
            'Forid',
            'Web Developer',
            'Full stack web developer',
            'html, css, bootstrap, js and php',
            'Active'], 
        
        
        ];
        foreach($names as $key =>$name){
        ?>
        <tr>
            <td><?= ++$key ?></td>
            <td><?= $name['0'] ?></td>
            <td><?= $name['1'] ?></td>
            <td><?= $name['2'] ?></td>
            <td><?= $name['3'] ?></td>
            <td><?= $name['4'] ?></td>

        </tr>
        <?php
        }
        echo '<br>';
        ?>
    </tbody>
</table>

<div class="form-body mt-5">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" method="POST" action="./controllers/singup_backend.php">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name">
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address">
                            </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" name="position">
                                      <option selected disabled value="">Position</option>
                                      <option value="jweb">Junior Web Developer</option>
                                      <option value="sweb">Senior Web Developer</option>
                                      <option value="pmanager">Project Manager</option>
                               </select>
                           </div>


                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password">
                           </div>


                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off">
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off">
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
                            </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="check" id="invalidCheck">
                          <label class="form-check-label">I confirm that all data are correct</label>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- JavaScript Bundle with Popper -->
<script src="./main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php


?>

    