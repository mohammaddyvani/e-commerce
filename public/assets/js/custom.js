loadCart()

async function loadCart(){
    const res = await fetch('/data-cart')

    if(res.status == 200){
        var data = await res.json()
        $('.cartCount').text(data.count)
        if(data.count > 0){
            $('.cartCount').removeClass('d-none')
        } else {
            $('.cartCount').addClass('d-none')
        }

        var render = ``
        var subtotal = 0
        $.each(data.data, function(key, val){
            render += `
                    <li class="minicart-product">
                        <a class="product-item_remove remove-from-cart" href="/remove-from-cart/${val.id}"><i class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="${$('meta[name="base_url"]').attr('content')}/${val.product.image}" alt="Uren's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">${val.product.name}</a>
                            <span class="product-item_quantity">${val.quantity} x ${number_format(parseInt(val.product.price))}</span>
                        </div>
                    </li>`

            subtotal += parseInt(val.product.price) * parseInt(val.quantity)
        })

        $('.minicart-list').html(render)
        $('#subtotal').html(`Rp${number_format(subtotal)}`)

        $('.remove-from-cart').unbind().on('click', async function(e){
            e.preventDefault()
            const res = await fetch($(this).attr('href'), {
                method: 'delete',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        
            if(res.status == 200){
                loadCart()
            } else {
                alert('Data gagal dihapus')
            }
        })
    } else {
        alert('Opps! terjadi kesalahan')
    }
}


$('.add-to-cart').unbind().on('click', async function(e){
    e.preventDefault()
    var url = $(this).attr('href')

    const res = await fetch(url)

    if(res.status == 200){
        loadCart()
    } else {
        alert('Opps! terjadi kesalahan')
    }
})

function totalCart(){
    var total = 0
    $('.cart-item').each(function(){
        total += parseInt($(this).attr('data-price')) * parseInt($(this).attr('data-quantity'))
    })

    return total
}

function number_format(val){
    var number_string = val.toString(),
        sisa = number_string.length % 3,
        rupiah = number_string.substr(0, sisa),
        ribuan = number_string.substr(sisa).match(/\d{3}/g);

    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    return rupiah;
}

// function base_url(){
//     return window.location.origin
// }