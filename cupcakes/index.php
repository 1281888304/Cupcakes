<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h1>Cupcakes</h1>
    <form id="cupcakes" action="confirm.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" >


    </div>
    <fieldset ="topping">
    <legend>Cupcakes Flaovr:</legend>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="grasshopper" name="check_list[]" value="grasshopper">
        <label class="form-check-label" for="flavor">Grasshopper</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="maple" name="check_list[]" value="maple">
        <label class="form-check-label" for="flavor">maple</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="carrot" name="check_list[]" value="carrot">
        <label class="form-check-label" for="flavor">carrot</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="caramel" name="check_list[]" value="caramel">
        <label class="form-check-label" for="flavor">caramel</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="velvet" name="check_list[]" value="velvet">
        <label class="form-check-label" for="flavor">velvet</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="Lemon" name="check_list[]" value="lemon">
        <label class="form-check-label" for="flavor">lemon</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="tiramisu" name="check_list[]" value="tiramisu">
        <label class="form-check-label" for="flavor">tiramisu</label>
    </div>
        <input type="submit" name="submit" value="Submit"/>
    </fieldset>

    </form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
