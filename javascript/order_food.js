var edit_row_id_obj = {"editable":false, "serial":1};

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
                


                if(type=="Starter"){
                    val1.className = "col-lg-4 d-flex justify-content-center";
                    val1.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"position-relative d-flex justify-content-center"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"position-absolute add-food-button"+"><button>Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                }else if(type=="Main Course"){
                    val2.className = "col-lg-4 d-flex justify-content-center";
                    val2.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"position-relative d-flex justify-content-center"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"position-absolute add-food-button"+"><button>Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                }else if(type=="Desert"){
                    val3.className = "col-lg-4 d-flex justify-content-center";
                    val3.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"position-relative d-flex justify-content-center"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"position-absolute add-food-button"+"><button>Add Food</button></div>"+
                                        "</div>"+
                                        "<h3>"+name+"</h3>"+
                                        "<p>"+description+"</p>"+
                                    "</div>";
                }else{
                    val4.className = "col-lg-4 d-flex justify-content-center";
                    val4.innerHTML ="<div class="+"food-card"+">"+
                                        "<h3>Price : "+price+" BDT</h3>"+
                                        "<div class="+"position-relative d-flex justify-content-center"+">"+
                                            "<img src="+"../images/"+image+" width="+"300px"+" height="+"300px"+">"+
                                            "<div class="+"position-absolute add-food-button"+"><button>Add Food</button></div>"+
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



{/* <div class="col-lg-4 d-flex justify-content-center">
    <div class="food-card">
        <h3>Price : 200 BDT</h3>
        <div class="position-relative d-flex justify-content-center">
            <img src="../images/gyoza.webp" alt="" width="300px" height="300px">
            <div class="position-absolute add-food-button"><button>Add Food</button></div>
        </div>
        <h3>Chicken Gyoza</h3>
        <p>Gyoza is a thinly rolled out dough filled with ground meat, sealed and cooked. And considered to be Japanese cuisine.</p>
    </div>
</div> */}