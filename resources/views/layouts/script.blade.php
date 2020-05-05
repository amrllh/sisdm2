<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src={{url("plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap -->
<script src={{url("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- overlayScrollbars -->
<script src={{url("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{url("dist/js/adminlte.js")}}></script>

<!-- OPTIONAL SCRIPTS -->
<script src={{url("dist/js/demo.js")}}></script>

{{-- addmore --}}
<script src={{url("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js")}}></script>

{{-- jQuery Option --}}
{{-- <script src= {{url("https://code.jquery.com/jquery-3.3.1.min.js")}}></script>  --}}

<script>
    $(document).ready(function () {
        $("#keahlianplus").click(function () {
            var html = $("#keahlianinput").html();
            $(".after-add-ahli").after(html);
        });
        $("#pengalamanplus").click(function () {
            var html = $("#pengalamaninput").html();
            $(".after-add-pengalaman").after(html);

            var html = $("#pengalamaninput2").html();
            $(".after-add-tempatkerja").after(html);

            var html = $("#pengalamaninput3").html();
            $(".after-add-lamakerja").after(html);
        });
        $("body").on("click", ".remove", function () {
            $(this).parents(".control-group").remove();
        });
    });
</script>

{{-- <script>
    function validasi(){
        if(valid == false){
            return false;
            alert('error');
        }
    }  
</script> --}}
{{-- <script> 
    function addOption() { 
        // optionText = 'Premium'; 
        // optionValue = 'premium'; 

        $('#select1').append(`<option value="${optionValue}"> 
                                    ${optionText} 
                                </option>`); 
    } 
</script>  --}}

@section('pagetable')
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src={{url("plugins/jquery-mousewheel/jquery.mousewheel.js")}}></script>
    <script src={{url("plugins/raphael/raphael.min.js")}}></script>
    <script src={{url("plugins/jquery-mapael/jquery.mapael.min.js")}}></script>
    <script src={{url("plugins/jquery-mapael/maps/usa_states.min.js")}}></script>
    <!-- ChartJS -->
    <script src={{url("plugins/chart.js/Chart.min.js")}}></script>
    {{-- <!-- PAGE SCRIPTS -->
    <script src={{url("dist/js/pages/dashboard2.js")}}></script> --}}
    <!-- DataTables -->
    <script src={{url("plugins/datatables/jquery.dataTables.js")}}></script>
    <script src={{url("plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}></script>
    <!-- page script -->
    <script>
     $(function () {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching":true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
        $('#example2').DataTable();
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching":true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
    });
    </script>
@endsection

@section('input')
    <!-- Bootstrap4 Duallistbox -->
    <script src={{url("plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}></script>
    <!-- InputMask -->
    <script src={{url("plugins/moment/moment.min.js")}}></script>
    <script src={{url("plugins/inputmask/min/jquery.inputmask.bundle.min.js")}}></script>
    <!-- date-range-picker -->
    <script src={{url("plugins/daterangepicker/daterangepicker.js")}}></script>
    <!-- bootstrap color picker -->
    <script src={{url("plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{url("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
    <!-- Bootstrap Switch -->
    <script src={{url("plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}></script>

    <script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })

        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
        {
            ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
        format: 'LT'
        })
        
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
@endsection