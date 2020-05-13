// dùng để load tất cả các html,css rồi chạy jquery
$(document).ready(function(){
    MainEvent = new MainEvent();
})
class MainEvent{
    // constructer hàm khởi tạo event. khi khởi tạo mainevent
    constructor(){
        this.initEvent();
    }
    // function tạo toàn bộ event bên trong
    initEvent(){
        $("#left-l").click(this.toggleTask); // click để làm to, nhỏ main-left
        $("#user-toolbar").click(function(e){
            $(".hover-avatar").toggleClass("something2");
            $(".hover-bell").addClass("hidden");
            $(".hover-messenger").addClass("hidden");
            e.stopPropagation();
            // click để hiển thị account settings
        })
            $(".hover-avatar").click(function(e){
                e.stopPropagation();
            })
            $("body").click(function(e){
                var container1 = $(".hover-avatar")
                if(e.target != container1){
                    container1.removeClass("something2");
                }
            })
            $("li.list-menu3:eq(0)").click(function(){
                // alert("hello");
                $(".dialog-wrapper").addClass("something2");
                $(".settings.account").removeClass("hidden");
                $(".dialog.listOptions").addClass("hidden");
                $(".dialog.confirm").addClass("hidden");
                $(".settings.account").addClass("flex");
                $(".hover-avatar").removeClass("something2");
                // $(".dialog-wrapper").show();
                //Click vao account settings
            })
                $(".cols-button-done").click(function(){
                    $(".dialog-wrapper").removeClass("something2");
                    //click vao done der mat settings account
                })
                $("li.list-menu3:eq(0)").click(function(){
                    $(".tabs-1:eq(0)").addClass("something3");
                })
                $("li.tabs-li:eq(0)").click(function(){
                    $(".tabs-1:eq(0)").removeClass("something3");
                    $(".tabs-1:eq(1)").addClass("something3");
                    //ấn vào account thì bảng account block ra;
                })
                $("li.tabs-li:eq(1)").click(function(){
                    $(".tabs-1:eq(0)").addClass("something3");
                    $(".tabs-1:eq(1)").removeClass("something3");
                    //click vào general thì bảng general block ra
                })
        $(".near1").click(function(e){
            $(".hover-bell").toggleClass("hidden");
            $(".hover-avatar").removeClass("something2");
            $(".hover-messenger").addClass("hidden");
            e.stopPropagation();
            // click hiển thị bell bên main-left
        })
        $(".hover-bell").click(function(e){
            e.stopPropagation();
        })
        $("body").click(function(e){
            var container = $(".hover-bell");
            if(e.target != container){
                container.addClass("hidden");
            }
        })
        $(".near2").click(function(e){
            $(".hover-messenger").toggleClass("hidden");
            $(".hover-avatar").removeClass("something2");
            $(".hover-bell").addClass("hidden");
            e.stopPropagation();
            //click để hiển thị messenger bên main-left
        })
        $("#left-foot").click(function(){
            $(".dialog-wrapper").addClass("something2");
            $(".settings.account").addClass("hidden");
            $(".dialog.confirm").addClass("hidden");
            $(".settings.account").removeClass("flex");
            $(".boxCreateList").removeClass("hidden");// sửa .dialog.listOptions
            $(".boxEditList").addClass("hidden");
            $(".submit.full.blue:first").addClass("disabled");
            // khi ấn + ở foot-left hiển thị ra (dialog listOptions)
        })
        $("input.big").on('input',function(){
            // alert("ádasdas");
            $(".submit.full.blue:first").removeClass("disabled");
            // if( $("input.big:text").val()){
            //     $(".submit.full.blue").addClass("disabled");
            // }
        })
        $(".submit.full.blue:first").on("click",function(){
            // $(".boxCreateList").addClass("hidden");
            $(".dialog-wrapper").removeClass("something2");
        })
        $(".cancel.full:eq(0)").click(function(){
            $(".dialog-wrapper").removeClass("something2");
            $(".dialog.listOptions.boxCreateList").addClass("hidden");
            //click vào cancel để thoát khỏi listOptions
        })
        $(".right-foot2").click(function(){
            $(".main-right").hide();
            //click vào < bên main-right. để none thanh main-right
        })
        // var self;
        // var self1;
        $("#chap2").on("contextmenu",function(event){
            $(".isLeft").css("display", "block");
          
            $(".isLeft").css({
                left : event.clientX + 'px',
                top : event.clientY + 'px',
            });
            event.preventDefault();
        })
        $(".isLeft").on("click",function(e){
            e.stopPropagation();
        })
        $("body").click(function(e){
            var container1 = $(".isLeft");
            if(e.target != container1){
                container1.hide();
            }
        })
        // $(".mid3").addClass("hidden");
        // $(".starred-wrapper").addClass("hidden");
        // $(".task:eq(1)").children().find(".mid2-3").on("click",function(e){
        //     $(this).find(".star-wrapper").toggleClass("hidden");
        //     $(this).find(".starred-wrapper").toggleClass("hidden");
        // })
        // $(".mid3").addClass("hidden");
        $(".header-sort").addClass("disabled");
        $(document).on("click",".header-sort",function(e){
            if($(this).attr("class")==="header-sort"){
                $(".hover-sort").toggle();
            }
        })
        $(".starred-wrapper").addClass("hidden");
        $("body").on("keyup","input[name='createTask']",function(event){
            var x  = event.keyCode;
            var item = $(".text1 input");
            if( x == 13 && item.val() !=""){
                // alert("sadas");
                // alert("hsaids");;
                
                // var cln = $(".mid2:eq(0)").clone();
                // cln.prependTo(".task.body1");
                // $(".task:eq(1)").removeClass("hidden");
                // var titletaskcheck = item.val();
                // $(".mid2-2:eq(1)").html(titletaskcheck);
                // item.val("");
            }
            })
                // khi sử dụng sự kiện input
                // $(".task:eq(1)").on("click", function(){
                //     $(".mid2").toggleClass("background");
                // });
                // $(".task:eq(2)").addClass("hidden");
                // $(".starred-wrapper").addClass("hidden");
                // $(".star-wrapper").click(function(){
                //     $(".starred-wrapper").removeClass("hidden");
                // })
            // $(".mid2").children().find(".star-wrapper").on("click",function(){
            //     $(this).addClass("hidden");
                // $().removeClass("hidden");
           
            // $(".mid2:eq(1)").children().find(".starred-wrapper").on("click",function(){
            //     $(".star-wrapper").removeClass("hidden");
            //     $(this).addClass("hidden");
            // })}
            var length = $(".body1 .mid2").length;
                if(length >= 2){
                    $(".header-sort").removeClass("disabled");
                    // $(".header-sort").click(function(){
                    //     $(".hover-sort").toggle();
                    // })
                }
                else{
                    $(".header-sort").addClass("disabled");
                }
                
            $("body").on("dblclick",".mid2", function(){
                // $(".main-right").css("display", "flex");
                // $(".main-right").css("display", "flex");
                $(".main-right").css("display", "block");
                $(".main-right").css("display", "flex");
                // $(this).removeClass("background");
                $(".mid2").removeClass("background");
                $(this).addClass("background");
                var content = $(this).find(".mid2-2").html();
                $(".display-view").html(content);
                // $(".starred-wrapper").addClass("hidden");
                // $(".star-wrapper").on("click",function(){
                //     $(this).addClass("hidden");
                //     $(".starred-wrapper").removeClass("hidden");
                // })
                // $(".starred-wrapper").on("click",function(){
                //     $(this).addClass("hidden");
                //     $(".star-wrapper").removeClass("hidden");
                // })
            });
           
            $(".mid2").on("click", function(){
                // $(".mid2").removeClass("background");
                var f = $(this);
                $(this).addClass("background");
                var text1 = $(this).children().eq(1).children().html();
                // alert( $(this).children().html());
                $(".display-view span").html(text1);
                // $(".mid2").removeClass("background");
                // var content1 = $(this).find(".mid2-2").html();
                // $(".display-view").html(content1);
                // $(this).find(".mid2-3").on("click",function(){
                //     $(this).find(".star-wrapper").addClass("hidden");
                //     $(this).find(".starred-wrapper").removeClass("hidden");
                // })
                // $(".right-header3").find(".starred-wrapper").on("click",function(e){
                //     e.stopPropagation();
                //     $(this).addClass("hidden");
                //     $(this).prev(".star-wrapper").removeClass("hidden");
                //     f.find(".mid2-3 .star-wrapper").removeClass("hidden");
                //     f.find(".mid2-3 .starred-wrapper").addClass("hidden");
                // })
                // $(".right-header3").find(".star-wrapper").on("click",function(e){
                //     e.stopPropagation();
                //     $(this).addClass("hidden");
                //     $(this).next(".starred-wrapper").removeClass("hidden");
                //     f.find(".mid2-3 .star-wrapper").addClass("hidden");
                //     f.find(".mid2-3 .starred-wrapper").removeClass("hidden");
                // })
            })
            // var l5 = $(".body1 .mid2");
            // if(l5.length >= 2){
            //     $(".header-sort").removeClass("disabled");
            //     $(".header-sort").click(function(){
            //         $(".hover-sort").toggle();
            //     })
            // }
            // else if(l5.length < 2){
            //     $(".header-sort").addClass("disabled");
            // }
            // $(".mid2-1").children(".task-check").on("click",function(e){
                // $("body").on("click",".task-check",function(){
                //     alert("ditconmem");
                // })
                // $(".mid2-1").children(".task-check").on("click",function(e){
                    $("body").on("click",".task-check",function(e){
                        // alert("dasdas");
                // e.stopPropagation();
                $(".mid3").removeClass("hidden");
                var l = $(this).parent().parent();
                l.children().children(".star-wrapper").unbind("click");
                var l5 = $(".body1").children();
                if(l5.length >= 2){
                    $(".header-sort").removeClass("disabled");
                    // $(".header-sort").click(function(){
                    //     $(".hover-sort").toggle();
                    // })
                }
                else{
                    $(".header-sort").addClass("disabled");
                }
                $(".right-header3").find(".starred-wrapper").on("click",function(e){
                    // e.sto
                  
                    $(this).addClass("hidden");
                    $(this).prev(".star-wrapper").removeClass("hidden");
                    f.find(".mid2-3 .star-wrapper").removeClass("hidden");
                    f.find(".mid2-3 .starred-wrapper").addClass("hidden");
                })
                $(".right-header3").find(".star-wrapper").on("click",function(e){
                    e.stopPropagation();
                    $(this).addClass("hidden");
                    $(this).next(".starred-wrapper").removeClass("hidden");
                    f.find(".mid2-3 .star-wrapper").addClass("hidden");
                    f.find(".mid2-3 .starred-wrapper").removeClass("hidden");
                })
                // var t = $("task:eq(2)");
                l.prependTo(".done");
                // $(".star-wrapper").removeClass(".star-wrapper").addClass(".star-wrapper-delete");
                // $(".starred-wrapper").removeClass(".starred-wrapper").addClass(".starred-wrapper-delete");
                // l.addClass("hidden");
                
                // $(".task:eq(2)").removeClass("hidden");
                // $(".mid3").removeClass("hidden");
                //click vào task-check chuyển mid2 xuống dưới và ẩn task-check thành task-checked
            })
            // $(".starred-wrapper").addClass("hidden");
            $(".task.body1").children().children().children(".star-wrapper").on("click",function(){
                
                $(this,".right-header3.star-wrapper").addClass("hidden");
                // $(this).removeClass("hidden");
                $(this,".right-header3.starred-wrapper").next(".starred-wrapper").removeClass("hidden");
                $(".right-header3").find(".star-wrapper").addClass("hidden");
                $(".right-header3").find(".starred-wrapper").removeClass("hidden");
                var l2 = $(this).parent().parent(".mid2");
                l2.prependTo(".task:eq(1)");
                $(this).parent().parent().css("display","none");
                $(this).parent().parent().slideDown();
                
                // $(".task.body1").stop(true);
            })
            $(".task.body1").children().children().children(".starred-wrapper").on("click",function(){
            
                $(this,".right-header3.starred-wrapper").addClass("hidden");
                $(this,".right-header3.star-wrapper").prev().removeClass("hidden");
                $(".right-header3").find(".star-wrapper").removeClass("hidden");
                $(".right-header3").find(".starred-wrapper").addClass("hidden");
                // $(".right-header3").find(".star-wrapper").removeClass("hidden");
                // $(".right-header3").find(".starred-wrapper").addClass("hidden");
                // $(this).find(".starred-wrapper").addClass("hidden");
                
                // $(".task.body1").stop(true);
            })
            // $(".task.body1").children().children().children(".star-wrapper").click(function(e){
            //     // alert("asdasd");
            //     $(this,".right-header3.star-wrapper").addClass("hidden");
            //     // $(this).removeClass("hidden");
            //     $(this,".right-header3.starred-wrapper").next(".starred-wrapper").removeClass("hidden");
            //     $(".right-header3").find(".star-wrapper").addClass("hidden");
            //     $(".right-header3").find(".starred-wrapper").removeClass("hidden");
            //     var l2 = $(this).parent().parent(".mid2");
            //     l2.prependTo(".task:eq(1)");
            //     $(this).parent().parent().css("display","none");
            //     $(this).parent().parent().slideDown();
            //     e.stopPropagation();
            //     // $(".task.body1").stop(true);
            // })
            // $(".task.body1").children().children().children(".starred-wrapper").click(function(e){
            //     $(this,".right-header3.starred-wrapper").addClass("hidden");
            //     $(this,".right-header3.star-wrapper").prev().removeClass("hidden");
            //     $(".right-header3").find(".star-wrapper").removeClass("hidden");
            //     $(".right-header3").find(".starred-wrapper").addClass("hidden");
            //     // $(".right-header3").find(".star-wrapper").removeClass("hidden");
            //     // $(".right-header3").find(".starred-wrapper").addClass("hidden");
            //     // $(this).find(".starred-wrapper").addClass("hidden");
            //     e.stopPropagation();
            //     // $(".task.body1").stop(true);
            // })
            // $(".mid2-1").children(".task-check").on("click",function(){
            //     $(".done").children().children().children(".star-wrapper").off("click");
            //     $(".done").children().children().children(".starred-wrapper").off("click");
            // })
            $("body").on('click',".task-checked",function(e){
                // e.stopPropagation();
                var l1 = $(this).parent().parent();
                // l1.prependTo(".task:eq(1)");
                l1.children().children(".star-wrapper").on("click",function(e){
                    e.stopPropagation();
                    $(this,".right-header3.star-wrapper").addClass("hidden");
                    // $(this).removeClass("hidden");
                    $(this,".right-header3.starred-wrapper").next(".starred-wrapper").removeClass("hidden");
                    $(".right-header3").find(".star-wrapper").addClass("hidden");
                    $(".right-header3").find(".starred-wrapper").removeClass("hidden");
                    var l2 = $(this).parent().parent(".mid2");
                    l2.prependTo(".task:eq(1)");
                    $(this).parent().parent().css("display","none");
                    $(this).parent().parent().slideDown();
                    // $(".task.body1").stop(true);
                })
                l1.children().children(".starred-wrapper").on("click",function(e){
                    e.stopPropagation();
                    $(this,".right-header3.starred-wrapper").addClass("hidden");
                    $(this,".right-header3.star-wrapper").prev().removeClass("hidden");
                    $(".right-header3").find(".star-wrapper").removeClass("hidden");
                    $(".right-header3").find(".starred-wrapper").addClass("hidden");
                    // $(".right-header3").find(".star-wrapper").removeClass("hidden");
                    // $(".right-header3").find(".starred-wrapper").addClass("hidden");
                    // $(this).find(".starred-wrapper").addClass("hidden");
                    
                    // $(".task.body1").stop(true);
                })
                var l4 = $(".done").children();
                if(l4.length <1){
                    $(".mid3").addClass("hidden");
                }
                var length = $(".body1 .mid2").length;
                if(length >= 2){
                    $(".header-sort").removeClass("disabled");
                    // $(".header-sort").click(function(){
                    //     $(".hover-sort").toggle();
                    // })
                }
                else{
                    $(".header-sort").addClass("disabled");
                }
                l1.prependTo(".body1");
            })
            // $(".task.done").children().find(".mid2-1").on("click",function(e){
            //     var l1 =$(this).parent();
            //     l1.prependTo(".task.body1");
            //     e.stopPropagation();
            // })
            // $(".task.body1").children().children().children(".star-wrapper").click(function(e){
            //     // alert("asdasd");
            //     $(this,".right-header3.star-wrapper").addClass("hidden");
            //     // $(this).removeClass("hidden");
            //     $(this,".right-header3.starred-wrapper").next(".starred-wrapper").removeClass("hidden");
            //     $(".right-header3").find(".star-wrapper").addClass("hidden");
            //     $(".right-header3").find(".starred-wrapper").removeClass("hidden");
            //     var l2 = $(this).parent().parent(".mid2");
            //     l2.prependTo(".task:eq(1)");
            //     $(this).parent().parent().css("display","none");
            //     $(this).parent().parent().slideDown();
            //     e.stopPropagation();
            //     // $(".task.body1").stop(true);
            // })
            // $(".task.body1").children().children().children(".starred-wrapper").click(function(e){
            //     $(this,".right-header3.starred-wrapper").addClass("hidden");
            //     $(this,".right-header3.star-wrapper").prev().removeClass("hidden");
            //     $(".right-header3").find(".star-wrapper").removeClass("hidden");
            //     $(".right-header3").find(".starred-wrapper").addClass("hidden");
            //     // $(".right-header3").find(".star-wrapper").removeClass("hidden");
            //     // $(".right-header3").find(".starred-wrapper").addClass("hidden");
            //     // $(this).find(".starred-wrapper").addClass("hidden");
            //     e.stopPropagation();
            //     // $(".task.body1").stop(true);
            // })
            // $(".mid2-1").children(".task-checked").on("click",function(){
            //     $(".body1").children().children().children(".star-wrapper").on("click");
            //     $(".body1").children().children().children(".starred-wrapper").on("click");
            // })
            $(document).on("click",".done .mid2 .mid2-3 .star-wrapper",function(e){

                e.stopPropagation();
                $(this).addClass("hidden");
                // $(this).removeClass("hidden");
                $(this).next(".starred-wrapper").removeClass("hidden");
                $(".right-header3").find(".star-wrapper").addClass("hidden");
                $(".right-header3").find(".starred-wrapper").removeClass("hidden");
                
            })
            $(document).on("click",".done .mid2 .mid2-3 .star-wrappered",function(e){
                e.stopPropagation();
                $(this).addClass("hidden");
                // $(this).removeClass("hidden");
                $(this).prev(".star-wrapper").removeClass("hidden");
                $(".right-header3").find(".star-wrapper").addClass("hidden");
                $(".right-header3").find(".starred-wrapper").removeClass("hidden");
            })
            // $(".right-header3").find(".starred-wrapper").removeClass("hidden");
            
            // $(".task.done .mid2 .mid2-3 .star-wrapper").click(function(){
            //     alert("sadsad");
            //     $(this).addClass("hidden");
            //     $(this).next(".starred-wrapper").removeClass("hidden");
            // })
            // $(".task.done .mid2 .mid2-3").children(".starred-wrapper").click(function(){
            //     $(this).addClass("hidden");
            //     $(this).prev(".star-wrapper").removeClass("hidden");
            // })
            // // $(".task.done").children().children().find(".star-wrapper").click(function(e){
            // //     alert("dsadasd");
            // //     // alert("asdasd");
            // //     $(this).addClass("hidden");
            // //     // $(this).removeClass("hidden");
            // //     $(this).siblings(".starred-wrapper").removeClass("hidden");
            // //     $(".right-header3").find(".star-wrapper").addClass("hidden");
            // //     $(".right-header3").find(".starred-wrapper").removeClass("hidden");
            // //     // $(this).parent().parent().prependTo(".task:eq(2)");
            // //     // $(this).parent().parent().css("display","none");
            // //     // $(this).parent().parent().slideDown();
            // //     e.stopPropagation();
            // // })
            // // $(".task.done").children().children().find(".starred-wrapper").click(function(e){
            // //     // alert("asdasd");
            // //     $(this).addClass("hidden");
            // //     $(this).siblings(".star-wrapper").removeClass("hidden");
            // //     $(".right-header3").find(".star-wrapper").removeClass("hidden");
            // //     $(".right-header3").find(".starred-wrapper").addClass("hidden");
            // //     // $(".right-header3").find(".star-wrapper").removeClass("hidden");
            // //     // $(".right-header3").find(".starred-wrapper").addClass("hidden");
            // //     // $(this).find(".starred-wrapper").addClass("hidden");
            // //     e.stopPropagation();
            // // })
            // // $(".mid2-3").find(".star-wrapper").on("click",function(){
            // //     $(".star-wrapper").addClass("hidden");
            // //     $(".starred-wrapper").removeClass("hidden");
            // // })
            // // $(".mid2-3").find("starred-wrapper").on("click",function(){
            // //     $(".starred-wrapper").addClass("hidden");
            // //     $(".star-wrapper").removeClass("hidden");
            // // })
            var list = $(".createList");
            // $(".list").css("display","none");
            var curren_list;
            // $(".chap3").on("click",function(){
            //    var w = $(this).children().children().eq(2).val();
            // // var w = $(".idList").val();
            //     alert(w);
            // })
            $("body").on("contextmenu",".chap3",function(event){
                list.css("display","block");
                // isLeft.first().css("display","none");
                // curren_list = $(this).children().children().children().eq(2).html();
                curren_list = $(this).children().children().eq(2).val();
                // console.log(curren_list);
                var t = $(".textDeleteList").val(curren_list).val();
                // alert(t);
                console.log(t);
                list.css({
                    left : event.clientX + 'px',
                    top : event.clientY + 'px',
                })
                event.preventDefault();
            })
            list.find(".context-menu-item:eq(10)").on("click",function(){
                list.css("display","none");
                $(".dialog-wrapper").addClass("something2");
                $(".settings.account").addClass("hidden");
                $(".settings.account").removeClass("flex");
                $(".dialog.confirm:eq(0)").addClass("hidden");
                $(".dialog.confirm:eq(1)").addClass("hidden");
                $(".dialog.confirm:eq(2)").removeClass("hidden"); 
                $(".dialog.confirm:eq(3)").addClass("hidden");
                $(".dialog.listOptions").addClass("hidden"); // sửa dialog listOptions
            })
            // $(".cancel.full:eq(3)").on("click",function(){
            $(".deleteList").on("click",function(){
                $(".dialog-wrapper").removeClass("something2");
                $(".dialog.confirm:eq(2)").addClass("hidden");
            })
            $(".createList").on("click",function(e){
                e.stopPropagation();
            })
            $("body").on("click",function(e){
                if(e.target != list){
                    list.css("display","none");
                }
            })
            //Tạo list
            var edit_list;
            $(".list-options").on("click",function(e){
                $(".boxEditList").removeClass("hidden");
                $(".dialog-wrapper").addClass("something2");
                $(".settings.account").addClass("hidden");
                $(".settings.account").removeClass("flex");
                $(".dialog.confirm:eq(0)").addClass("hidden");
                $(".dialog.confirm:eq(1)").addClass("hidden");
                $(".dialog.confirm:eq(2)").addClass("hidden"); 
                $(".dialog.confirm:eq(3)").addClass("hidden");
                $(".boxCreateList").addClass("hidden");
            })
            // var x = $(".edit:eq(1)").text();
            // $(".big:eq(2)").on("keyup",function(event){
            //     $(".edit:eq(0)").removeClass("hidden");
            //     $(".edit:eq(1)").html("Save");

            // })
            // $(".edit:eq(1)").on("click",function(){
            //     $(".boxEditList").addClass("hidden");
            // })
            var contextMenu1 = $(".isBottom");
            // var curren_task;
            $("body").on("contextmenu",".body1 .mid2",function(event){
                contextMenu2.css("display","none");
                contextMenu1.css("display","block");
                // contextMenu1.removeClass("hidden");
                // contextMenu2.addClass("hidden");
                var curren_task = $(this).children(".mid2-2").children().siblings("span").html();
                // var t = curren_task.val();
                $(".textDelete").val(curren_task);
                console.log(curren_task);
                contextMenu1.css({
                    left : event.clientX + 'px',
                    top : event.clientY + 'px',
                });
                event.preventDefault();
            })
            contextMenu1.find(".context-menu-item:eq(13)").on("click",function(){
                contextMenu1.css("display","none");
                $(".dialog-wrapper").addClass("something2");
                $(".settings.account").addClass("hidden");
                $(".settings.account").removeClass("flex");
                $(".dialog.confirm:eq(0)").removeClass("hidden");
                $(".dialog.confirm:eq(1)").addClass("hidden");
                $(".dialog.confirm:eq(2)").addClass("hidden");
                $(".dialog.confirm:eq(3)").addClass("hidden");
                $(".dialog.listOptions").addClass("hidden");
                
            })
            $(".deleteTask").on("click",function(){
                $(".dialog-wrapper").removeClass("something2");
                $(".dialog.confirm:eq(0)").addClass("hidden");
            })
                //click vào delete-to-do hiển thị ra
                self = $(this);
                var text = self.find(".mid2-2").html();
                $(".custom-context h3 span").html(text);
                //$(".display-view span").html(text);
                $(".submit.full.blue:eq(1)").on("click",function(){
                    self.remove();
                    $(".dialog-wrapper").removeClass("something2");
                    $(".dialog.confirm:eq(0)").addClass("hidden");
                    var l4 = $(".done").children();
                    if(l4.length <1){
                        $(".mid3").addClass("hidden");
                    }
                
            })
            $(".display-view").on("dblclick",function(){
                $(".nameTaskEdit").addClass("hidden");
                $(".edit-view-task").removeClass("hidden");
            });
            $("body").on("keypress",".edit-view-task",function(event){
                var x = event.keyCode;
                var item = $(".edit-view-task");
                if( x ==13 && item.val()!=" "){
                    // $(".edit-view-task").addClass("hidden");
                    $(".nameTaskEdit").removeClass("hidden");
                }
            })
            $(".createDateRemind").on("click",function(){
               
                    $(".right-mid1").addClass("hidden");
                
                    $(".editDateTask").removeClass("hidden");
                
            })
            $(".editDateTask").on("dblclick",function(){
                    $(this).addClass("hidden");
                    $(".right-mid1").removeClass("hidden");
            })
            // $(".translateRight").on("click",function(){
            //     // alert("ssd");
            //     var text1 = $(this).html();
            //     // alert( $(this).children().html());
            //     $(".display-view span").html(text1);
            // })
        // })
            //     // self.children().find(".star-wrapper").on("click",function(){
            //     //     $(".starred-wrapper").removeClass("hidden");
            //     //     $(".star-wrapper").addClass("hidden");

            //     // })
            //     // self.children().find(".starred-wrapper").on("click",function(){
            //     //     $(".star-wrapper").removeClass("hidden");
            //     //     $(".starred-wrapper").addClass("hidden");
            //     // })
            // })
            $(".isBottom").on("click",function(e){
                e.stopPropagation();
            })
            $("body").click(function(e){
                var container1 = $(".isBottom");
                if(e.target != container1){
                    container1.hide();
                }
            })
            var contextMenu2 = $(".isBottomSubmenu");
            $("body").on("contextmenu",".done .mid2",function(event){
                // console.log("asdasd");
                contextMenu1.css("display","none");
                contextMenu2.css("display","block");
                // contextMenu2.removeClass("hidden");
                // contextMenu1.addClass("hidden");
                var curren_task = $(this).children(".mid2-2").children().siblings("span").html();
                console.log(curren_task);
                $(".textDelete").val(curren_task);
                // console.log(t);
                contextMenu2.css({
                    left : event.clientX + 'px',
                    top : event.clientY + 'px',
                });
                event.preventDefault();
            })
                // event.preventDefault();
                contextMenu2.find(".context-menu-item:eq(6)").on("click",function(){
                    contextMenu2.css("display","none");
                    $(".dialog-wrapper").addClass("something2");
                    $(".settings.account").removeClass("flex");
                    $(".settings.account").addClass("hidden");
                    $(".dialog.confirm:eq(0)").removeClass("hidden");
                    $(".dialog.confirm:eq(1)").addClass("hidden");
                    $(".dialog.confirm:eq(2)").addClass("hidden");
                    $(".dialog.confirm:eq(3)").addClass("hidden");
                    $(".dialog.listOptions").addClass("hidden");
                })
            //     self1 = $(this);
            //     var text = self1.find(".mid2-2").html();
            //     $(".custom-context h3 span").html(text);
            //     $(".submit.full.blue:last").on("click",function(){
            //         self1.remove();
            //         $(".dialog-wrapper").removeClass("something2");
            //         $(".dialog.confirm").addClass("hidden");
                
            // })
           


            // $('body').on('contextmenu', '.done', function(){
            //     console.log('asad');
            // })



            $(".isBottomSubmenu").on("click",function(e){
                e.stopPropagation();
            })
            $("body").click(function(e){
                var container2 = $(".isBottomSubmenu");
                if(e.target != container2){
                    container2.hide();
                }
            })
            // $(".task.body1").contextmenu(function(){
            //     $(".isBottom").css("display","block");
            //     $(".isBottomSubmenu").css("display","none");
            // })
            // $(".task.done").contextmenu(function(){
            //     $(".isBottom").css("display","none");
            //     $(".isBottomSubmenu").css("display","block");
            // })
        // }
        
        // $(".task.done").children().children().find(".star-wrapper").click(function(e){
        //     // alert("asdasd");
        //     $(this).addClass("hidden");
        //     // $(this).removeClass("hidden");
        //     $(this).siblings(".starred-wrapper").removeClass("hidden");
        //     $(".right-header3").find(".star-wrapper").addClass("hidden");
        //     $(".right-header3").find(".starred-wrapper").removeClass("hidden");
        //     // $(this).parent().parent().prependTo(".task:eq(2)");
        //     // $(this).parent().parent().css("display","none");
        //     // $(this).parent().parent().slideDown();
        //     e.stopPropagation();
        // })
        // $(".task.done").children().children().find(".starred-wrapper").click(function(){
        //     // alert("asdasd");
        //     $(this).addClass("hidden");
        //     $(this).siblings(".star-wrapper").removeClass("hidden");
        //     $(".right-header3").find(".star-wrapper").removeClass("hidden");
        //     $(".right-header3").find(".starred-wrapper").addClass("hidden");
        //     // $(".right-header3").find(".star-wrapper").removeClass("hidden");
        //     // $(".right-header3").find(".starred-wrapper").addClass("hidden");
        //     // $(this).find(".starred-wrapper").addClass("hidden");
        // })
       
        // $(".mid2").find(".star-wrapper").on("click",function(){
        //     self = $(this);
        //     self.addClass("hidden");
        //     $(".starred-wrapper").css("display", "block");
        // })
        // $(".mid2").find(".starred-wrapper").on("click",function(){
        //     self1 = $(this);
        //     self1.addClass("hidden");
        //     // self1.css("display", "none");
        // })
        // })
        // var lds = $(".done").children();
        // if( lds.length = 0){
        //     $(".mid3").addClass("hidden");
        // }
        // else{
        //     $(".mid3").removeClass("hidden");
        //     $(".mid3").click(function(){
        //         $(".done").toggle("hidden");
        //     })
        // }
        $("body").on("keypress","input[name='createComment']",function(event){
            var item1 = $(".right-foot1-12 input").val();
            if( event.keyCode == 13 && item1 != 0){
                
                var itm = $(".section-item:first");
                var cln = itm.clone(true);
                cln.find(".comment-text").html(item1);
                cln.appendTo(".comments-list:eq(1)");
                
            }
            })
                // var cln = $(".comments-list.comment .section-item-comment").clone();
                // cln.appendTo(".comments-list.commented");
                // $(".comments-list.commented").removeClass("hidden");
                // var titletaskcheck1 = item1.val();
                // $(".commented .section-content").children(".comment-text").html(titletaskcheck1);
                // item1.val("");
                var curren_comment;
                $("body").on("click",".comment",function(e){
                    curren_comment = $(this).siblings(".idComment").html();
                    $(".DeleteComment").val(curren_comment);
                    console.log(curren_comment);
                    e.stopPropagation();
                    $(".dialog-wrapper").addClass("something2");
                    $(".settings.account").addClass("hidden");
                    $(".settings.account").removeClass("flex");
                    $(".dialog.confirm:eq(0)").addClass("hidden");
                    $(".dialog.confirm:eq(1)").removeClass("hidden");
                    $(".dialog.confirm:eq(2)").addClass("hidden");
                    $(".dialog.confirm:eq(3)").addClass("hidden");
                    $(".dialog.listOptions").addClass("hidden");
                    var cmt = $(this).parent();
                    $("body").on("click",".buttonDeleteComment",function(){
                        cmt.remove();
                        $(".dialog-wrapper").removeClass("something2");
                        $(".dialog.confirm:eq(1)").addClass("hidden");
                    })
                })
                $("body").on("click",".cancelDeleteComment",function(){
                    $(".dialog-wrapper").removeClass("something2");
                    $(".dialog.confirm:eq(1)").addClass("hidden");
                })
                //Xóa Comment
                // $("input[name='subtask']").on("keypress",function(e){
                //     // $(this).val();
                //     if(e.keyCode ==13 &&  $(this).val()==" "){

                //     }
                // })
                var curren_subtask;
                $("body").on("click",".deleteSubtask",function(e){
                    // alert("sadsa");
                    curren_subtask = $(this).siblings(".idSubTask").html();
                    $(".textDeleteSubTask").val(curren_subtask);
                    // console.log("asdasd");
                    e.stopPropagation();
                    $(".dialog-wrapper").addClass("something2");
                    $(".settings.account").addClass("hidden");
                    $(".settings.account").removeClass("flex");
                    $(".dialog.confirm:eq(0)").addClass("hidden");
                    $(".dialog.confirm:eq(1)").addClass("hidden");
                    $(".dialog.confirm:eq(2)").addClass("hidden");
                    $(".dialog.confirm:eq(3)").removeClass("hidden");
                    $(".dialog.listOptions").addClass("hidden");
                    var subtask = $(this).parent();
                    $("body").on("click",".buttonDeleteSubtask",function(){
                        subtask.remove();
                    $(".dialog-wrapper").removeClass("something2");
                    $(".dialog.confirm:eq(3)").addClass("hidden");
                    })
                })
                $("body").on("click","button[name='deleteTask']",function(){
                    $(".dialog-wrapper").removeClass("something2");
                    $(".dialog.confirm:eq(3)").addClass("hidden");
                })
                //Sửa SubTask
                $(".nameSubTask").on("dblclick",function(){
                    $(this).siblings().children().removeClass("hidden");
                    $(this).addClass("hidden");
                })
                $(".edit-view-subtask").on("keyup",function(event){
                    var x = event.keyCode;
                    var item = $(".edit-view-subtask");
                    if( x ==13 && item.val() != ""){
                        $(".edit-view-subtask").addClass("hidden");
                        $(".nameSubTask").removeClass("hidden");
                    }
                })
                $("body").on("keypress","input[name='search']",function(e){
                   
                    if(e.keyCode ==13 && $(this).val() != ""){
                        // alert("sssss");
                    }
                })
        // $(".task:eq(2)").children().find(".mid2-1").on("click",function(){
        //     alert("sadasds");
        //     var l1 = $(this).parent();
        //     // var t = $("task:eq(2)");
        //     l1.prependTo(".task:eq(1)");
        //     // l.addClass("hidden");
        //     $(".task:eq(1)").removeClass("hidden");
        //     //chuyển từ mid2 bên dưới trở lại bên trên và ẩn task-checked đi
            
        // })
        $(window).resize(function(){
            var width = $(window).width();
            if(width <= 1000){
                $("#main-left").addClass("something");
                // $("#left-l").click(this.toggleTask);
                $(".near1").addClass("none1");
                $(".near2").addClass("none1");
            }
            else if(width > 1000){
                $("#main-left").removeClass("something");
                // $("#left-l").click(this.toggleTask);
                $(".near1").removeClass("none1");
                $(".near2").removeClass("none1");
            }
            if(width <= 500){
                $(".main-mid").addClass("hidden");
                $("#main-left").addClass("hidden");
                $(".main-right").addClass("t");
                
            }
            else if(width > 500){
                $(".main-mid").removeClass("hidden");
                $("#main-left").removeClass("hidden");
                $(".main-right").removeClass("t");
            }
        })
    }
    //function
    toggleTask(){
        $("#main-left").toggleClass("something");
        $(".near1").toggleClass("none1");
        $(".near2").toggleClass("none1");
    }
}