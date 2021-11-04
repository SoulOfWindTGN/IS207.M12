$(document).ready(function(){
    //Bảng đăng ký thông tin một thành viên
    let member_table = `<tr>
                            <td><label class="form-text"><b>MSSV</b></label></td>
                            <td>
                                <input type="text" class="form-control" placeholder="19521901" id="mssv"></input>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="form-text"><b>Họ và tên</b></label></td>
                            <td>
                                <input type="text" class="form-control" placeholder="Trần Gia Nghĩa" id="member-name"></input>
                            </td>
                        </tr>`;
    var available = false; //Biến check đã có thông tin đăng ký chưa?
    var num=1; //Số thứ tự

    // Sự kiện thêm thành viên
    $('#add').click(function(){
        $('#mem-table').append(member_table);
    })

    // Sự kiện đăng ký
    $('#regist-button').click(function(){
        // Mở tùy chọn "Danh sách nhóm" nếu đã có nhóm đăng ký
        if(available == false){
            $('#list-tab').removeClass('nav-link disabled').addClass('nav-link');
            available = true;
        }

        //Lấy tên đồ án
        let project_name=$('#project-name').val();

        //Lấy loại đồ án
        let type_name = "";
        $('input[type="radio"]:checked').each(function(){
            var idVal = $(this).attr("id");
            type_name = $("label[for='"+idVal+"']").text();
        })

        //Lấy thông tin nhóm trưởng và thành viên
        let leader = "", mem="";
        let mssv_object = $("#mem-table input#mssv");
        let name_object = $("#mem-table input#member-name");
        for(var i = 0; i<mssv_object.length; i++){
            if(i==0){
                leader=leader + mssv_object[i].value + " - " + name_object[i].value;
            }
            else{
                mem = mem + mssv_object[i].value + "<br>";
            }
        }

        //Lấy thông tin mô tả
        let des = $('textarea#description').val();
        let array_word = $('textarea#description').val().split(' ');
        if(array_word.length>10){
            des = array_word.slice(0,10).join(' ');
            des+="..."
        }

        //Thêm các thông tin vào bảng kết quả
        result_table=$('table#result tbody');
        let result_table_html = `<tr>
                                    <th scope="row" class='number'>${num}</th>
                                    <td class='project-name'>${project_name}</td>
                                    <td class='project-type'>${type_name}</td>
                                    <td class='leader'>${leader}</td>
                                    <td class='mem-list'>${mem}</td>
                                    <td class='description'>${des}</td>
                                 </tr>`;
        num++;
        result_table.append(result_table_html);
        $('#mem-table').html(member_table);
    })
})