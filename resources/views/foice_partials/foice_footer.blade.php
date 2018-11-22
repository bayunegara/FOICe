  <!--Footer-->
  <!-- Footer -->
  <footer class="page-footer font-small cyan">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright: IT Puri Bunda</div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  <!--Footer-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('mdb/js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
  <!-- Moment JS -->
  <script type="text/javascript" src="{{ asset('mdb/js/moment-with-locales.min.js') }}"></script>
  <script>
    // Set Tanggal, Bulan, Hari di right content
    const tanggal = moment().format('D');
    const bulan = moment().format('MMMM Y');
    const hari = moment().format('dddd');
    $("#foiceTanggal").text(tanggal);
    $("#foiceBulan").text(bulan);
    $("#foiceHari").text(hari);
  </script>
</body>

</html>