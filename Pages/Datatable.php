<?php 
include 'Head.php'; 
include '../Connections/MysqlDatatable.php';
session_start();
if(!isset($_SESSION['username'])&& !isset($_SESSION['password'])){
  header("location:Login.php");
}
?>

<body>
<script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">


    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="display" style="width:100%"></table>
            </div>
        </div>
    </div>
</body>
<script src="../Js/Datatable.js"></script>
</html>