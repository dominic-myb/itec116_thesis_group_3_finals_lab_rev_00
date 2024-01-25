<?php
    $samplString = "Hello World from PHP";
    $pageTitle = "Sample";
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include ("app/includes/html/html.head.php");
?>
<body>
    <?php include ("app/includes/components/header.php");?>
    <div><p>dominic</p></div>
    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center col-12" style="height: 70vh;">
            <button id="test-button" class="btn btn-lg btn-primary">Test Button</button>
        </div>
    </div>
    
    <?php 
        include ("app/includes/components/footer.php"); 
        include ("app/includes/html/html.scripts.php");
    ?>
    <script src="assets/js/controller/index.controller.js" type="module" async></script>
</body>
</html>