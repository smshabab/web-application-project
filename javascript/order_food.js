let edit_row_id_obj = {"editable":false, "serial":1};
let total_cost = 0;
let food_cart = [];

function onLoad(){
    
    //call ajax
    let ajax = new XMLHttpRequest();
    let method = "GET";
    let url = "../php/admin_panel.php?get="+true;
    let asynchronous = true;

    ajax.open(method, url, asynchronous);

    //sending ajax request
    ajax.send();
    ajax.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            let searchData = JSON.parse(this.responseText);
            console.log(searchData);
            document.getElementById("starters").innerHTML = "";
            document.getElementById("mains").innerHTML = "";
            document.getElementById("deserts").innerHTML = "";
            document.getElementById("drinks").innerHTML = "";
            let i = 0;
            for(i; i<searchData.length; i++)
            {
                let serial = searchData[i].serial;
                let name = searchData[i].name;
                let price =searchData[i].price;
                let description = searchData[i].description;
                let type = searchData[i].type;
                let image = searchData[i].image;

                let val1 = document.createElement("Div");
                let val2 = document.createElement("Div");
                let val3 = document.createElement("Div");
                let val4 = document.createElement("Div");

                let pass_name = "";
                for(let j=0; j<name.length; j+=1){
                    if(name[j]==' '){
                        pass_name+='-';
                    }else{
                        pass_name+=name[j];
                    }
                    
                }


                if(type=="Starter"){
                    val1.className = "col-lg-4 d-flex justify-content-center";
                    val1.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"relative"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+",'"+image+"')"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                    document.getElementById("starters").appendChild(val1);
                }else if(type=="Main Course"){
                    val2.className = "col-lg-4 d-flex justify-content-center";
                    val2.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"relative"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+",'"+image+"')"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                    document.getElementById("mains").appendChild(val2);
                }else if(type=="Desert"){
                    val3.className = "col-lg-4 d-flex justify-content-center";
                    val3.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"relative"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+",'"+image+"')"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                    document.getElementById("deserts").appendChild(val3);
                }else{
                    val4.className = "col-lg-4 d-flex justify-content-center";
                    val4.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"relative"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+",'"+image+"')"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                    document.getElementById("drinks").appendChild(val4);
                }
                   
                
                
                
                
            }
        }
    };

}
onLoad();
load_cart();

function addFoodButtonPressHandler(serial, name, price, image){
    let check = true;
    food_cart.map((obj, index)=>{
        if(obj.serial == serial){
            check = false;
            alert("Food has Already been added to the Cart");
        }
    });

    if(check){
        total_cost += price;
        document.getElementById("total_price").innerHTML = String(total_cost);

        let obj = {
            "serial": serial,
            "name": name,
            "price": price,
            "image": image,
            "count": 1
        };

        food_cart.push(obj);
        load_cart();
        console.log(food_cart);
   }
}

function removeFoodButtonPressHandler(serial){
    food_cart.map((obj, index)=>{
        if(obj.serial == serial){
            total_cost -= (obj.price*obj.count);
            document.getElementById("total_price").innerHTML = String(total_cost);
            delete food_cart[index];
        }
    });
    console.log(food_cart);
    load_cart();
}

function minusButtonPressHandler(serial){
    console.log("Minus button pressed : "+serial);

    food_cart.map((obj, index)=>{
        if(obj.serial == serial){
            if(obj.count>1 ){
                obj.count--;
                total_cost -= obj.price;
                document.getElementById("total_price").innerHTML = String(total_cost);
            }else{
                alert("Food Count Cannot be less than 1");
            }
            
        }
    });
    console.log(food_cart);
    load_cart();
}

function plusButtonPressHandler(serial){
    console.log("Plus button pressed : "+serial);
    

    food_cart.map((obj, index)=>{
        if(obj.serial == serial){
            obj.count++;
            total_cost += obj.price;
            document.getElementById("total_price").innerHTML = String(total_cost);
        }
    });
    console.log(food_cart);
    load_cart();
}

function confirmOrderButtonPressHandler(){
    if(total_cost!=0){
        const update_row_value = JSON.stringify(food_cart);
        let ajax = new XMLHttpRequest();
        let method = "GET";
        let url = "../php/order_food.php?insert="+update_row_value;
        let asynchronous = true;
        ajax.open(method, url, asynchronous);
        ajax.send();
        ajax.onreadystatechange = function()
        {   
            if(this.readyState == 4 && this.status==200)
            {
                if(JSON.parse(this.responseText)==1){
                    alert("Order Complete. Please Check My Orders Page.");
                    total_cost = 0;
                    document.getElementById("total_price").innerHTML = String(total_cost);
                    food_cart = [];
                    load_cart();
                }
            }
        };
    }else{
        alert("Select an item to place an order");
    }
}

function load_cart(){
    document.getElementById("total_food_count").innerHTML = String(food_cart.length);
    document.getElementById("list_cart").innerHTML = "";

    for(i=0; i<food_cart.length; i++){
        if(food_cart[i]==undefined){
            continue;
        };
        let val = document.createElement("Div");
        val.className = "col-lg-12 cart-items";
        val.innerHTML = "<div class="+"row"+">"+
                            "<div class="+"col-lg-5"+">"+
                                "<div class="+"product"+">"+
                                    "<div class="+"row"+">"+
                                        "<div class="+"col-lg-5"+">"+
                                            "<img src="+"../images/"+food_cart[i].image+" width="+"100px"+">"+
                                        "</div>"+
                                        "<div class="+"col-lg-7"+">"+
                                            "<div class="+"product-right"+">"+
                                                "<p>"+food_cart[i].name+"</p><br>"+
                                                "<button onclick="+"removeFoodButtonPressHandler("+food_cart[i].serial+")"+">Remove</button>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                            "<div class="+"col-lg-3"+">"+
                                "<div class="+"quantity"+">"+
                                    "<button onclick="+"minusButtonPressHandler("+food_cart[i].serial+")"+">-</button>"+
                                    "<label>"+food_cart[i].count+"</label>"+
                                    "<button onclick="+"plusButtonPressHandler("+food_cart[i].serial+")"+">+</button>"+
                                "</div>"+
                            "</div>"+
                            "<div class="+"col-lg-2"+">"+
                                food_cart[i].price+" BDT"+
                            "</div>"+
                            "<div style="+"text-align:right;"+" class="+"col-lg-2"+">"+
                                (food_cart[i].price*food_cart[i].count)+" BDT"+
                            "</div>"+
                        "</div>";
        document.getElementById("list_cart").appendChild(val);
    }

    
}

