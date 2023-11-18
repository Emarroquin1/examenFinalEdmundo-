<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <title>Reportes</title>
</head>

<body style="background-color: #b4b4b4;">
    <div class="container">

        <div class="card">
            <h3 class="text-center">
                EXAMEN PRACTICO FINAL REPORTES CON DOMPDF
            </h3>
            <h6 class="text-center">Integrantes:</h6>
            <h6 class="text-center">Erick Alberto Garcia Marroquin</h6>
            <h6 class="text-center">Jhon James Boyaca Uribe</h6>
            <hr>
            <hr>
            <h5 class="text-center">REPORTE DE PRODUCTOS POR CATEGORIAS</h5>
            <form action="reportes/rptProductoByCategory.php" method="get" target="_blank">
                <div class="row">
                    <div class="col-2">

                    </div>
                    <div class="col-4">
                        <select class="form-control" id="cmbIdCategoria" name="cmbIdCategoria">
                            <option value="">
                                Seleccione
                            </option>
                        </select>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary">
                            PDF Reporte Productos Por Categorias
                        </button>
                    </div>

                </div>

            </form>
            <script>
                $("#cmbIdCategoria").blur(function() {
                    var cmbIdCategoria = $("#cmbIdCategoria").val();
                    $("#cmbIdCategoria").val(cmbIdCategoria);
                });
            </script>
            <form action="../Controller/ReporteController.php" method="post" target="_blank">
                <div class="row text-center">
                    <div class="col-5">
                        <input type="hidden" name="key" value="getExcel1">
                        <input type="hidden" name="cmbIdCategoria" id="cmbIdCategoria">
                    </div>
                    <div class="col-3">
                        <br>
                        <button class="btn btn-outline-success btn-sm">
                            <img src="img/excel.png" style="width: 30px; height: 30px;">
                            Excel Reporte Productos Por Categorias
                        </button>
                    </div>
                </div>

                <br>
            </form>
            <hr>
            <h5 class="text-center">REPORTE DE CLIENTES MEXICANOS</h5>
            <form action="reportes/rptCustomerByCountry.php" method="get" target="_blank">
                <div class="row">
                    <div class="col-2">

                    </div>
                    <div class="col-4">

                        <label for="txtCountry">
                            País
                        </label>
                        <input class="form-control" id="txtCountry" placeholder="Escriba el País" type="text" name="txtCountry"></input>
                    </div>


                    <div class="col-3">
                        <br>
                        <button class="btn btn-primary">
                            PDF Reporte Clientes
                        </button>
                    </div>
                </div>

                <br>
            </form>
            <script>
                $("#txtCountry").blur(function() {
                    var country = $("#txtCountry").val();
                    $("#country").val(country);
                });
            </script>
            <form action="../Controller/ReporteController.php" method="post" target="_blank">
                <div class="row text-center">
                    <div class="col-5">
                        <input type="hidden" name="key" value="getExcel2">
                        <input type="hidden" name="country" id="country">
                    </div>
                    <div class="col-3">
                        <br>
                        <button class="btn btn-outline-success btn-sm">
                            <img src="img/excel.png" style="width: 30px; height: 30px;">
                            Excel Reporte Clientes
                        </button>
                    </div>
                </div>

                <br>
            </form>

            <hr>
            <h5 class="text-center">REPORTE DE PRODUCTOS CON POCA EXISTENCIA</h5>
            <form action="reportes/rptProductoByStock.php" method="get" target="_blank">
                <div class="row">
                    <div class="col-2">

                    </div>
                    <div class="col-4">

                        <label for="txtStock">
                            Cantidad
                        </label>
                        <input class="form-control" id="txtStock" placeholder="Escriba la cantidad" type="number" name="txtStock"></input>
                    </div>


                    <div class="col-3">
                        <br>
                        <button class="btn btn-primary">
                            PDF Reporte Productos Poca Existencia
                        </button>
                    </div>
                </div>

                <br>
            </form>
            <script>
                $("#txtStock").blur(function() {
                    var stock = $("#txtStock").val();
                    $("#stock").val(stock);
                });
            </script>
            <form action="../Controller/ReporteController.php" method="post" target="_blank">
                <div class="row text-center">
                    <div class="col-5">
                        <input type="hidden" name="key" value="getExcel3">
                        <input type="hidden" name="stock" id="stock">
                    </div>
                    <div class="col-3">
                        <br>
                        <button class="btn btn-outline-success btn-sm">
                            <img src="img/excel.png" style="width: 30px; height: 30px;">
                            Excel Reporte Productos Poca Existencia
                        </button>
                    </div>
                </div>
                <br>
            </form>
            <hr>
            <h5 class="text-center">REPORTE DE CONTACTO DE EMPLEADOS</h5>
            <form action="reportes/rptEmploye.php" method="get" target="_blank">
                <div class="row text-center">
                    <div class="col-5">

                    </div>
                    <div class="col-3">
                        <br>
                        <button class="btn btn-primary">
                            Reporte Contacto Empleado
                        </button>
                    </div>
                </div>

                <br>
            </form>
            <form action="../Controller/ReporteController.php" method="post" target="_blank">
                <div class="row text-center">
                    <div class="col-5">
                        <input type="hidden" name="key" value="getExcel4">
                    </div>
                    <div class="col-3">
                        <br>
                        <button class="btn btn-outline-success btn-sm">
                            <img src="img/excel.png" style="width: 30px; height: 30px;">
                            Excel Reporte Contacto Empleado
                        </button>
                    </div>
                </div>

                <br>
            </form>
        </div>


    </div>
    </div>
</body>

</html>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- SweetAlert CDN para el script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.js"></script>

<!-- CDN para DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<!-- DataTables Buttons JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        getComboCategorias();
    });

    function getComboCategorias() {
        $.ajax({
            url: "../controller/ReporteController.php",
            type: "post",
            data: {
                key: "getComboCategorias"
            }
        }).done(function(resp) {
            //console.log(resp)
            $("#cmbIdCategoria").empty();
            $("#cmbIdCategoria").append(resp);

        }).fail(function() {
            console.log("Error al recuperar datos (funcion getComboCategorias())")
        });
    }
</script>