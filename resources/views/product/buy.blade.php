<img src="{{asset('/storage/uploads/'.$buyData->product_img)}}" alt="">
<h5>product details</h5>
<h5>quantity <input type="text" value="1" id="quanvalue"> <button id="quantity-btn">+</button> </h5>
<button>addtocart</button><button>buy</button>

<script>
    let quanValue = document.getElementById('quanvalue')
    let quan = document.getElementById('quantity-btn')
    quan.addEventListener('click',increase);
    function increase(){
        console.log(quanValue.value++)
    }

</script>
