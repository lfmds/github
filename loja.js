//dando erro ao add o produto no carrinho e no valor total, n esta alterando o valor quando remoce ou exclui o produto

if (document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready)
} else{
    ready()
}

function ready(){
    const removerproductbuttons = document.getElementsByClassName("remove")
    for (var i = 0; i < removerproductbuttons.length; i++){
        removerproductbuttons[i].addEventListener("click", removeproduct)
    }

    const quantityinput = document.getElementsByClassName("quantidade")
    for (var i = 0; i < quantityinput.length; i++){
        quantityinput[i].addEventListener("change", updatetotal)
    }

    const addtocartbuttons = document.getElementsByClassName("comprar")
    for (var i = 0; i < addtocartbuttons.length; i++){
        addtocartbuttons[i].addEventListener("click", addproducttocart)
    }
}



function addproducttocart(event){
    const button = event.target
    const productinfos = button.parentElement.parentElement
    const productimage = productinfos.getElementsByClassName("product-img")[0].src
    const productname = productinfos.getElementsByClassName("name-product")[0].innerText
    const productprice = productinfos.getElementsByClassName("preco-iphone")[0].innerText
    
    const productscartname = document.getElementsByClassName("name-product")
    for (var i = 0; i < productscartname.length; i++){
        if(productscartname[i].innerText == productname){
            productscartname[i].parentElement.parentElement.getElementsByClassName("quantidade")[0]
            return
        }
    }

    let newcartproduct = document.createElement("tr")
    newcartproduct.classList.add("cart-product")

    newcartproduct.innerHTML = 
    `
        <td>
            <div class="product">
                <img src="${productimage}" alt="${productname}">
                <div class="info">
                    <div class="name">${productname}</div>
                </div>
            </div>
        </td>
        <td class="price-product">${productprice}</td>

        <td>
            <input type="number" value="1" min="1" class="quantidade">
        </td>
                     
        <td>
            <button class="remove"><i class='bx bx-x'></i></button>
        </td>                          
     `

    const tablebody = document.getElementsByClassName("body-cart")
    tablebody.append(newcartproduct)
    updatetotal()
}





function removeproduct(event){
    event.target.parentElement.parentElement.parentElement.remove()
    updatetotal()
}


function updatetotal(){
    let totalamount = 0
    const cartproduct = document.getElementsByClassName("cart-product")
    for (var i = 0; i < cartproduct.length;i++){
        const productprice = cartproduct[i].getElementsByClassName("price-product")[0].innerText.replace("R$", "").replace(".", "")
        const productquantity = cartproduct[i].getElementsByClassName("quantidade")[0].value

        totalamount += productprice * productquantity
    }
    console.log(totalamount)

    totalamount = totalamount.toFixed(2)
    totalamount = totalamount.replace(".", ",")
    document.querySelector(".total-price").innerText = "R$" + totalamount
}

  




   