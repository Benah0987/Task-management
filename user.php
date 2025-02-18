<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
</head>
<body>
    <input type="checkbox" id="checkbox">
    <?php include "inc/header.php"; ?>
    <div class="body">
        <?php include "inc/nav.php"; ?>  
        <section class="section-1">
            Manage Users
        </section>
    </div>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var active = document.querySelector("#navList li:nth-child(3)");
            if (active) {
                active.classList.add("active");
            }
        });
    </script>
</body>
</html>
