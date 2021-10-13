var banggia = {};
banggia['bunbo'] = 20000;
banggia['hutieu'] = 18000;
banggia['banhcanh'] = 17000;
banggia['phobo'] = 19000;
banggia['nuoi'] = 15000;
banggia['banhmi'] = 12000;
banggia['banhcuon'] = 15000;
banggia['capheda'] = 12000;
banggia['suada'] = 15000;
banggia['chanhday'] = 13000;
banggia['chanhmuoi'] = 12000;
banggia['ximuoi'] = 14000;
banggia['suatuoi'] = 13000;
banggia['camvat'] = 17000;


function taobang(row, selected,is_night){
    var tongtien=0;
    var tagTable = document.createElement("table");
    tagTable.border="1px solid purple";
    tagTable.style.backgroundColor="cyan";
    tagTable.style.marginTop='20px';

    var title_tr = document.createElement("tr");
    var tdtit_1 = document.createElement("td");
    var texttdtit_1 = document.createTextNode('Các món đã dùng');
    tdtit_1.appendChild(texttdtit_1);
    title_tr.appendChild(tdtit_1);

    var tdtit_2 = document.createElement("td");
    var texttdtit_2 = document.createTextNode('Tiền');
    tdtit_2.appendChild(texttdtit_2);
    title_tr.appendChild(tdtit_2);
    tagTable.appendChild(title_tr);

    title_tr.style.textAlign = 'center';
    title_tr.style.color = 'blue';
    title_tr.style.fontWeight = 'bold';

    for (var i=0; i<row; i++)
    {
        var tr = document.createElement("tr");

        var td1 = document.createElement("td");
        var textTd1 = document.createTextNode(document.getElementById(selected[i]).textContent);
        td1.appendChild(textTd1);
        tr.appendChild(td1);

        var td2 = document.createElement("td");
        if(is_night){
            var textTd2 = document.createTextNode(Math.round(banggia[selected[i]]*1.1));
            tongtien = tongtien + Math.round(banggia[selected[i]]*1.1);
        }
        else{
            var textTd2 = document.createTextNode(banggia[selected[i]]);
            tongtien = tongtien + banggia[selected[i]];
        }
        td2.appendChild(textTd2);
        tr.appendChild(td2);

        tagTable.appendChild(tr);
    }
    result.appendChild(tagTable);

    var tong_tr = document.createElement("tr");
    var td_1 = document.createElement("td");
    var texttd_1 = document.createTextNode('Tổng tiền');
    td_1.appendChild(texttd_1);
    tong_tr.appendChild(td_1);

    var td_2 = document.createElement("td");
    var texttd_2 = document.createTextNode(tongtien);
    td_2.appendChild(texttd_2);
    tong_tr.appendChild(td_2);
    tagTable.appendChild(tong_tr);
}


function tinhtien(){

    // get information
    var selected = [];
    var tongtien = 0;
    var is_night = false;

    for (var option of document.getElementById('thucan').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
    for (var option of document.getElementById('nuocuong').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }

    is_night = document.getElementById('bandem').checked;

    // alert(tongtien);
    taobang(selected.length,selected,is_night)
}