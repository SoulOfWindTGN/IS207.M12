var banggia = {};
banggia['Bún bò'] = 20000;
banggia['Hủ tiếu'] = 18000;
banggia['Bánh canh'] = 17000;
banggia['Phở bò'] = 19000;
banggia['Nuôi'] = 15000;
banggia['Bánh mỳ thịt'] = 12000;
banggia['Bánh cuốn'] = 15000;

var result = [{},{},{}];
var total = [0,0,0];
function date(){
    var weekday = new Array(7);
    weekday[0] = "Chủ nhật";
    weekday[1] = "Thứ hai";
    weekday[2] = "Thứ ba";
    weekday[3] = "Thứ tư";
    weekday[4] = "Thứ năm";
    weekday[5] = "Thứ sáu";
    weekday[6] = "Thứ bảy";
    
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    t = weekday[n.getDay()];
    hours = n.getHours();
    minutes = n.getMinutes();
    document.getElementById("date").innerHTML = t + ", " + d + "/" + m + "/" + y + ", " + hours + ":" + minutes;
}


function calculate(position){
    var food = document.getElementById("menu");
    var selectedFood=food.options[food.selectedIndex].value;
    var table = document.getElementsByClassName("result");

    if(result[position].hasOwnProperty(selectedFood)){
        result[position][selectedFood]++;
        for (var r = 1, n = table[position].rows.length; r < n; r++) {
            if(table[position].rows[r].cells[0].innerHTML==selectedFood){
                table[position].rows[r].cells[1].innerHTML=result[position][selectedFood];
                table[position].rows[r].cells[2].innerHTML= banggia[selectedFood]*table[position].rows[r].cells[1].innerHTML
                break;
            }
        }
    }

    else{
        result[position][selectedFood]=1;
        // Table, row and data cell
        var row = table[position].insertRow(table[position].rows.length-2);
        var mon = row.insertCell(0);
        var sl = row.insertCell(1);
        var tien = row.insertCell(2);
        var but = row.insertCell(3);
        
        // Text
        mon.innerHTML = selectedFood;
        sl.innerHTML = result[position][selectedFood];
        tien.innerHTML = banggia[selectedFood];
        but.innerHTML = "<button type='button'>xóa</button>";
        but.onclick = function()
        {
            //get position
            row = this.parentNode;
            table = row.parentNode;

            //upd total and result array
            total[position]-=row.cells[2].innerHTML
            var tot = document.getElementsByClassName("total")
            tot[position].innerHTML = total[position] + " đ";
            delete result[position][row.cells[0].innerHTML];

            table.deleteRow(row.rowIndex);
        }
    }
    total[position]+=banggia[selectedFood];
    var tot = document.getElementsByClassName("total")
    tot[position].innerHTML = total[position] + " đ";
}

function update(){
    var table=document.getElementById("ban");
    var selectedTable=table.options[table.selectedIndex].value;
    switch(selectedTable){
        case "Bàn 1":
            calculate(0);
            break;
        case "Bàn 2":
            calculate(1);
            break;
        case "Bàn 3":
            calculate(2);
            break;
    }
}

function bill(num){
    var newWin = window.open('index1.html');
    var date = document.getElementById("date").innerHTML;
    var nv = document.getElementById("nv").innerHTML;
    newWin.onload = function(){
        var c = newWin.document.getElementById("bill");
        var table = document.createElement("table");
        var tit = table.insertRow(0).insertCell(0);
        tit.colSpan=2;
        tit.innerHTML="Hóa đơn";
        tit.style.fontWeight="bold";
        tit.style.textAlign="center";
        row = table.insertRow(-1);
        row.insertCell(0).innerHTML = "Ngày hóa đơn";
        row.insertCell(1).innerHTML = date;
        row = table.insertRow(-1);
        row.insertCell(0).innerHTML = "Nhân viên";
        row.insertCell(1).innerHTML = nv.split(": ")[1];
        row = table.insertRow(-1);
        row.insertCell(0).innerHTML = "Bàn";
        row.insertCell(1).innerHTML = "Số " + (num+1);

        tit = table.insertRow(-1).insertCell(0);
        tit.colSpan=2;
        tit.className = "hoadon";

        hoadon = document.createElement("table");
        row = hoadon.insertRow(-1);
        row.className="title";
        row.insertCell(0).innerHTML="Món";
        row.insertCell(1).innerHTML="SL";
        row.insertCell(2).innerHTML="Thành tiền";

        for (const [key, value] of Object.entries(result[num])){
            row = hoadon.insertRow(-1);
            row.insertCell(0).innerHTML= key;
            row.insertCell(1).innerHTML = value;
            row.insertCell(2).innerHTML = value*banggia[key] + " đ";
        }
        tong = hoadon.insertRow(-1).insertCell(0);
        tong.colSpan=2;
        tong.className = "tongtien";
        tong.innerHTML = "Tổng tiền: " + total[num] + " đ";
        tit.appendChild(hoadon);
        c.appendChild(table);
    }
}

