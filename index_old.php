<?php include_once 'session.php'; ?>
<html>
    <head>
        <title>$ Conta</title>
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="shortcut icon" href=css/icon.ico" type="image/x-icon" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #f1f1f1;
            }

            h1 {
                font-size: 30px;
            }

            .box {
                width: 1270px;
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-top: 100px;
            }
            .modal_button{
                align: left;
            }

        </style>
    </head>
    <script src="<?php echo dir; ?>/js/ajax.js"></script>
    <body>
        <div class="container box">
            <h1 align="center">Fechando a conta</h1>

            <div align="right">
                <button type="button" id="modal_button" class="btn btn-info">Adicionar Item</button>
                <!-- It will show Modal for Create new Records !-->
            </div>

            <br />
            <div id="result" class="table-responsive">
                <!-- Data will load under this tag!-->

            </div>
        </div>
    </body>
</html>

<!-- This is Customer Modal. It will be use for Create new Records and Update Existing Records!-->
<div id="customerModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Records</h4>
            </div>
            <div class="modal-body">
                <label>Enter First Name</label> <input type="text" name="first_name"
                                                       id="first_name" class="form-control" /> <br /> <label>Enter Last
                    Name</label> <input type="text" name="last_name" id="last_name"
                                    class="form-control" /> <br />
            </div>
            <div class="modal-footer">
                <input type="hidden" name="customer_id" id="customer_id" /> <input
                    type="submit" name="action" id="action" class="btn btn-success" />
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>