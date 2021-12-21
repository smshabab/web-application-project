function onLoad(){
    let ajax = new XMLHttpRequest();
    let method = "GET";
    let url = "../php/my_orders.php?get="+true;
    let asynchronous = true;

    ajax.open(method, url, asynchronous);

    //sending ajax request
    ajax.send();
    ajax.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            let searchData = JSON.parse(this.responseText);
            document.getElementById("selected_foods").innerHTML = "";
            
            
            let serial = searchData[0].serial;
            document.getElementById("order_no").innerHTML = String(serial);
            let food_cart = searchData[0].food_cart;
            let obj = JSON.parse(food_cart);

            let total_price = 0;
            let i = 1;
            obj.map(obj=>{

                let name = obj.name;
                let price = obj.price;
                let count = obj.count;
                let pass_name = "";

                for(let j=0; j<name.length; j+=1){
                    if(name[j]=='-'){
                        pass_name+=' ';
                    }else{
                        pass_name+=name[j];
                    }
                }
                
                let val = document.createElement("Div");
                val.className = "row d-flex justify-content-center";
                val.innerHTML = "<div class="+"col-lg-1"+">"+
                                    i+
                                "</div>"+
                                "<div style="+"text-align:left;"+" class="+"col-lg-4"+">"+
                                    pass_name+
                                "</div>"+
                                "<div class="+"col-lg-2"+">"+
                                    count+
                                "</div>"+
                                "<div style="+"text-align:right;"+" class="+"col-lg-3"+">"+
                                    (price*count)+" BDT"+
                                "</div>";
                document.getElementById("selected_foods").appendChild(val);
                i++;
                total_price+=(price*count);
            });
            document.getElementById("total_price").innerHTML = String(total_price);


            
            
        }
    };
}

onLoad();