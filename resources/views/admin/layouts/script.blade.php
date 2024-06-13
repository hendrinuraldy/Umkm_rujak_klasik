<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminLTE') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminLTE') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminLTE') }}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('adminLTE') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('adminLTE') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('adminLTE') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('adminLTE') }}/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminLTE') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminLTE') }}/dist/js/pages/dashboard2.js"></script>
{{-- FontAwesome --}}
<script src="https://kit.fontawesome.com/7fbfb5d8d4.js" crossorigin="anonymous"></script>
<!-- Data tables -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
{{-- Sweetalert 2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Delete confirm sweetalert
    $(document).ready(function() {
        $('.btn-hapus').on('click', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            Swal.fire({
                    title: "Mau hapus data?",
                    text: "Data menu ini akan terhapus secara permanen!",
                    type: "warning",
                    icon: "warning",
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: 'Cancel',
                    closeOnConfirm: false

                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });

        $('.btn-update').click(function(event) {
            event.preventDefault();
            var url = $(this).attr("href");

            Swal.fire({
                title: 'Ingin mengubah data menu?',
                text: 'Kamu akan dialihkan ke halaman ubah data!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, ubah!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        });

        $('.btn-update-promo').click(function(event) {
            event.preventDefault();
            var url = $(this).attr("href");

            Swal.fire({
                title: 'Ingin mengubah data promo?',
                text: 'Kamu akan dialihkan ke halaman ubah data promo!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, ubah!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        });

        $('.btn-hapus-promo').on('click', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            Swal.fire({
                    title: "Mau hapus promo?",
                    text: "Promo ini akan terhapus secara permanen!",
                    type: "warning",
                    icon: "warning",
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: 'Cancel',
                    closeOnConfirm: false

                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
        $('.btn-hapus-testimoni').on('click', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            Swal.fire({
                    title: "Mau hapus testimoni?",
                    text: "Testimoni ini akan terhapus secara permanen!",
                    type: "warning",
                    icon: "warning",
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: 'Cancel',
                    closeOnConfirm: false

                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
        $('.btn-hapus-review').on('click', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            Swal.fire({
                    title: "Mau hapus review?",
                    text: "Review ini akan terhapus secara permanen!",
                    type: "warning",
                    icon: "warning",
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: 'Cancel',
                    closeOnConfirm: false

                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
    });

    new DataTable('#all_menu', {
        responsive: true
    })

    // JQuery to show old values from select
    $(document).ready(function() {
        const menusOldValues = '{{ old('menus') }}'

        if (menusOldValues !== '') {
            $('#nama_menus').val(menusOldValues);
        }
    })
</script>
</body>

</html>
