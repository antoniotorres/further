<html>
    <body>
        <input type="text" id="datepicker" class="input-small required" placeholder="Fecha">
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="http://www.furthercsc.com/js/bootstrap.js"></script>
    <script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
    <script src="http://www.furthercsc.com/js/jquery-ui-timepicker-addon.js"></script>
    <script>
      $(function() {
      $('#datepicker').datetimepicker({
	  timeFormat: "hh:mm tt"
      });
      });
    </script>
    </body>
</html>