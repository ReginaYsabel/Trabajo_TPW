
//Funcion para mostrar elmento al hacer click
function log1(){
    document.getElementById("log1").style.display="block";
    document.getElementById("ing").style.color="#FEC085";
    document.getElementById("log2").style.display="none";
    document.getElementById("cre").style.color="#555555";
}

function log2(){
    document.getElementById("log2").style.display="block";
    document.getElementById("cre").style.color="#FEC085";
    document.getElementById("log1").style.display="none";
    document.getElementById("ing").style.color="#555555";
}


//Funcion para filtrar los productos por categorias
function cambio(){
    var combo = document.getElementById("categorias");
    var index = combo.options[combo.selectedIndex].text;
    var elements = document.getElementsByClassName("item");
    var i;
    if(index == "Alimento"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("categoria_1")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "Arena y Cuidado"){
        for (i = 0; i < elements.length; i++){
                      
            if(elements[i].classList.contains("categoria_2")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }         
        }
    }

    else if(index == "Cuidado e higiene"){
        for (i = 0; i < elements.length; i++){
                      
            if(elements[i].classList.contains("categoria_2")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }         
        }
    }

    else if(index == "Accesorios"){
        for (i = 0; i < elements.length; i++){           
            if(elements[i].classList.contains("categoria_3")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }         
        }
    }

    else if(index == "Ver todo"){
        for (i = 0; i < elements.length; i++){
            elements[i].style.display = "";                             
        }
    }

}

//Funcion para filtrar por marcas
function cambio_marcas(){
    var combo = document.getElementById("marcas");
    var index = combo.options[combo.selectedIndex].text;
    var elements = document.getElementsByClassName("item");
    var i;
    
    if(index == "Hill's"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("hills")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "Canbo"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("canbo")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "Royal Canin"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("royal")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "Purina"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("proplan")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "Matisse"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("matisse")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "Ver todo"){
        for (i = 0; i < elements.length; i++){
            elements[i].style.display = "";                             
        }
    }

}

//Funcion para filtrar por precio
function cambio_precio(){
    var combo = document.getElementById("precio");
    var index = combo.options[combo.selectedIndex].text;
    var elements = document.getElementsByClassName("item");
    var i;
    if(index == "0 - 40"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("precio1")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "40 - 80"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("precio2")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "80 - 120"){
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("precio3")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "120 - 160"){ 
        for (i = 0; i < elements.length; i++){          
            if(elements[i].classList.contains("precio4")){
                elements[i].style.display = "";
            }   
            else{
                elements[i].style.display = "none";
            }      
        }                
    }

    else if(index == "Ver todo"){
        for (i = 0; i < elements.length; i++){
            elements[i].style.display = "";                             
        }
    }
}

//Funcion para mostrar el menu de filtros
function filtros(){
    document.getElementById("opcion_filtro").classList.toggle("mostrar");                
}

//Funcion para incrementar la cantidad de producto en un producto de manera singular
function incremento(){
    document.getElementById("cantidad").value++;
}

//Funcion para disminuir la cantidad de producto en un producto de manera singular
function decremento(){
    if(document.getElementById("cantidad").value > 0){
        document.getElementById("cantidad").value--;
    }   
}

//Funcion para colocar las cantidades de productos elegidos al carrito
function cantidad() {
    if ($('.cart').text() == 0) {
        $('.cart').text($('.cantidad').val());
    }
    else {
        $('.cart').text(parseInt($('.cart').text()) + parseInt($('.cantidad').val()));
    }
    localStorage.setItem("ultimo", $('.cart').text());
}

//Funcion para colocar el numero de productos en el carrito
function add_item(){
    window.onload=function(){
        if(localStorage.getItem("ultimo")!=null){
            var ultimo =localStorage.getItem("ultimo");
            $('.cart').text(ultimo);
            
        }
    }
}

//Funcion para obtener los totales por producto, multiplicando precio por cantidad
function get_subtotal(cant, p){
    return p*cant;
}

