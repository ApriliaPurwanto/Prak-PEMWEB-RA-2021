<!DOCTYPE html>
<html>

<head>
    <title>Euforia</title>
    <link rel="stylesheet" href="index.css">
    <header>
        <h3>Euforia English Club</h3>
        <nav>
            <h4> <a href="home.html" style="color:white;">HOME</a> | <a href="index.php"  style="color:white;">MEMBER</a></h4> 
        </nav>
        </header>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            loadData();

            $("#contentData").on("click", "#addButton", function() {
                $.ajax({
                    url: 'add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            $("#contentData").on("click", "#EditButton", function() {
                var num = $(this).attr("value");
                $.ajax({
                    url: 'edit.php',
                    type: 'get',
                    data: {
                        num: num
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            $("#contentData").on("click", "#DeleteButton", function() {
                var num = $(this).attr("value");
                $.ajax({
                    url: 'service.php?action=delete',
                    type: 'post',
                    data: {
                        num: num
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'data.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
    </script>
</head>

<body>
    <div>
        <h2>Euforia's Active Member</h2>
        <div id="contentData"></div>
    </div>
</body>

    <footer>
        Copyright. All rights reserved.
    </footer>

</html>