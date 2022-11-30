<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker4'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        $(function() {
            // Bootstrap DateTimePicker v4
            $('#datetimepicker4').datetimepicker({
                format: 'DD/MM/YYYY'
            });
        });
        </script>
    </div>