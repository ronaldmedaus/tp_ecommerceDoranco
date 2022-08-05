

//ajout au panier via le bouton d'ajout

let button  = document.getElementById("addCart") 


button.addEventListener("click",() => {
   let productData = JSON.parse(document.getElementById('data-product').innerText)

   //on va chercher ds le LS si il existe déjà un panier : si oui on récupère et on ajoute productData si non on le créer
   let cartItem = localStorage.getItem("cart")

   if(cartItem === null){
    //dans ce cas il y a pas de panier enregistré en Localstorage

    let cart = [productData]

    localStorage.setItem("cart",JSON.stringify(cart))

   } else {
        //cas ou il existe un panier ds le localstorage

        let arrayProducts = JSON.parse(cartItem)
        arrayProducts.push(productData)

        localStorage.setItem("cart",JSON.stringify(arrayProducts))

   }

})


//l'affichage du panier

function getCartItems(){

    let cart = localStorage.getItem('cart')

    let cartHtml = document.getElementById('cart')

    if(cart === null){
        cartHtml.innerHTML = "<h3> Votre panier est vide </h3>"
    }else {
        cartHtml.innerHTML = ""
        JSON.parse(cart).forEach((product)=>{
           let div = document.createElement('div')

           div.innerHTML = `<h3>${product.name}</h3> <h4>${product.price}</h4>`
           div.style.display = 'flex' 
            div.style.justifyContent = 'space-around'

           cartHtml.appendChild(div) 
        })
    }

}

