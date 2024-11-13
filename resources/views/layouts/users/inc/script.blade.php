<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3723baec84.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.add-to-cart-btn').click(function(e) {
            e.preventDefault();
            var produkId = $(this).data('produk-id');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'post',
                url: "{{url('users/tambah-keranjang')}}",
                data: {
                    'produk_id': produkId,
                    '_token': csrfToken
                },
                success: function(data) {
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    alert('Terjadi kesalahan saat menambahkan produk ke keranjang');
                }
            });
        });
    });


    $(document).ready(function() {
        $('.update-item-btn').click(function(e) {
            e.preventDefault();
            var produkId = $(this).data('produk-id');
            console.log(produkId);

            $.ajax({
                type: 'post',
                url: "{{url('users/tambah-quantity')}}",
                data: {
                    'produk_id': produkId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        // Hapus item dari DOM atau perbarui tampilan keranjang belanja
                        window.location.href = window.location.href;
                    } else {
                        alert('gagal nambah di cart');
                    }
                },
                error: function(xhr, status, error) {
                    alert('gagal nambahin produk');
                }
            });
        });
    });

    $(document).ready(function() {
        $('.eraser-item-btn').click(function(e) {
            e.preventDefault();
            var produkId = $(this).data('produk-id');
            console.log(produkId);

            $.ajax({
                type: 'post',
                url: "{{url('users/kurang-quantity')}}",
                data: {
                    'produk_id': produkId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        // Hapus item dari DOM atau perbarui tampilan keranjang belanja
                        window.location.href = window.location.href;
                    } else {
                        alert('gagal nambah di cart');
                    }
                },
                error: function(xhr, status, error) {
                    alert('gagal nambahin produk');
                }
            });
        });
    });

    $('.remove-item-btn').click(function(e) {
        e.preventDefault();
        var productId = $(this).data('produk-id');
        console.log(productId)
        $.ajax({
            type: 'post',
            url: "{{ url('users/hapus-keranjang') }}/" + productId,
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    // Hapus item dari DOM atau perbarui tampilan keranjang belanja
                    window.location.href = window.location.href;
                } else {
                    alert('Failed to remove item from cart');
                }
            },
            error: function(xhr, status, error) {
                alert('Error removing item from cart');
            }
        });
    });

    $(document).ready(function() {
        $('#pengeluaran').on('submit', function(e) {
            e.preventDefault();


            $.ajax({
                type: 'post',
                url: "{{ url('users/pengeluaran-lainnya') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    if (response.success) {
                        // Hapus item dari DOM atau perbarui tampilan keranjang belanja
                        Swal.fire("Data telah di input");
                    }
                },
                error: function(xhr, status, error) {
                    alert('gagal nambahin produk');
                }
            });
        });
    });
</script>