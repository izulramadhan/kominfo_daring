<html>

<head>
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <? $this->load->view('backend/template/css') ?>

<script type="text/javascript">
        $(function () {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });
    </script>

</head>

<body>

<? $this->load->view('backend/template/header') ?>

    <div class="container-fluid">
        <form>
            <div class="form-group p-5">
                <label>Periode Tanggal Magang</label>

                <div class="input-group w-25">
                    <input type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker"
                        data-target=".startdate" />
                    <div class="input-group-append">
                        <span class="input-group-text">s/d</span>
                    </div>
                    <input type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker"
                        data-target=".enddate" />
                </div>

                <a href="#" class="btn btn-sm light-blue darken-3 mt-4" style="color:white;">Atur Magang</a>

            </div>
        </form>
    </div>


    <!-- Javascript -->

    <? $this->load->view('backend/template/js') ?>

    <script>
        $(document).ready(function () {
            setDateRangePicker(".startdate", ".enddate")
        })

        function setDateRangePicker(input1, input2) {
            $(input1).datetimepicker({
                format: "YYYY-MM-DD",
                useCurrent: false
            })
                $(input1).on("change.datetimepicker", function (e) {
                $(input2).val("")
                $(input2).datetimepicker('minDate', e.date);
            })
                $(input2).datetimepicker({
                    format: "YYYY-MM-DD",
                    useCurrent: false
             })
        }
    </script>

    <!--/.EndJavascript-->

</body>

</html>