  <!-- Footer -->
  <footer class="sticky-footer bg-white">
      <div class="container my-auto">
          <div class="copyright text-center my-auto">
              <span>Copyright &copy; Tunas Negeri Network <?= date('Y'); ?></span>
          </div>
      </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
              </div>
          </div>
      </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js'></script>
  <script>
      var ckeditor = CKEDITOR.replace('ckeditor', {
          height: '400px'
      });

      CKEDITOR.disableAutoInline = true;
      CKEDITOR.inline('editable');
  </script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

  <script>
      $('.custom-file-input').on('change', function() {
          let fileName = $(this).val().split('\\').pop();
          $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });


      $('.form-check-input').on('click', function() {
          const menuId = $(this).data('menu');
          const roleId = $(this).data('role');

          $.ajax({
              url: "<?= base_url('admin/changeaccess'); ?>",
              type: 'post',
              data: {
                  menuId: menuId,
                  roleId: roleId
              },
              success: function() {
                  document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
              }
          });
      });
  </script>
  <script type="text/javascript">
      tampil_tag();

      $(document).ready(function() {
          $('#add').on('click', function() {
              var idberita = $('#id_berita').val();
              var tag = $('#tag').val();
              $.ajax({
                  type: "POST",
                  url: "<?php echo base_url('Berita/addTag') ?>",
                  dataType: "JSON",
                  data: {
                      idberita: idberita,
                      tag: tag
                  },

                  success: function(data) {
                      tampil_tag();
                  }
              });
              return false;
              //   console.log('asdasdsad')

          });

      });

      //   $(document).ready(function() {
      //       $('.detTag').on('click', function() {
      //           //   var idtag = $('#detTag').val();
      //           //   console.log("delete")
      //           //   $.ajax({
      //           //       type: "POST",
      //           //       url: "<?php echo base_url('Berita/detTag') ?>",
      //           //       dataType: "JSON",
      //           //       data: {
      //           //           idtag: idtag
      //           //       },

      //           //       success: function(data) {
      //           //           tampil_tag();
      //           //       }
      //           //   });
      //           //   return false;
      //           //   console.log('asdasdsad')

      //       });

      //   });

      $('#show_tag').on('click', '#delTag', function() {
          var idtag = $(this).attr('data');
          //   console.log(idtag)
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('Berita/delTag') ?>",
              dataType: "JSON",
              data: {
                  idtag: idtag
              },

              success: function(data) {
                  tampil_tag();
              }
          });
          return false;
      });

      function tampil_tag() {
          var idberita = $('#id_berita').val();
          $.ajax({
              type: 'GET',
              url: '<?php echo base_url() ?>Berita/showTag/' + idberita,
              async: true,
              dataType: 'json',
              success: function(data) {
                  var html = '';
                  var i;
                  for (i = 0; i < data.length; i++) {
                      html += "<a href='javascript:;' id='delTag' class='detTag badge badge-danger' data='" + data[i].id_tag + "' value='" + data[i].id_tag + "'>" + data[i].tag + "</a>";
                  }
                  $('#show_tag').html(html);
              }

          });
      }
  </script>
  </body>

  </html>