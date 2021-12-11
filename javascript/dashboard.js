var edit_row_id_obj = {"editable":false, "id":1};

function onLoad(){
    
    //call ajax
    let ajax = new XMLHttpRequest();
    let method = "GET";
    let url = "../php/dashboard.php";
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
            document.getElementById("custom_table").innerHTML = "";
            let i = 0;
            for(i; i<searchData.length; i++)
            {
                let heading_1 = searchData[i].heading_1;
                let heading_2 = searchData[i].heading_2;
                let heading_3 = searchData[i].heading_3;
                let heading_4 = searchData[i].heading_4;
                let heading_5 = searchData[i].heading_5;
                let id = searchData[i].id;

                let table = document.createElement("table");
                table.border = "1";
                table.cellspaceing = "0";
                table.width = "100%";
                table.innerHTML = "";

                if((edit_row_id_obj.editable==true) && (id==edit_row_id_obj.id)){
                    if(i==0){
                        table.innerHTML = 
                                    "<tr>"+
                                        "<th align="+"center"+" width="+"15%"+">"+
                                            "H1"+
                                        "</th>"+
                                        "<th align="+"center"+" width="+"15%"+">"+
                                            "H2"+
                                        "</th>"+
                                        "<th align="+"center"+"  width="+"15%"+">"+
                                            "H3"+
                                        "</th>"+
                                        "<th align="+"center"+"  width="+"15%"+">"+
                                            "H4"+
                                        "</th>"+
                                        "<th align="+"center"+"  width="+"15%"+">"+
                                            "H5"+
                                        "</th>"+
                                        "<th align="+"center"+" width="+"12%"+">"+
                                            "A1"+
                                        "</th>"+
                                        "<th align="+"center"+" width="+"13%"+">"+
                                            "A2"+
                                        "</th>"+
                                    "</tr>"+
                                    "<tr>"+
                                        "<td align="+"center"+" width="+"15%"+">"+
                                        "<input type="+"number"+" value="+heading_1+" size="+"5"+" id="+"input1"+">"+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"15%"+">"+
                                        "<input type="+"number"+" value="+heading_2+" size="+"5"+" id="+"input2"+">"+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        "<input type="+"number"+" value="+heading_3+" size="+"5"+" id="+"input3"+">"+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        "<input type="+"number"+" value="+heading_4+" size="+"5"+" id="+"input4"+">"+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        "<input type="+"number"+" value="+heading_5+" size="+"5"+" id="+"input5"+">"+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"12%"+">"+
                                            "<button onclick="+"updateButtonPressHandler("+id+")"+" style="+"background-color:green;color:white;"+">Update</button>"+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"13%"+">"+
                                           " <button onclick="+"deleteButtonPressHandler("+id+")"+">Delete</button>"
                                        "</td>"+
                                    "</tr>";
                    }else{
                        table.innerHTML ="<tr>"+
                                            "<td align="+"center"+" width="+"15%"+">"+
                                            "<input type="+"number"+" value="+heading_1+" size="+"5"+" id="+"input1"+">"+
                                            "</td>"+
                                            "<td align="+"center"+" width="+"15%"+">"+
                                            "<input type="+"number"+" value="+heading_2+" size="+"5"+" id="+"input2"+">"+
                                            "</td>"+
                                            "<td align="+"center"+"  width="+"15%"+">"+
                                            "<input type="+"number"+" value="+heading_3+" size="+"5"+" id="+"input3"+">"+
                                            "</td>"+
                                            "<td align="+"center"+"  width="+"15%"+">"+
                                            "<input type="+"number"+" value="+heading_4+" size="+"5"+" id="+"input4"+">"+
                                            "</td>"+
                                            "<td align="+"center"+"  width="+"15%"+">"+
                                            "<input type="+"number"+" value="+heading_5+" size="+"5"+" id="+"input5"+">"+
                                            "</td>"+
                                            "<td align="+"center"+" width="+"12%"+">"+
                                                "<button onclick="+"updateButtonPressHandler("+id+")"+" style="+"background-color:green;color:white;"+">Update</button>"+
                                            "</td>"+
                                            "<td align="+"center"+" width="+"13%"+">"+
                                            " <button onclick="+"deleteButtonPressHandler("+id+")"+">Delete</button>"
                                            "</td>"+
                                        "</tr>";
                    }
                }else{
                    if(i==0){
                        table.innerHTML = 
                                    "<tr>"+
                                        "<th align="+"center"+" width="+"15%"+">"+
                                            "H1"+
                                        "</th>"+
                                        "<th align="+"center"+" width="+"15%"+">"+
                                            "H2"+
                                        "</th>"+
                                        "<th align="+"center"+"  width="+"15%"+">"+
                                            "H3"+
                                        "</th>"+
                                        "<th align="+"center"+"  width="+"15%"+">"+
                                            "H4"+
                                        "</th>"+
                                        "<th align="+"center"+"  width="+"15%"+">"+
                                            "H5"+
                                        "</th>"+
                                        "<th align="+"center"+" width="+"12%"+">"+
                                            "A1"+
                                        "</th>"+
                                        "<th align="+"center"+" width="+"13%"+">"+
                                            "A2"+
                                        "</th>"+
                                    "</tr>"+
                                    "<tr>"+
                                        "<td align="+"center"+" width="+"15%"+">"+
                                        heading_1+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"15%"+">"+
                                        heading_2+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        heading_3+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        heading_4+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        heading_5+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"12%"+">"+
                                            "<button onclick="+"editButtonPressHandler("+id+")"+">Edit</button>"+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"13%"+">"+
                                           " <button onclick="+"deleteButtonPressHandler("+id+")"+">Delete</button>"
                                        "</td>"+
                                    "</tr>";
                    }else{
                        table.innerHTML = "<tr>"+
                                        "<td align="+"center"+" width="+"15%"+">"+
                                        heading_1+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"15%"+">"+
                                        heading_2+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        heading_3+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        heading_4+
                                        "</td>"+
                                        "<td align="+"center"+"  width="+"15%"+">"+
                                        heading_5+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"12%"+">"+
                                            "<button onclick="+"editButtonPressHandler("+id+")"+">Edit</button>"+
                                        "</td>"+
                                        "<td align="+"center"+" width="+"13%"+">"+
                                           " <button onclick="+"deleteButtonPressHandler("+id+")"+">Delete</button>"
                                        "</td>"+
                                    "</tr>";
                    }
                }

                
                
                document.getElementById("custom_table").appendChild(table);
            }
        }
    };

}

