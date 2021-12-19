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
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+")"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                }else if(type=="Main Course"){
                    val2.className = "col-lg-4 d-flex justify-content-center";
                    val2.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"relative"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+")"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                }else if(type=="Desert"){
                    val3.className = "col-lg-4 d-flex justify-content-center";
                    val3.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"relative"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+")"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                }else{
                    val4.className = "col-lg-4 d-flex justify-content-center";
                    val4.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"relative"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"absolute"+"><button class="+"add-food-button"+" onclick="+"addFoodButtonPressHandler("+serial+",'"+pass_name+"',"+price+")"+">Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                }
                   
                document.getElementById("starters").appendChild(val1);
                document.getElementById("mains").appendChild(val2);
                document.getElementById("deserts").appendChild(val3);
                document.getElementById("drinks").appendChild(val4);
            }
        }
    };

}
onLoad();
load_cart();

function addFoodButtonPressHandler(serial, name, price){
    total_cost += price;
    document.getElementById("total_price").innerHTML = String(total_cost);

    let obj = {
        "serial": serial,
        "name": name,
        "price": price
    };

    food_cart.push(obj);
    load_cart();
    console.log(food_cart);
}

function removeFoodButtonPressHandler(serial){
    food_cart.map((obj, index)=>{
        if(obj.serial == serial){
            delete food_cart[index];
        }
    });
    console.log(food_cart);
}

function minusButtonPressHandler(){

}

function plusButtonPressHandler(){
    
}

function confirmOrderButtonPressHandler(){

}

function load_cart(){

}