//Funcion para crear un elemento "li" al carrito de compras
var j = 1;
function create_li(){
    var li = document.createElement("li");
    li.className = "dropdown_list";
    li.id = "list"+j+"";
    document.getElementById("ul_item").appendChild(li);  
    j++; 
    return li;
}

//Funcion para agregar al elmento "li" la imagen de su producto respectivo
function create_img(){
    var div = document.createElement("div");
    div.className="item_cart";
    var image = document.getElementById("image_product").cloneNode(true);
    div.appendChild(image);
    return div;
}

//Funcion para colocar nombre y precio del producto al elmento "li"
function create_info(){
    var div = document.createElement("div");
    div.className="info_list";
    var h4_1 = document.createElement("h4");
    h4_1.textContent = document.getElementById("name_product").textContent;
    var h4_2 = document.createElement("h4");
    h4_2.className="cart_price";
    h4_2.textContent = document.getElementById("price_product").textContent;
    div.appendChild(h4_1);
    div.appendChild(h4_2);
    return div;
}

//Funcion para eliminar dun elemnto del array mediante indice e id del elemento
function del_array(array,array2, name){
    for (var i = 0; i < array.length; i++) {
        array[i].id=name;
        array.splice(i,1);
        array2.splice(i,1);
     }
}

//Funcion para eliminar un producto del carrito y de los elementos relacionados
function eliminar(){   
    $(".ul_item").on("click", "#close", function(){
        var li = $(this).parent().attr("id");
        var cant = $("#"+li).find("#cantidad_cart").val();
        $('.cart').text(parseInt($('.cart').text()) - cant);
        localStorage.setItem("ultimo", $('.cart').text());
        del_array(products,inf,li);
        actualizar();
        $("#"+li).remove();
    });
   
}

//Funcion para crear el icono que permitira eliminar un producto del carrito
function create_i(){
    var i = document.createElement("i");
    i.className="fas fa-times";
    i.id="close";
    return i;
}

//Funcion que creara en elemento "input" donde se almacenara la cantidad de producto elegido
function create_quantity(){
    
    var div = document.createElement("div");
    div.className="_quantity";   
    var input = document.createElement("input");
    input.type="number";
    input.name="num_item[]";
    input.min=1;
    input.value=document.getElementById("cantidad").value;
    input.size="4";
    input.className="cantidad cart_cantidad";
    input.id="cantidad_cart";   
    div.appendChild(input);   
    return div;
}

//Variable donde se almacenaran los productos del carrito
var products = [];
//Variable que almacenara los codigos de los productos del carrito
var inf = [];
//Variable para almacenar el html de los productos;
var pr = [];

//Funcion que agrega los productos al carrito
function agregar_li(){   
    var li = create_li();
    li.appendChild(create_img());
    li.appendChild(create_info());
    li.appendChild(create_i());
    li.appendChild(create_quantity());
    products.push(li);  
    pr.push(li.outerHTML);
    localStorage.setItem("productos",JSON.stringify(pr));    
}

//Funcion para obtener el codigo de los productos del carrito, para almacenarlo en una cookie
function get_inf(){  
    var sku = $("#span_sub").text();
    inf.push(sku);
    document.cookie = "sku="+JSON.stringify(inf);   
}

//Funcion que agrega productos al carrito, establece el valor de la cantidad productos del carrito,
// actualiza el precio del carrito y obtiene informacion de los codigos
function add_cart(){    
    cantidad();
    agregar_li();
    actualizar();  
    get_inf();
}

//Funcion que actualiza el precio del carrito
function actualizar(){
    var total = 0;
    var i = 0;
    var cart = 0;
    
    while(i < products.length){
        var valor = $(products[i]).find('.cantidad').val();
        var precio = $(products[i]).find('.cart_price').text();
        cart += parseInt(valor);
        total += (valor * precio)
        i++;
    } 
    $("#pago_final").val(total.toFixed(2));
    $('.cart').text(cart);
    localStorage.setItem("ultimo", $('.cart').text());
}

