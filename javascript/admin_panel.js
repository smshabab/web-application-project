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
            document.getElementById("foods").innerHTML = "";
            let i = 0;
            for(i; i<searchData.length; i++)
            {
                let serial = searchData[i].serial;
                let name = searchData[i].name;
                let price =searchData[i].price;
                let description = searchData[i].description;
                let type = searchData[i].type;
                let image = searchData[i].image;

                let val = document.createElement("Div");



                if((edit_row_id_obj.editable==true) && (serial==edit_row_id_obj.serial)){
                    val.innerHTML = "<div class="+"food-card"+">"+
                                    "<div class="+"row"+">"+
                                        "<div class="+"col-lg-2"+">"+
                                            "<img src="+"../images/"+image+" alt="+"ImageNotFound"+">"+
                                        "</div>"+
                                        "<div class="+"col-lg-3 second-col"+">"+
                                            "<table>"+
                                               "<tr>"+
                                                    "<th width="+"40%"+">Name</th>"+
                                                    "<td width="+"20%"+">:</td>"+
                                                    "<td width="+"40%"+"><input type="+"text"+"></td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<th>Price</th>"+
                                                    "<td>:</td>"+
                                                    "<td>"+price+"</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<th>Type</th>"+
                                                    "<td>:</td>"+
                                                    "<td>"+type+"</td>"+
                                                "</tr>"+
                                            "</table>"+
                                       "</div>"+
                                        "<div class="+"col-lg-5 third-col"+">"+
                                            "<table>"+
                                                "<tr>"+
                                                    "<th>Description</th>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>"+
                                                        description+
                                                   "</td>"+
                                                "</tr>"+
                                            "</table>"+
                                        "</div>"+
                                        "<div class="+"col-lg-2 fourth-col"+">"+
                                            "<button onclick="+"editButtonPressHandler("+serial+")"+">Edit</button><br><br>"+
                                            "<button onclick="+"deleteButtonPressHandler("+serial+")"+">Delete</button>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>";
                }else{
                    val.innerHTML = "<div class="+"food-card"+">"+
                                    "<div class="+"row"+">"+
                                        "<div class="+"col-lg-2"+">"+
                                            "<img src="+"../images/"+image+" alt="+"ImageNotFound"+">"+
                                        "</div>"+
                                        "<div class="+"col-lg-3 second-col"+">"+
                                            "<table>"+
                                               "<tr>"+
                                                    "<th width="+"40%"+">Name</th>"+
                                                    "<td width="+"20%"+">:</td>"+
                                                    "<td width="+"40%"+">"+name+"</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<th>Price</th>"+
                                                    "<td>:</td>"+
                                                    "<td>"+price+"</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<th>Type</th>"+
                                                    "<td>:</td>"+
                                                    "<td>"+type+"</td>"+
                                                "</tr>"+
                                            "</table>"+
                                       "</div>"+
                                        "<div class="+"col-lg-5 third-col"+">"+
                                            "<table>"+
                                                "<tr>"+
                                                    "<th>Description</th>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>"+
                                                        description+
                                                   "</td>"+
                                                "</tr>"+
                                            "</table>"+
                                        "</div>"+
                                        "<div class="+"col-lg-2 fourth-col"+">"+
                                            "<button onclick="+"editButtonPressHandler("+serial+")"+">Edit</button><br><br>"+
                                            "<button onclick="+"deleteButtonPressHandler("+serial+")"+">Delete</button>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>";
                }
                

                   
                document.getElementById("foods").appendChild(val);
                
            }
        }
    };

}
onLoad();


function deleteButtonPressHandler(serial){
    console.log("Delete Button pressed "+serial);

    let ajax = new XMLHttpRequest();
    let method = "GET";
    let url = "../php/admin_panel.php?delete="+serial;
    let asynchronous = true;

    ajax.open(method, url, asynchronous);

    ajax.send();
    ajax.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            if(JSON.parse(this.responseText)==1){
                onLoad();
            }
        }
    };
    
} 



function editButtonPressHandler(serial){
    console.log("Edit Button pressed "+serial);
    edit_row_id_obj = {"editable":true, "serial":serial};
    onLoad();
}
