$(document).ready(function(){
    //var submitList = $("button[name='save']");
    //Tạo List
    $("button[name='save']").on("click",function(){
        // alert("dddd");
        //Khai báo biến dữ liệu gửi lên server
       
        var list = $("input[name='listName']").val();
        // alert("đâsdasdas");
        //Kiểm tra input
        if(list == ''){
            alert("Chưa nhập giá trị");
            return false;
        }
        // var datas = $("form.fisrtFrom").serialize();
        // alert(datas);
        // sử dụng ajax
        // alert(list);
        $.ajax({
            type : 'POST',
            url : 'createList.php',
            data : {
                'list' : list,
            },
            
            datatype: 'json',
            success : function(data){
               
            //    let contacts = JSON.parse(data1);
                // $(".big-chap3").append(data1);
                // var list = $("input[name='listName']").val('');
                // $("")
                // $(".something2").addClass("hidden");
                // var len = data1.length;
            //    for(var i = 0; i<len; i++){
                // var obj = JSON.parse(' {"id": $id }');
                // var id = data[0].id;
                // console.log(id);
               
                // var getData = $.parseJSON(string);
                // $(".title").html(getData.name);
                // $(".idList").val(getData.id);

                // alert(id);
                // var name = contacts.name[0];
                // console.log(id);
                // console.log(name);
                
                var tr_str = 
                        '<ul class="chap3" >'+
                            '<li class="one-chap3" name="test" >'+
                                
                                '<span class="list-icon">'+
                                    '<svg class="list rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Web-svgs" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="list"> <path d="M3,7 C2.44,7 2,6.56 2,6 L2,5 C2,4.44 2.44,4 3,4 L4,4 C4.56,4 5,4.44 5,5 L5,6 C5,6.56 4.56,7 4,7 L3,7 Z M4,5 L3,5 L3,6 L4,6 L4,5 Z M7.5,6 C7.22,6 7,5.78 7,5.5 C7,5.22 7.22,5 7.5,5 L17.5,5 C17.78,5 18,5.22 18,5.5 C18,5.78 17.78,6 17.5,6 L7.5,6 Z M3,12 C2.44,12 2,11.56 2,11 L2,10 C2,9.44 2.44,9 3,9 L4,9 C4.56,9 5,9.44 5,10 L5,11 C5,11.56 4.56,12 4,12 L3,12 Z M4,10 L3,10 L3,11 L4,11 L4,10 Z M7.5,11 C7.22,11 7,10.78 7,10.5 C7,10.22 7.22,10 7.5,10 L17.5,10 C17.78,10 18,10.22 18,10.5 C18,10.78 17.78,11 17.5,11 L7.5,11 Z M3,17 C2.44,17 2,16.56 2,16 L2,15 C2,14.44 2.44,14 3,14 L4,14 C4.56,14 5,14.44 5,15 L5,16 C5,16.56 4.56,17 4,17 L3,17 Z M4,15 L3,15 L3,16 L4,16 L4,15 Z M7.5,16 C7.22,16 7,15.78 7,15.5 C7,15.22 7.22,15 7.5,15 L17.5,15 C17.78,15 18,15.22 18,15.5 C18,15.78 17.78,16 17.5,16 L7.5,16 Z" id="K"> </path> </g> </g> </svg>'+
                                '</span>'+
                                '<span class="title" id="none">'+
                                list +
                                '</span>'+
                                '<input class="idList" name="lay1" value=" '+ data +' " style="width: 25px;">'+
                            
                                '<span class="list-options" id="none">'+
                                    '<svg class="options rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg>'+
                                '</span>'+
                            '</li>'+
                        '</ul>'
                    ;
                    // console.log(id);
                    $(".big-chap3").append(tr_str);

            //    }
            }

        });
        // return false;
        // $(".something2").removeClass("hidden");
        // (AJAX tạo list)
    })
    var a;
    //(AJAX xóa List)
    $("body").on("contextmenu",".chap3",function(){
       
        a = $(this);
        console.log(a);
    // })
    var deleteList = $(".deleteList");
    deleteList.on("click",function(){
        // console.log($(".idList"));
        var dList = $(this).siblings().val();
        var list = $("input[name='listName']").val();
        
        // alert(dList);
       
        $.ajax({
            type : 'POST',
            url : 'deleteList.php',
            dataType : 'json',
            data : {
                'id' : dList, 
                'list' : list,
            },
            success : function(data){
                
                a.remove(data);
                a.hide();
            }
        })
    })
})
    //(AJAX editList)
    //Sửa List
    var b;
    $(".list-options").on("click",function(){
        b = $(this);
        // var editList =$(this).siblings(".idList").val(); // id của List
        
        $(".edit").on("click",function(){
        // alert(editList);
        // var editListName = $(".big").val(); // name của input edistList
        // var editListName =$("input[name='listName']").val();
        // var submitListId = $("input[name='submitListId']").val(editList);
        // console.log(submitListId);

        var editListName =$("input[name='EditlistName']").val();
        var editList = b.siblings(".idList").val();
        // alert(editList);
        // $(".edit").on("click")
        // var a = "adasda"
        $.ajax({
            type : 'POST',
            url : 'editList.php',
            data : {
                'editListName' : editListName,
                'idList' : editList,
                
            },
            success : function(data){
                var tr_str = 
                '<ul class="chap3" >'+
                    '<li class="one-chap3" name="test" >'+
                        
                        '<span class="list-icon">'+
                            '<svg class="list rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Web-svgs" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="list"> <path d="M3,7 C2.44,7 2,6.56 2,6 L2,5 C2,4.44 2.44,4 3,4 L4,4 C4.56,4 5,4.44 5,5 L5,6 C5,6.56 4.56,7 4,7 L3,7 Z M4,5 L3,5 L3,6 L4,6 L4,5 Z M7.5,6 C7.22,6 7,5.78 7,5.5 C7,5.22 7.22,5 7.5,5 L17.5,5 C17.78,5 18,5.22 18,5.5 C18,5.78 17.78,6 17.5,6 L7.5,6 Z M3,12 C2.44,12 2,11.56 2,11 L2,10 C2,9.44 2.44,9 3,9 L4,9 C4.56,9 5,9.44 5,10 L5,11 C5,11.56 4.56,12 4,12 L3,12 Z M4,10 L3,10 L3,11 L4,11 L4,10 Z M7.5,11 C7.22,11 7,10.78 7,10.5 C7,10.22 7.22,10 7.5,10 L17.5,10 C17.78,10 18,10.22 18,10.5 C18,10.78 17.78,11 17.5,11 L7.5,11 Z M3,17 C2.44,17 2,16.56 2,16 L2,15 C2,14.44 2.44,14 3,14 L4,14 C4.56,14 5,14.44 5,15 L5,16 C5,16.56 4.56,17 4,17 L3,17 Z M4,15 L3,15 L3,16 L4,16 L4,15 Z M7.5,16 C7.22,16 7,15.78 7,15.5 C7,15.22 7.22,15 7.5,15 L17.5,15 C17.78,15 18,15.22 18,15.5 C18,15.78 17.78,16 17.5,16 L7.5,16 Z" id="K"> </path> </g> </g> </svg>'+
                        '</span>'+
                        '<span class="title" id="none">'+
                        editList +
                        '</span>'+
                        '<input class="idList" name="lay1" value=" '+ data +' " style="width: 25px;">'+
                    
                        '<span class="list-options" id="none">'+
                            '<svg class="options rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg>'+
                        '</span>'+
                    '</li>'+
                '</ul>'
            ;
                // var editList = ;
                b.siblings(".title").html(editListName);
                // b.siblings("")
            }
        })
    })

    })
    //Load ra Task
    // $(".something2").removeClass("hidden");
    // submit full bluedel
    var loadTask = $(".chap3");
    //(AJAX load ra Task)
    $("body").on("click",".chap3",function(){
        // e.preventDefault();
        var t =$(this).children().children().eq(2).val();
        $(".creatTaskByListId").html(t);
        // console.log(t);
        // $(".mid1-1").load('showTask.php',function(){
            // $.ajax({
            //     type : load,
            $.ajax({
                type : 'POST',
                url : 'showTask.php',
                data : {
                    'listId' : t
                    // 1 :t1,
                    
                },
                success : function(data){
                    $(".mid1-1").show();
                    $(".mid1-1").html(data);
                    // $("..mid1-1").show();
                    $(".mid-mid1").hide();
                    // $(".done").html(data);
                    // $(".result-search").hide();
                }
            })

            // })

        // });
    })
    //Tạo Task
    var viewTask;
    $("input[name='createTask']").on("keypress",function(e){
        // alert("sdasdas");
        var nameTask = $(this).val();
        // alert(nameTask);
        var listId = $(".creatTaskByListId").html();
        // alert(listId);
        if(e.keyCode == 13 && nameTask!=""){
            // alert(listId);
            // alert(nameTask);
            $.ajax({
                type : 'POST',
                url : 'createTask.php',
                dataType : 'json',
                data : {
                    'listId' : listId,
                    'createTask' : nameTask,
                },
                success : function(data){
                   
            var tr_str = '<div class="mid2">'+
                '<span class="mid2-1">'+
                        
                        '<svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>'+
                    
                        '<svg class="task-checked" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>'+
                   
                '</span>'+
                '<div class="mid2-2">'+  
                   ' <input type="text" name="nameTask" value="'+ nameTask + '" style="color: #262626;">'+
                    '<span>'+ data +'</span>'+ 
                '</div>'+
                '<div class="taskItem-duedate">'+
                '<span></span>'+
                '</div>'+
                ' <span class="mid2-3">'+
                    '<svg class="star-wrapper" id="change" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>'+                     
                    '<svg class="starred-wrapper" id="change1" width="22px" height="44px" viewBox="0 0 22 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,40.5c0,0.28 0.22,0.42 0.48,0.32l10.04,-3.64c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.64c0.28,0.1 0.48,-0.04 0.48,-0.32l0,-40.5l-22,0ZM14.46,24.08l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.1 -0.28,0.1c-0.08,0 -0.18,-0.04 -0.24,-0.1c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.12 -0.22,-0.32 -0.16,-0.52c0.08,-0.18 0.24,-0.32 0.44,-0.32l5.52,0l1.68,-5.24c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.24l5.5,0c0.2,0 0.36,0.14 0.44,0.32c0.06,0.2 -0.02,0.4 -0.16,0.52l-4.46,3.24Z"></path> </g> </svg>'+
                ' </span>'+
            '</div>';
                $(".body1").append(tr_str);
                }
            })
        } 
    })
    // alert("dellnhan");
    // var translationTask = $(".task-check");
    // console.log(translationTask);
    //Chuyển task xuống xulyChuyenTaskDown.php
    $("body").on("click",".body1 .task-check",function(){
        // alert("asdsa");
        // console.log("sadsad");
        // var taskCheck = $(this).siblings(".status-1").html();
        var listId = $(".creatTaskByListId").html();
        var taskId = $(this).parent().siblings(".mid2-2").children("span").html();
        // console.log(taskId);
        // console.log(listId);
        // console.log(taskCheck);
         $.ajax({
            type : 'POST',
            url : 'xulyChuyenTaskDown.php',
            data : {
                // 'status' : taskCheck,
                'listId' : listId,
                'taskId' : taskId,
            },
            success : function(data){
                // $(".done").html(data);
            //     var tr_str =  '<div class="mid2">'+
            //     '<span class="mid2-1">'+
                    
            //         '<svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>'+
                   
            //         '<svg class="task-checked" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>'+
                   
            //    '</span>'+ 
            //    '<div class="mid2-2">'+
               
               
            //        '<input type="text" name="nameTask" value="" style="color: #262626;">'+
            //        '<span>'+ data +'</span>'+
                
            //     '</div>'+
            //     '<span class="mid2-3">' +
            //        ' <svg class="star-wrapper" id="change" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>'+
            //         '<svg class="starred-wrapper" id="change1" width="22px" height="44px" viewBox="0 0 22 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,40.5c0,0.28 0.22,0.42 0.48,0.32l10.04,-3.64c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.64c0.28,0.1 0.48,-0.04 0.48,-0.32l0,-40.5l-22,0ZM14.46,24.08l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.1 -0.28,0.1c-0.08,0 -0.18,-0.04 -0.24,-0.1c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.12 -0.22,-0.32 -0.16,-0.52c0.08,-0.18 0.24,-0.32 0.44,-0.32l5.52,0l1.68,-5.24c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.24l5.5,0c0.2,0 0.36,0.14 0.44,0.32c0.06,0.2 -0.02,0.4 -0.16,0.52l-4.46,3.24Z"></path> </g> </svg>'+
            //     '</span>'+
            //    '</div>';
               $(".done").append(data);
            }
        })
    })
    //Chuyển task lên. xulyChuyenTaskUp.php
    $("body").on("click", ".done .task-checked",function(){
        // var taskChecked = $(this).siblings(".status-0").html();
        var listId = $(".creatTaskByListId").html();
        var taskId = $(this).parent().siblings(".mid2-2").children("span").html();

        // console.log(taskId);
        // console.log(listId);
        // console.log(taskChecked);
        $.ajax({
            type : 'POST',
            url : 'xulyChuyenTaskUp.php',
            data :  {
                // 'status' : taskChecked,
                'listId' : listId,
                'taskId' : taskId,
            },
            success : function(data){
                $(".body1").append(data);
            }
        })
    })
    //Sửa name Task(editTask)
    $("body").on("keypress","input[name='nameTask']",function(){
        var editTask = $(this).val();
        var taskId = $(this).siblings().html();
        var listId = $("input[name='creatTaskByListId']").val();
        $.ajax({
            type : 'POST',
            url : 'editTask.php',
            data : {
                'editTaskName' : editTask,
                'taskId' : taskId,
                'listId' : listId,
            },
            success : function(data){
                (".mid2-2").html(data);
            }
        })
    })
    //Xóa Task. deleteTask.php
    var deleteTask;
    $("body").on("contextmenu",".mid2",function(){
        deleteTask = $(this);
       // var taskId = $(this).children(".mid2-2").children("span").siblings().html();
    //    var taskId = $(this).children(".mid2-2").find("span").html();
        // alert(taskId);
        // var listId = $("input[name='creatTaskByListId']").val();
        $("button[name='deleteTask']").on("click",function(){
            var taskId = $(this).siblings(".textDelete").val();
            var listId = $("input[name='creatTaskByListId']").val();
            console.log(listId);
            console.log(taskId);
        $.ajax({
            type : 'POST',
            url : 'deleteTask.php',
            data :  {
                'taskId' : taskId,
                'listId' : listId,
            },
            success : function(data){
                deleteTask.remove();
                // alert("sadas");
            }
        })
    })
    })
    // double click vào Task
    var task;
    $("body").on("dblclick",".mid2",function(){
        task = $(this);
        var nameTask = $(this).children(".mid2-2").find("input").val();
        var taskId = $(this).children(".mid2-2").find("span").html();
        console.log(nameTask);
        console.log(taskId);
        $.ajax({
            type : 'POST',
            url : 'showNameTask.php',
            data : {
                'nameTask' : nameTask,
                'idTask' : taskId,
            },
            success : function(data){
                $(".main-right").html(data);
            }
        })
    // })
    // chỉnh sửa name Task bên Main-right
    $("body").on("keypress",".edit-view-task",function(e){
        var nameTask = $(this).val();
        var idTask = $(this).siblings(".editTaskId").html();
        if(e.keyCode==13 && nameTask!=""){
            $.ajax({
                type : 'POST',
                url : 'editTask.php',
                data : {
                'editTaskName' : nameTask,
                'taskId' : idTask,
                },
                success : function(data){
                    var tr_str =
                    '<input type="text" name="nameTask" value="' + data + '" style="color: #262626;">'+
                    '<span>'+ idTask +'</span>';
                    task.children(".mid2-2").html(tr_str);
                }
            })
        }

    })

})
//Tạo subtask
    $("body").on("keypress","input[name='subtask']",function(e){
        var taskId = $(".editTaskId").html();
        // alert(taskId);
        var nameSubTask = $(this).val();
        // alert(nameSubTask);
        if(e.keyCode == 13 && $(this).val()!=" "){
        $.ajax({
            type : 'POST',
            url : 'createSubTask.php',
            data : {
                'subtask' : nameSubTask,
                'taskId' : taskId,
            },
            success : function(data){
                var tr_str = 
                    '<li class="flex">'+
                        '<div class="section-icon-1">'+
                            '<a>'+
                                '<svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>'+
                                '<svg class="task-checked hidden" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>'+
                            '</a>'+
                        '</div>'+
                        '<div class="section-content top">'+
                                '<input type="text" class="edit-view-subtask" style="color:#262626; background: #FAFAFA" value="' + nameSubTask + '" name="editSubTask">'+
                        '</div>'+
                        '<div class="section-delete deleteSubtask">'+
                            '<svg class="delete" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="delete"> <path d="M10.72,9.9975 L13.86,6.8575 C14.04,6.6575 14.04,6.3375 13.86,6.1375 C13.66,5.9575 13.34,5.9575 13.14,6.1375 L10,9.2775 L6.86,6.1375 C6.66,5.9575 6.34,5.9575 6.14,6.1375 C5.96,6.3375 5.96,6.6575 6.14,6.8575 L9.28,9.9975 L6.14,13.1375 C5.96,13.3375 5.96,13.6575 6.14,13.8575 C6.24,13.9575 6.38,13.9975 6.5,13.9975 C6.62,13.9975 6.76,13.9575 6.86,13.8575 L10,10.7175 L13.14,13.8575 C13.24,13.9575 13.38,13.9975 13.5,13.9975 C13.62,13.9975 13.76,13.9575 13.86,13.8575 C14.04,13.6575 14.04,13.3375 13.86,13.1375 L10.72,9.9975 Z" id="4"></path> </g> </g> </svg>'+
                        '</div>'+
                        '<span class="idSubTask">'+ data +'</span>'+
                   ' </li>';
                $(".subTask").append(tr_str);
            }
        })
    }


    })
      var subtask;
    //delete subtask
    $("body").on("click",".deleteSubtask",function(){
        subTask = $(this); 
        $("body").on("click",".buttonDeleteSubtask",function(){

            var idSubTask = $(this).siblings(".textDeleteSubTask").val();
            // alert(idSubTask);
            $.ajax({
                type : 'POST',
                url : 'deleteSubTask.php',
                data : {
                    'deleteSubTask' : idSubTask,
                },
                success : function(data){
                    subtask.remove();
                }
            })

         })
    })
    //Sửa subTask editTask.php
    $("body").on("keypress",".edit-view-subtask",function(e){
        // var subTaskId = $(this).siblings(".idSubTask").html();
        // var nameSubTask = $(this).val();
        if(e.keyCode == 13 && $(this).val()!=" "){
            var subTaskId = $(this).parent().siblings(".idSubTask").html();
            var nameSubTask = $(this).val();
            
            // alert(nameSubTask);
            $.ajax({
                type : 'POST',
                url : 'editSubTask.php',
                data : {
                    'editSubTask' : nameSubTask,
                    'subtaskId' : subTaskId,
                },
                success : function(data){
                    var tr_str = 
                    '<input type="text" class="edit-view-subtask" style="color:#262626; background: #FAFAFA" value="' + data +'" name="editSubTask">';
                    // alert(data);
                    $(this).parent(".top").append(tr_str);
                }
            })
        }
    })
    // Tạo comment
    $("body").on("keypress","input[name='createComment']",function(event){
        // alert("sdsd");
       
        if(event.keyCode == 13){
            // alert("sadsad");
            var taskId = $(".editTaskId").html();
            var nameComment = $("input[name='createComment']").val();
            // console.log(nameComment);
            $.ajax({
                type : 'POST',
                url : 'createComment.php',
                data : {
                    'taskId' : taskId,
                    'comment' : nameComment,
                },
                success : function(data){
                    var comments = JSON.parse(data);
                    console.log(comments);
                    $(".commented").append(
                    comments.forEach(element => {
                       '<li class="section-item section-item-comment">'+
                            '<div class="section-icon picture">'+
                                '<span class="user-avatar">'+
                                    '<img src="./image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" alt="asdasd">'+
                            ' </span>'+
                            '</div>'+
                            '<div class="section-content">'+
                                '<span class="comment-author">' + element['email'] + '</span>'+
                                '<span class="comment-time">' + element['comment-time'] + '</span>'+
                            ' <span class="comment-text">' + element['title'] + '</span>'+
                            '</div>'+
                            '<a class="section-delete comment">'+
                                '<svg class="delete" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="delete"> <path d="M10.72,9.9975 L13.86,6.8575 C14.04,6.6575 14.04,6.3375 13.86,6.1375 C13.66,5.9575 13.34,5.9575 13.14,6.1375 L10,9.2775 L6.86,6.1375 C6.66,5.9575 6.34,5.9575 6.14,6.1375 C5.96,6.3375 5.96,6.6575 6.14,6.8575 L9.28,9.9975 L6.14,13.1375 C5.96,13.3375 5.96,13.6575 6.14,13.8575 C6.24,13.9575 6.38,13.9975 6.5,13.9975 C6.62,13.9975 6.76,13.9575 6.86,13.8575 L10,10.7175 L13.14,13.8575 C13.24,13.9575 13.38,13.9975 13.5,13.9975 C13.62,13.9975 13.76,13.9575 13.86,13.8575 C14.04,13.6575 14.04,13.3375 13.86,13.1375 L10.72,9.9975 Z" id="4"></path> </g> </g> </svg>'+

                            '</a>'+
                            '<span class="idComment" style="display: none;">' + element['id'] + '</span>'+
                        '</li>';
                        console.log(element['title']);
                    })
                    );
                    console.log($(".section-item-comment"));
                    console.log($(".commented"));
                }
                    
                   
            })
        
        }
    })
    var deleteComment;
    $("body").on("click",".comment",function(){
        deleteComment = $(this);
        $("body").on("click",".buttonDeleteComment",function(){
            var idComment = $(this).siblings(".DeleteComment").val();
            // alert(idComment);
            $.ajax({
                type : 'POST',
                url : 'deleteComment.php',
                data : {
                    'idComment' : idComment,    
                },
                success : function(data){
                    deleteComment.remove();
                }
            })
        })
    })
    $("body").on("click",".createDateRemind",function(){
        var time= $("input[name='UpdateTimeTask']").val();
        var taskId = $(".editTaskId").html();
        alert(time);
        $.ajax({
            type : 'POST',
            url : 'UpdateTimeTask.php',
            data : {
                'UpdateTimeTask' : time,
                'taskId' : taskId,
            },
            success : function(data){
                var tr_str =
               '<input type="date" name="UpdateTimeTask" value="'+ time +'" method="POST"></input>';
                $("input[name='UpdateTimeTask").html(tr_str);
            }
        })
    })
    $("body").on("click","input[name='submitRemind']",function(){
        var taskId = $(".editTaskId").html();
        alert(taskId);
        var time = $("input[name='createRemindTime']").val();
        $.ajax({
            type : 'POST',
            url : 'UpdateRemindTask.php',
            data : {
                'taskId' : taskId,
                'createRemindTime' : time,
            },
            success : function(data){
                var tr_str = 
                '<input type="datetime-local" name="createRemindTime" value="'+ time +'">';
                $("input[name='createRemindTime']").html(tr_str);
            }
        })
    })
    // $("body").on("keypress","input[name='search']",function(e){

    // })
    $("body").on("keypress","input[name='search']",function(e){
                  
        if(e.keyCode ==13 && $(this).val() != ""){
            // alert("tu");
            var search = $("input[name='search']").val();
            $.ajax({
                type : 'POST',
                url : 'searchTask.php',
                data : {
                    'search' : search,
                },
                success : function(data){
                    // var idList= $data[0].mang;
                   var searchTask = JSON.parse(data);
                   
                    // console.log(data[0].mang);
                    console.log(searchTask);
                    var idList = searchTask[0].array1.id;
                    // console.log(typeof(idList));
                    console.log(idList);
                    var content = "";
                    // console.log(idList);
                    // searchTask.forEach(element => {
                    //     content +=
                    //     '<div class="mid3">'+
                    //         '<text>' + element['listId'] + '</text>'+
                    //     '</div>';
                    // })
                    searchTask.forEach(element1 => {
                        content +=
                        '<div class="mid3">'+
                            '<text>' + element1['name1'] + '</text>'+
                        '</div>';
                    
                    idList.forEach(element => {
                       if(element1['id1']==element['listId']){
                    content +=
                    '<div class="result-search">'+
                    '<div class="mid2">'+
                    '<span class="mid2-1">'+
                       
                          ' <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>'+
                      
                           '<svg class="task-checked" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>'+
                       
                   '</span>'+ 
                   '<div class="mid2-2">'+
                   
                       
                           '<input type="text" name="nameTask" value="' + element['name'] + '" style="color: #262626;">'+
                           '<span>' + element['id'] + '</span>'+
                       
                    
                   
                    '</div>'+
                    '<div class="taskItem-duedate">'+
                       '<span></span>'+
                    '</div>'+
                    '<span class="mid2-3">'+
                        '<svg class="star-wrapper" id="change" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>'+
                        '<svg class="starred-wrapper" id="change1" width="22px" height="44px" viewBox="0 0 22 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,40.5c0,0.28 0.22,0.42 0.48,0.32l10.04,-3.64c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.64c0.28,0.1 0.48,-0.04 0.48,-0.32l0,-40.5l-22,0ZM14.46,24.08l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.1 -0.28,0.1c-0.08,0 -0.18,-0.04 -0.24,-0.1c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.12 -0.22,-0.32 -0.16,-0.52c0.08,-0.18 0.24,-0.32 0.44,-0.32l5.52,0l1.68,-5.24c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.24l5.5,0c0.2,0 0.36,0.14 0.44,0.32c0.06,0.2 -0.02,0.4 -0.16,0.52l-4.46,3.24Z"></path> </g> </svg>'+
                   ' </span>'+
                   '</div>'+
                   '</div>';
                   }
                   })
                })
            
                   $(".mid-mid1").show();
                   $(".mid1-1").hide();
                   $(".mid-mid1").html(content);
                   
                //    $(".mid1-1").hide();
                
            }
            })
        }
    })
    
})