//Funcion que muestra el carrito
function mostrar() {
    document.getElementById("abrir").style.width="100%";
    $("body").css("overflow", "hidden");
}

//Funcion que oculta al carrito
function ocultar(){
    $('html').click(function (e) {
        if (e.target.id == 'abrir') {
            document.getElementById("abrir").style.width="0";
            $("body").css("overflow", "auto");
        } 
    });
    
    
}

//Funcion para agregar productos a la pagina
function create_imgprod(imgs,h41,h42,cant){
    var divA = document.createElement("div");
    divA.className="article_img";
    var divC = document.createElement("div");
    divC.className="container_img";
    var img = document.createElement("img");
    img.src = imgs;
    var span = document.createElement("span");
    span.className= "cant_cart";
    divC.appendChild(img);
    divC.appendChild(span);
    var h4_1 = document.createElement("h4");
    h4_1.textContent = h41;
    h4_1.className = "h4_name";
    var h4_2 = document.createElement("h4");
    h4_2.textContent = (h42*cant).toFixed(2);
    h4_2.className = "h4_price";
    divA.appendChild(divC);
    divA.appendChild(h4_1);
    divA.appendChild(h4_2);  
    return divA;
}

// Funcion para obtener el subtotal del carrito
function get_subtotal(){
    var sub = document.getElementsByClassName("h4_price");
    var total = 0;
    for (i = 0; i < sub.length; i++){
        total += parseFloat(sub[i].textContent);
    }
    return total.toFixed(2);
}

//Funcion para crear el div donde se mostrara el subtotal
function create_subtotal(){
    var div = document.createElement("div");
    div.className= "article_span";
    var span1 = document.createElement("span");
    span1.className= "span_img";
    span1.textContent = "Subtotal";
    var span11 = document.createElement("span");
    span11.id = "span_subtotal";
    span11.textContent = get_subtotal();
    span1.appendChild(span11);

    var span2 = document.createElement("span");
    span2.className="span_img";
    span2.textContent = "Envio";
    var span21 = document.createElement("span");
    span21.id="span_envio";
    span21.textContent = "Calculado en el siguiente paso";
    span2.appendChild(span21);
    div.appendChild(span1);  
    div.appendChild(span2); 
    return div; 
}

//Funcion para crear el div donde mostrara el total
function create_total(){
    var div = document.createElement("div");
    div.className="article_total";
    var span1 = document.createElement("span");
    span1.className="span_img";
    span1.textContent = "Total";
    var span11 = document.createElement("span");
    span11.id = "span_total";
    span11.textContent = document.getElementById("span_subtotal").textContent;
    span1.appendChild(span11);
    div.appendChild(span1);
    return div;
}

//Funcion para agregar productos
function agregar_section(var1,var2,var3,var4){
    var sect = document.getElementById("buy_item");
    sect.appendChild(create_imgprod(var1,var2,var3,var4));
}

//Funcion para mostrar el total
function agregar_total(){
    var sect = document.getElementById("buy_item");
    sect.appendChild(create_subtotal());
    sect.appendChild(create_total());
}

//Funcion para colocar la imagen de fondo y ruta de pagina
function update(name,categ,subc){
    document.getElementById("banner").className = name;
    document.getElementById("h1_cat").textContent = categ;
    document.getElementById("pet_p").textContent= subc;
}

//Funcion para actualizar el total
function update_total(){
    var env = document.getElementById("span_envio");
    env.textContent = 15.99;
    var tot = document.getElementById("span_total");
    var sub = document.getElementById("span_subtotal");
    tot.textContent = (parseFloat(env.textContent) + parseFloat(sub.textContent)).toFixed(2);
    console.log(env.textContent);
}

//Funcion para elegir banner
function banner(catg){
    if(catg == "Perros"){
        return "banner_dog";
    }
    else{
        return "banner_cat"
    }
}




