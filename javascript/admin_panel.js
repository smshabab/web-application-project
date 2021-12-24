var edit_row_id_obj = {"editable":false, "serial":1};

function onLoad(){
    
    let ajax = new XMLHttpRequest();
    let method = "GET";
    let url = "../php/admin_panel.php?get="+true;
    let asynchronous = true;
    ajax.open(method, url, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            let searchData = JSON.parse(this.responseText);
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
                                                    "<td width="+"40%"+"><input type="+"text"+" value="+name+" id="+"name"+"></td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<th>Price</th>"+
                                                    "<td>:</td>"+
                                                    "<td><input type="+"number"+" value="+price+" id="+"price"+"></td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<th>Type</th>"+
                                                    "<td>:</td>"+
                                                    "<td>"+
                                                    "<select name="+"type"+" id="+"type"+">"+
                                                        "<option>Select a type</option>"+
                                                        "<option value="+"Starter"+">Starter</option>"+
                                                        "<option value="+"Main-Course"+">Main Course</option>"+
                                                        "<option value="+"Desert"+">Desert</option>"+
                                                        "<option value="+"Drinks"+">Drinks</option>"+
                                                    "</select>"+
                                                    "</td>"+
                                                "</tr>"+
                                            "</table>"+
                                       "</div>"+
                                        "<div class="+"col-lg-5 third-col"+">"+
                                            "<table>"+
                                                "<tr>"+
                                                    "<th>Description</th>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td><textarea id="+"description"+" rows="+"4"+" cols="+"50"+" id="+"description"+">"+description+"</textarea></td>"+
                                                "</tr>"+
                                            "</table>"+
                                        "</div>"+
                                        "<div class="+"col-lg-2 fourth-col"+">"+
                                            "<button onclick="+"updateButtonPressHandler("+serial+")"+">Update</button><br><br>"+
                                            "<button onclick="+"cancelButtonPressHandler("+serial+")"+">Cancel</button>"+
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

function updateButtonPressHandler(serial){
    console.log("Update Button pressed "+serial);
    const name = document.getElementById('name').value;
    const price = document.getElementById('price').value;
    const description = document.getElementById('description').value;
    let type = '';
    const tempType = document.getElementById('type').value;
    
    for(let i=0; i<tempType.length; i+=1){
        if(tempType[i]=='-'){
            type+=' ';
        }else{
            type+=tempType[i];
        }
    }
    

    if(type=="Select a type"){
        alert("Select a Type");
    }else{
        const update_row_value_obj = {
            "name" : name,
            "price" : parseFloat(price),
            "description" : description,
            "type" : type,
            "serial" : serial
        };
        const update_row_value = JSON.stringify(update_row_value_obj);
    
        if(name && price && description && type){
            
            let ajax = new XMLHttpRequest();
            let method = "GET";
            let url = "../php/admin_panel.php?update="+update_row_value;
            let asynchronous = true;
            ajax.open(method, url, asynchronous);
            ajax.send();
            ajax.onreadystatechange = function()
            {   
                if(this.readyState == 4 && this.status==200)
                {
                    if(JSON.parse(this.responseText)==1){
                        edit_row_id_obj.editable = false;
                        onLoad();
                    }
                }
            };
        }else{
            alert("Fill up the input boxes");
        }
    }
} 

function cancelButtonPressHandler(serial){
    console.log("Cancel Button pressed "+serial);
    edit_row_id_obj.editable = false;
    onLoad();
} 