//calling onLoad to load table
onLoad();

function deleteButtonPressHandler(id){
    console.log("Delete Button pressed "+id);
    //call ajax
    let ajax = new XMLHttpRequest();
    let method = "GET";
    let url = "../php/dashboard.php?id="+id;
    let asynchronous = true;

    ajax.open(method, url, asynchronous);

    //sending ajax request
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



function insert_data(){
    const val1 = document.getElementById('heading_1').value;
    const val2 = document.getElementById('heading_2').value;
    const val3 = document.getElementById('heading_3').value;
    const val4 = document.getElementById('heading_4').value;
    const val5 = document.getElementById('heading_5').value;

    const val_obj = {"heading_1": val1, "heading_2": val2, "heading_3": val3, "heading_4": val4, "heading_5": val5};
    const data = JSON.stringify(val_obj);

    if(val1 && val2 && val3 && val4 && val5){
        //call ajax
        let ajax = new XMLHttpRequest();
        let method = "GET";
        let url = "../php/dashboard.php?data="+data;
        let asynchronous = true;

        ajax.open(method, url, asynchronous);

        //sending ajax request
        ajax.send();
        ajax.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                if(JSON.parse(this.responseText)==1){
                    onLoad();
                }else{
                    alert("Input values must be integer values!");
                }
            }
        };
    }else{
        alert("Input fields can not be empty while inserting data into the table!");
    }
}


function editButtonPressHandler(id){
    console.log("Edit Button pressed "+id);
    edit_row_id_obj = {"editable":true, "id":id};
    onLoad();
}


function updateButtonPressHandler(id){
    console.log("Update Button pressed "+id);
    const input1 = document.getElementById('input1').value;
    const input2 = document.getElementById('input2').value;
    const input3 = document.getElementById('input3').value;
    const input4 = document.getElementById('input4').value;
    const input5 = document.getElementById('input5').value;

    const update_row_value_obj = {
        "input1" : input1,
        "input2" : input2,
        "input3" : input3,
        "input4" : input4,
        "input5" : input5,
        "id" : id
    };
    const update_row_value = JSON.stringify(update_row_value_obj);

    if(input1 && input2 && input3 && input4 && input5){
        //call ajax
        let ajax = new XMLHttpRequest();
        let method = "GET";
        let url = "../php/dashboard.php?updated_data="+update_row_value;
        let asynchronous = true;

        ajax.open(method, url, asynchronous);

        //sending ajax request
        ajax.send();
        ajax.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                if(JSON.parse(this.responseText)==1){
                    edit_row_id_obj.editable = false;
                    onLoad();
                }else{
                    alert("Input values must be integer values!");
                }
            }
        };
    }else{
        alert("Fill up the input boxes");
    }

}