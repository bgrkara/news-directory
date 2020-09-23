/*
Buğra Kara
*/
$(".remove-btn").on("click", function(){


        var $data_url   = $(this).data("url");
        //$data_url   = $(this).attr("data-url");  Üstteki ile aynı yukarıda attribute yerine data'yı kullanıyouz.
        Swal.fire({
            title: 'Emin misiniz?',
            text: "Bunu geri döndüremezsin!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, sil!',
            canselButtonText: 'Hayır'
        }).then((result) => {
            if (result.value) {

                window.location.href = $data_url;
            }
        })


    });