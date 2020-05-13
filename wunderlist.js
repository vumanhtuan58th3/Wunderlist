
window.onload = function() //load het tat ca css, html
{
    document.getElementById("left-l").addEventListener("click", function(){
        document.getElementById("main-left").classList.toggle("something");
        document.getElementsByClassName("near1")[0].classList.toggle("none1");
        document.getElementsByClassName("near2")[0].classList.toggle("none1");

        // click vao main-left . an va hien
    });
    document.getElementById("user-toolbar").addEventListener("click",function(e){
        document.getElementsByClassName("hover-avatar")[0].classList.toggle("something2");
        document.getElementsByClassName("hover-bell")[0].classList.add("hidden");
        document.getElementsByClassName("hover-messenger")[0].classList.add("hidden");

        e.stopPropagation();
        //click vao hover-avatar de an hien
    });
    var x = document.getElementsByClassName("hover-avatar")[0];
    window.addEventListener("click",function(event){
        if(event.target != x){
            document.getElementsByClassName("hover-avatar")[0].classList.remove("something2");
        }
        // khi click ra ngoài hover-avatar
    });
    document.getElementsByClassName("near1")[0].addEventListener("click",function(e){
        document.getElementsByClassName("hover-bell")[0].classList.toggle("hidden");
        document.getElementsByClassName("hover-avatar")[0].classList.remove("something2");
        document.getElementsByClassName("hover-messenger")[0].classList.add("hidden");
        e.stopPropagation();
        
    });
    var x = document.getElementsByClassName("hover-bell")[0];
    window.addEventListener("click",function(event){
        if(event.target != x){
            document.getElementsByClassName("hover-bell")[0].classList.add("hidden");
        }
        // hiển thị và none khung của bell(chuông) đi. và khi nhấn ra ngoài vẫn display= "none";
    });
    document.getElementsByClassName("near2")[0].addEventListener("click",function(e){
        document.getElementsByClassName("hover-messenger")[0].classList.toggle("hidden");
        document.getElementsByClassName("hover-avatar")[0].classList.remove("something2");
        document.getElementsByClassName("hover-bell")[0].classList.add("hidden");
        e.stopPropagation();
    });
    var x = document.getElementsByClassName("hover-messenger")[0];
    window.addEventListener("click",function(event){
        if(event.target != x){
            document.getElementsByClassName("hover-messenger")[0].classList.add("hidden");
        }
        
    });
    // document.getElementById("chap2").addEventListener("mousedown",function(event){
        
    //     switch(event.button){
    //         case 2: 
    //             document.getElementsByClassName("context-menu isLeft")[0].classList.remove("hidden");
    //         break;
    //         default: 
    //             document.getElementsByClassName("context-menu isLeft")[0].classList.add("hidden");
    //         break;
    //     }
    //     event.stopPropagation();
    // })
    var contextMenu = document.getElementsByClassName("context-menu isLeft")[0];
    document.getElementById("chap2").addEventListener("contextmenu",function(event){
        contextMenu.style.display = "block";
        contextMenu.style.left = event.clientX + 'px';
        contextMenu.style.top = event.clientY + 'px';
        event.preventDefault();
        event.stopPropagation();
    });
    var y = document.getElementsByClassName("context-menu isLeft")[0];
    window.addEventListener("mousedown",function(event){
        if(event.target != y){
            document.getElementsByClassName("context-menu isLeft")[0].style.display= "none";
        }
        
        // khi click ra ngoài context-menu: mouse trái, phải, giữa.
    });
    function myFunction(x){
        if(x.matches){
            document.getElementById("main-left").classList.remove("something");
            document.getElementsByClassName("near1")[0].classList.remove("none1");
            document.getElementsByClassName("near2")[0].classList.remove("none1");
        }
        else{
            document.getElementById("main-left").classList.add("something");
            document.getElementsByClassName("near1")[0].classList.add("none1");
            document.getElementsByClassName("near2")[0].classList.add("none1");
        }
    }
    function myFunction1(y){
        if(y.matches){
            document.getElementsByClassName("main-mid")[0].classList.add("hidden");
            document.getElementById("main-left").classList.add("hidden");
            document.getElementsByClassName("main-right")[0].classList.add("t");
        }
        else{
            document.getElementsByClassName("main-mid")[0].classList.remove("hidden");
            document.getElementById("main-left").classList.remove("hidden");
            document.getElementsByClassName("main-right")[0].classList.remove("t");
        }
    }
    var x = window.matchMedia("(min-width:1000px)");
    var y = window.matchMedia("(max-width:500px)");
    myFunction(x);
    myFunction1(y);
    x.addListener(myFunction);
    y.addListener(myFunction1);

    // var contextMenu1 = document.getElementsByClassName("context-menu isBottom")[0];
    // document.getElementsByClassName("mid2")[0].addEventListener("contextmenu",function(event){
    //     contextMenu1.style.display = "block";
    //     contextMenu1.style.left = event.clientX + 'px';
    //     contextMenu1.style.top = event.clientY + 'px';
    //     event.preventDefault();
    //     // click vào chuột phải của mid2 thì hiện ra
    // });
    // var y = document.getElementsByClassName("context-menu isBottom")[0];
    // window.addEventListener("mousedown",function(event){
    //     if(event.target != y){
    //         document.getElementsByClassName("context-menu isBottom")[0].style.display= "none";
    //     }
    //     // khi click ra ngoài context-menu: mouse trái, phải, giữa.
    // })
    // document.getElementsByClassName("near2")[0].addEventListener("click",function(e){
    //     document.getElementsByClassName("hover-messenger")[0].classList.toggle("something2");
    //     e.stopPropagation();
    // });
    // var z = document.getElementsByClassName("hover-messenger")[0];
    // window.addEventListener("click",function(event){
    //     if(event.target != z){
    //         document.getElementsByClassName("hover-messenger")[0].style.display = "none";
    //     }
    // });


    /*var x = document.getElementById("user-toolbar").addEventListener("click", function(){
        if(x=="user-toolbar"){
        document.getElementsByClassName("hover-avatar")[0].style.display="block";}
        else{
            document.getElementsByClassName("hover-avatar")[0].style.display="none";
        }
    });*/
    /*var toHide = document.getElementsByClassName("hover-avatar")[0];
    document.getElementById("user-toolbar").onclick = function(e){
        if(e.target.class !== "hover-avatar"){
            toHide.style.display = "none";
        }
    }
    /*document.getElementsByClassName("near1")[0].addEventListener("click", function(){
        document.getElementsByClassName("hover-bell")[0].classList.toggle("something3");
    });*/
    document.querySelectorAll("li.list-menu3")[0].addEventListener("click",function(){
        document.getElementsByClassName("dialog-wrapper")[0].classList.add("something2");
        document.getElementsByClassName("settings account")[0].classList.remove("hidden");
        document.getElementsByClassName("dialog listOptions")[0].classList.add("hidden");
        document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
        document.getElementsByClassName("settings account")[0].classList.add("flex");
        
        // click va account settings
    }); 
    document.getElementsByClassName("cols-button-done")[0].addEventListener("click",function(){
        document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
        // click vao done trong account settings
    });
    document.querySelectorAll("li.list-menu3")[0].addEventListener("click",function(){
        document.getElementsByClassName("tabs-1")[0].classList.add("something3");
        // document.getElementsByClassName("dialog listOptions")[0].style.display = "none";
    })
    document.getElementsByClassName("tabs-li")[0].addEventListener("click",function(){
        document.getElementsByClassName("tabs-1")[0].classList.remove("something3");
        document.getElementsByClassName("tabs-1")[1].classList.add("something3");
    })
    document.getElementsByClassName("tabs-li")[1].addEventListener("click",function(){
        document.getElementsByClassName("tabs-1")[0].classList.add("something3");
        document.getElementsByClassName("tabs-1")[1].classList.remove("something3");
        //click vào general thì bảng general block ra.
    })
    // document.getElementsByClassName("tabs-li")[0].addEventListener("click",function(){
    //     document.getElementsByClassName("tabs-2")[0].classList.add("something2");
    //     //click vào general thì bảng general block ra.
    // });
    // // document.getElementsByClassName("tabs-li")[1].addEventListener("click",function(){
    // //     document.getElementsByClassName("tabs-2")[0].classList.remove("something2");
    // // });
    // document.getElementsByClassName("tabs-li")[0].addEventListener("click",function(){
    //     document.getElementsByClassName("tabs-1")[0].classList.add("something3");
    //     // khi click vào general thì bảng account none.
    // });
    // document.getElementsByClassName("tabs-li")[1].addEventListener("click",function(){
    //     document.getElementsByClassName("tabs-1")[0].classList.remove("something3");
    // });
    document.getElementById("left-foot").addEventListener("click",function(){
        document.getElementsByClassName("dialog-wrapper")[0].classList.add("something2");
        document.getElementsByClassName("settings account")[0].classList.add("hidden");
        document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
        document.getElementsByClassName("settings account")[0].classList.remove("flex");
        document.getElementsByClassName("dialog listOptions")[0].classList.remove("hidden");
        document.getElementsByClassName("submit full blue")[0].classList.add("disabled");
        // khi ấn + Create list sẽ hiển thị ra (.dialog.listOptions)
    })
    document.getElementsByClassName("left-foot")[0].addEventListener("click",function(){
        document.getElementsByClassName("dialog-wrapper")[0].classList.add("something2");
        document.getElementsByClassName("settings account")[0].classList.add("hidden");
        document.getElementsByClassName("settings account")[0].classList.remove("flex");
        document.getElementsByClassName("dialog listOptions")[0].classList.remove("hidden");
        document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
        document.getElementsByClassName("submit full blue")[0].classList.add("disabled");
        // khi sử dụng reponsive thanh main-left. khi nhấn + hiển thị ra (.dialog.listOptions)
    })
    document.getElementsByClassName("big")[0].addEventListener("input",function(){
        document.getElementsByClassName("submit full blue")[0].classList.remove("disabled");
    })
    document.getElementsByClassName("big")[1].addEventListener("input",function(){
        document.getElementsByClassName("submit full blue")[0].classList.remove("disabled");
        // khi viết chữ vào input thì button save chuyển sang màu xanh.
    })

    document.getElementsByClassName("cancel full")[0].addEventListener("click", function(){
        document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
        document.getElementsByClassName("dialog listOptions")[0].classList.add("hidden");
        // khi clcick vào Cancel thì dialog listOption none. 
    })
    document.getElementsByClassName("right-foot2")[0].addEventListener("click",function(){
        document.getElementsByClassName("main-right")[0].style.display = "none";
        // click vào < bên main-right để none main-right
    })
    
    // var c = document.getElementsByClassName("mid2");
    // for(i=0; i<c.length; i++){
    //     // document.getElementsByClassName("mid2-2")[i].innerHTML;
    //     var titleaskcheck = document.getElementsByClassName("mid2-2")[i];
    //     var b = titleaskcheck.innerHTML;
    //     c[i].addEventListener("dblclick",function(){
    //         document.getElementsByClassName("main-right")[0].style.display = "block";
    //         document.getElementsByClassName("main-right")[0].style.display = "flex";
    //         // var bg = document.getElementsByClassName("task");
    //         // for(i =0 ; i<c.length; i ++){
    //         //     bg[i].classList.remove("background");
    //         // }
    //         // this.classList.add("background");

    //         /*document.getElementsByClassName("main-right")[0].classList.remove("something3");*/
    //         // double Click để hiển thị main-right
    //     });
    //     c[i].addEventListener("click",function(){
    //         var content = this.children[1].innerHTML;
    //         document.getElementsByClassName("display-view")[0].innerHTML = content;
    //     });
    //     var contextMenu1 = document.getElementsByClassName("context-menu isBottom")[0];
    //     c[i].addEventListener("contextmenu",function(event){
    //     contextMenu1.style.display = "block";
    //     contextMenu1.style.left = event.clientX + 'px';
    //     contextMenu1.style.top = event.clientY + 'px';
    //     event.preventDefault();
    //     // click vào chuột phải của mid2 thì hiện ra
    //     });
    //     var y = document.getElementsByClassName("context-menu isBottom")[0];
    //     window.addEventListener("mousedown",function(event){
    //         if(event.target != y){
    //             document.getElementsByClassName("context-menu isBottom")[0].style.display= "none";
    //         }
    //     // khi click ra ngoài context-menu: mouse trái, phải, giữa.
    //     })
    // };
    var self;
    var self1;
    document.querySelector(".text1 input").addEventListener("keydown", function(event){
        var x = event.keyCode;
        var item = document.querySelector(".text1 input").value;
        if(x == 13 && item !=0){
            
            document.querySelector(".text1 input").value = '';
            // document.getElementsByClassName("task-checked")[0].style.display = "none";
            var elm = document.getElementsByClassName("mid2")[0];
            var cln = elm.cloneNode(true);
            // console.log(cln.children[1]);
            cln.children[1].innerHTML = item;
            var d = document.getElementsByClassName("task")[1];
            document.getElementsByClassName("task")[1].insertBefore(cln, d.firstChild);
            document.getElementsByClassName("task")[1].classList.remove("hidden");
            cln.addEventListener("dblclick",function(){
                document.getElementsByClassName("main-right")[0].style.display = "block";
                document.getElementsByClassName("main-right")[0].style.display = "flex";
                var bg = document.getElementsByClassName("mid2");
                for(i =0 ; i<bg.length; i ++){
                    bg[i].classList.remove("background");
                    
                }
                this.classList.add("background");
            })
            cln.addEventListener("click",function(){
                var content = this.children[1].innerHTML;
                document.getElementsByClassName("display-view")[0].innerHTML = content;
                // click vào mid2 chuyển nội dung sang main-right
                var bg = document.getElementsByClassName("mid2");
                    for(i=0 ; i<bg.length; i++){
                        bg[i].classList.remove("background");
                    }
                this.classList.add("background");
            })
            document.getElementsByClassName("task")[2].classList.add("hidden");
            
            
        
           
            // document.getElementsByClassName("task")[0].firstdChild(cln);
            // var bg = document.getElementsByClassName("task");
            // for(i =0 ; i<bg.length; i++){
            //     bg[i].classList.remove("background");
            // }
            // this.classList.add("background");
    // var t = document.getElementsByClassName("mid2-1");
    //     for(i=0; i<t.length; i ++){
    //     t[i].addEventListener("click",function(){
    //         var c = document.getElementsByClassName("mid2");
    //         for(i=0;i<c.length; i++){
    //         c[i].classList.remove("hidden");
    //         // this.c[0].classList.add("hidden");
    //         }
    //         this.classList.add("hidden");
    //     });
     //}
    // var b = document.getElementsByClassName("mid2-1 task-check");
    // for(var i=0; i<b.length; i++){
    //     b[i].addEventListener("click", function(){
    //     alert("hele");
        // var itm = document.querySelector("mid2").value;
        // var elm = document.getElementsByClassName("mid2")[0];
        // var cln = elm.cloneNode(true);
        // cln.children[1].innerHTML = itm;
        // var d = document.getElementsByClassName("task")[2];
        // document.getElementsByClassName("task")[2].insertBefore(cln, d.firstChild);
        // document.getElementsByClassName("task")[2].classList.remove("hidden");
//     })
// }
    // document.getElementsByClassName("mid2-1")[0].addEventListener("click",function(){
    //     this.parentElement.classList.add("hidden");
    // })
    // document.getElementsByClassName("mid2-1")[1].addEventListener("click",function(){
    //     this.parentElement.classList.add("hidden");
    //     // var g = this.nextSibling.innerHTML;
    //     var elm1 = document.getElementsByClassName("mid2")[0];
    //     var cln1 = elm1.cloneNode(true);
    //     var text = this.parentElement.children[1].innerHTML;
    //     cln1.children[1].innerHTML = text;
    //     // console.log(cln.children[1]);
    //     // document.getElementsByClassName("mid2-2")[2].innerHTML = g;
    //     var d1 = document.getElementsByClassName("task")[2];
    //     document.getElementsByClassName("task")[2].insertBefore(cln1, d1.firstChild);
    //     document.getElementsByClassName("task")[2].classList.remove("hidden");
    //     var contextMenu1 = document.getElementsByClassName("context-menu isBottom")[0];
    //     var c = document.getElementsByClassName("mid2");
    //     for(i=0; i<c.length; i++){
    //         c[i].addEventListener("contextmenu",function(event){
    //         contextMenu1.style.display = "block";
    //         contextMenu1.style.left = event.clientX + 'px';
    //         contextMenu1.style.top = event.clientY + 'px';
    //         event.preventDefault();
    //         // click vào chuột phải của mid2 thì hiện ra
    //         });
    //         var y = document.getElementsByClassName("context-menu isBottom")[0];
    //         window.addEventListener("mousedown",function(event){
    //             if(event.target != y){
    //                 document.getElementsByClassName("context-menu isBottom")[0].style.display= "none";
    //             }
    //         // khi click ra ngoài context-menu: mouse trái, phải, giữa.
    //         })
    //     }
        

    // });
    document.getElementsByClassName("mid2-1")[1].children[0].addEventListener("click",function(e){
        // document.getElementsByClassName("task-checked")[1].style.display = "block";
        // document.getElementsByClassName("task-check")[1].style.display = "none";
        var l = document.getElementsByClassName("mid2")[1];
        var l = this.parentElement.parentElement;
        var t = document.getElementsByClassName("task")[2];
        document.getElementsByClassName("task")[2].insertBefore(l,t.firstChild); 
        document.getElementsByClassName("task")[2].classList.add("hidden");     
        // click vào mid2-1(task-check) chuyển opacity làm mờ.
        e.stopPropagation();
        
    });
    document.getElementsByClassName("mid2-1")[1].children[1].addEventListener("click",function(e){
        // document.getElementsByClassName("task-checked")[1].style.display = "none";
        // document.getElementsByClassName("task-check")[1].style.display = "block";
        var item1 = this.parentElement.parentElement;
        var a = document.getElementsByClassName("task")[1];
        document.getElementsByClassName("task")[1].insertBefore(item1, a.firstChild);
        // var t1 = document.getElementsByClassName("task")[1];
        e.stopPropagation();
        // Chuyển ngược lại từ thanh có opacity lên trên trở thành thanh như cũ
    })
    // document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
    //     // document.getElementsByClassName("task")[1].removeChild(children[1]);
    //         var c = document.getElementsByClassName("mid2")[1];
    //         c.parentNode.removeChild(c);
    //         document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
    //         document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
        
    // })
    // document.getElementsByClassName("mid3")[0].addEventListener("click",function(){
    //     document.getElementsByClassName("task")[2].classList.toggle("hidden");
    // })
    // bat dau for c
    // var c = document.getElementsByClassName("mid2");
    // for(i=0; i<c.length; i++){
    //     // document.getElementsByClassName("mid2-2")[i].innerHTML;
    //     var titleaskcheck = document.getElementsByClassName("mid2-2")[i];
    //     var b = titleaskcheck.innerHTML;
    //     c[i].addEventListener("dblclick",function(){
    //         document.getElementsByClassName("main-right")[0].style.display = "block";
    //         document.getElementsByClassName("main-right")[0].style.display = "flex";
    //         var bg = document.getElementsByClassName("mid2");
    //         for(i =0 ; i<bg.length; i ++){
    //             bg[i].classList.remove("background");
                
    //         }
    //         this.classList.add("background");

    //         /*document.getElementsByClassName("main-right")[0].classList.remove("something3");*/
    //         // double Click để hiển thị main-right
    //     });
      
    //     //     this.parentElement.classList.add("hidden");
    //     //     // var itm = document.getElementsByClassName("mid2-2").value;
    //     //     var elm1 = document.getElementsByClassName("mid2")[1];
    //     //     var cln1 = elm1.cloneNode(true);
    //     //     // console.log(cln.children[1]);
           
    //     //     var d1 = document.getElementsByClassName("task")[2];
    //     //     document.getElementsByClassName("task")[2].insertBefore(cln1, d1.firstChild);
    //     //     document.getElementsByClassName("task")[2].classList.remove("hidden");

    //     // });
        
    //     // document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
    //     //     // document.getElementsByClassName("task")[1].removeChild(children[1]);
                
    //     //         c.parentNode.removeChild(c);
    //     //         document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
    //     //         document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
            
    //     // })
    //     document.getElementsByClassName("mid3")[0].addEventListener("click",function(){
    //         document.getElementsByClassName("task")[2].classList.remove("hidden");
    //     })
    //     c[i].addEventListener("click",function(){
    //         var content = this.children[1].innerHTML;
    //         document.getElementsByClassName("display-view")[0].innerHTML = content;
    //         // click vào mid2 chuyển nội dung sang main-right
    //         var bg = document.getElementsByClassName("mid2");
    //             for(i=0 ; i<bg.length; i++){
    //                 bg[i].classList.remove("background");
    //             }
    //             this.classList.add("background");
    //         // Click vào mid2 chuyển màu xanh
    //     });
    // //     var self;
    // //     var contextMenu1 = document.getElementsByClassName("isBottom")[0];
    // //     var r = document.getElementsByClassName("mid2");
    // //     for(var i =0; i<r.length;i++){
    // //     r[i].addEventListener("contextmenu",function(event){
    // //     // contextMenu2.style.display = "none";
    // //     contextMenu1.style.display = "block";
    // //     contextMenu1.style.left = event.clientX + 'px';
    // //     contextMenu1.style.top = event.clientY + 'px';
    // //     event.preventDefault();
    // //     // click vào chuột phải của mid2 thì hiện ra
    // //     contextMenu1.children[13].addEventListener("click",function(){
    // //     contextMenu1.style.display = "none";
    // //     document.getElementsByClassName("dialog-wrapper")[0].classList.add("something2");
    // //     document.getElementsByClassName("settings account")[0].classList.add("hidden");
    // //     document.getElementsByClassName("settings account")[0].classList.remove("flex");
    // //     document.getElementsByClassName("dialog confirm")[0].classList.remove("hidden");
    // //     document.getElementsByClassName("dialog listOptions")[0].classList.add("hidden");
    // //     // Khi click vào Delete-to-do của context-menu isBottom thì hiện ra
    // // })
    // //     self = this;
    // //     var text = self.children[1].innerHTML;
    // //     document.querySelector(".custom-context h3 span").innerHTML = text;
    // // document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
    // //     // document.getElementsByClassName("task")[1].removeChild(children[1]);
    // //         // var parent1 = document.getElementsByClassName("mid2")[1];
    // //         // parent1.parentNode.removeChild(self);
    // //         self.remove();
    // //         // self.removeChild(children[1]);
    // //         document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
    // //         document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
        
    // // })

    // //     });
    // // }
    //     document.getElementsByClassName("cancel full")[1].addEventListener("click",function(){
    //         document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
    //         document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
    //         // khi click vào Cancel thì thanh dialog confirm mất đi. thanh để xóa Delete-to-do
    //     })
    //     // document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
    //     //     // document.getElementsByClassName("task")[1].removeChild(children[1]);
            
            
    //     //     document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
    //     //     document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
            
    //     // })
    //     // document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
    //     //     var list = document.getElementsByClassName("task")[1].children;
    //     //     for(var i=0; i<list.length; i++){
    //     //         list[i].remove();
    //     //     }
    //     //     document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
    //     //     document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
            
    //     // })
    //     document.getElementsByClassName("isBottom")[0].addEventListener("click",function(e){
    //         e.stopPropagation();
    //     })
    //     var y = document.getElementsByClassName("context-menu isBottom")[0];
    //     document.getElementsByTagName("body")[0].addEventListener("click",function(event){
    //         if(event.target != y){
    //             document.getElementsByClassName("context-menu isBottom")[0].style.display= "none";
    //         }
    //     // khi click ra ngoài context-menu: mouse trái, phải, giữa.
    //     })
    //     // document.getElementsByClassName("task")[1].addEventListener("click",function(e){
    //     //     e.stopPropagation();
    //     // })
    //     // document.getElementsByClassName("task")[2].addEventListener("click",function(e){
    //     //     e.stopPropagation();
    //     // })
    // //     //bat dau
    // //     var self1;
    // // var contextMenu2 = document.getElementsByClassName("context-menu isBottomSubmenu")[0];
    // // var r1 = document.getElementsByClassName("task")[2];
    // //     // for(var i =0; i<r1.length; i++){
    // //     r1.addEventListener("contextmenu",function(event){
    // //     contextMenu1.style.display = "none";
    // //     contextMenu2.style.display = "block";
    // //     contextMenu2.style.left = event.clientX + 'px';
    // //     contextMenu2.style.top = event.clientY + 'px';
    // //     event.preventDefault();
    // //     // event.stopPropagation();
    // //     // var y = document.getElementsByClassName("context-menu isBottomSubmenu")[0];
    // //     // document.getElementsByName("body")[0].addEventListener("mousedown",function(event){
    // //     //     if(event.target != y){
    // //     //         document.getElementsByClassName("context-menu isBottomSubmenu")[0].style.display= "none";
    // //     //     }
    // //     // // khi click ra ngoài context-menu: mouse trái, phải, giữa.
    // //     // })
    // //     contextMenu2.children[6].addEventListener("click",function(){
    // //         contextMenu2.style.display = "none";
    // //         document.getElementsByClassName("dialog-wrapper")[0].classList.add("something2");
    // //         document.getElementsByClassName("settings account")[0].classList.add("hidden");
    // //         document.getElementsByClassName("settings account")[0].classList.remove("flex");
    // //         document.getElementsByClassName("dialog confirm")[0].classList.remove("hidden");
    // //         document.getElementsByClassName("dialog listOptions")[0].classList.add("hidden");
    // //     })
    // //     self1 = this;
    // //     var text = self1.children[1].innerHTML;
    // //     document.querySelector(".custom-context h3 span").innerHTML = text;
    // //     document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
    // //     // document.getElementsByClassName("task")[1].removeChild(children[1]);
    // //         // var parent1 = document.getElementsByClassName("mid2")[1];
    // //         // parent1.parentNode.removeChild(self);
    // //         self1.remove();
    // //         // self.removeChild(children[1]);
    // //         document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
    // //         document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
        
    // //     })
    // // })
    // // document.getElementsByClassName("isBottomSubmenu")[0].addEventListener("click",function(e){
    // //         e.stopPropagation();
    // //     })
    // // var y = document.getElementsByClassName("context-menu isBottomSubmenu")[0];
    // // document.getElementsByTagName("body")[0].addEventListener("mousedown",function(event){
    // //     if(event.target != y){
    // //         document.getElementsByClassName("context-menu isBottomSubmenu")[0].style.display= "none";
    // //     }
    // // // khi click ra ngoài context-menu: mouse trái, phải, giữa.
    // // })
    // // //ket thuc

    // //     var check= document.getElementsByClassName("mid2-1");
        
    // //     for(var i =0; i<check.length; i++){
    // //     check[i].addEventListener("click",function(){
    // //         document.getElementsByClassName("task-checked")[1].style.display = "block";
    // //         document.getElementsByClassName("task-check")[1].style.display = "none";
    // //         var l = document.getElementsByClassName("mid2")[0];
    // //         var t = document.getElementsByClassName("task")[2];
    // //         document.getElementsByClassName("task")[2].insertBefore(l,t.firstChild);      
    // //         // click vào mid2-1(task-check) chuyển opacity làm mờ.
    
            
    // //     })
    // // }
    // };
    // //keets thuc for c
    var contextMenu1 = document.getElementsByClassName("isBottom")[0];
    var r = document.getElementsByClassName("mid2");
    for(var i =0; i<r.length;i++){
        var titleaskcheck = document.getElementsByClassName("mid2-2")[i];
        var b = titleaskcheck.innerHTML;
        r[i].addEventListener("dblclick",function(){
            document.getElementsByClassName("main-right")[0].style.display = "block";
            document.getElementsByClassName("main-right")[0].style.display = "flex";
            var bg = document.getElementsByClassName("mid2");
            for(i =0 ; i<bg.length; i ++){
                bg[i].classList.remove("background");
                
            }
            this.classList.add("background");

            /*document.getElementsByClassName("main-right")[0].classList.remove("something3");*/
            // double Click để hiển thị main-right
        });
        r[i].addEventListener("click",function(){
            var content = this.children[1].innerHTML;
            document.getElementsByClassName("display-view")[0].innerHTML = content;
            // click vào mid2 chuyển nội dung sang main-right
            var bg = document.getElementsByClassName("mid2");
                for(i=0 ; i<bg.length; i++){
                    bg[i].classList.remove("background");
                }
                this.classList.add("background");
            // Click vào mid2 chuyển màu xanh
        });
        document.getElementsByClassName("cancel full")[1].addEventListener("click",function(){
            document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
            document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
            // khi click vào Cancel thì thanh dialog confirm mất đi. thanh để xóa Delete-to-do
        })
        document.getElementsByClassName("isBottom")[0].addEventListener("click",function(e){
            e.stopPropagation();
        })
        var y = document.getElementsByClassName("context-menu isBottom")[0];
        document.getElementsByTagName("body")[0].addEventListener("click",function(event){
            if(event.target != y){
                document.getElementsByClassName("context-menu isBottom")[0].style.display= "none";
            }
        // khi click ra ngoài context-menu: mouse trái, phải, giữa.
        })
    // var self;
    // var contextMenu1 = document.getElementsByClassName("isBottom")[0];
    // var r = document.getElementsByClassName("task")[1].children;
    // for(var i =0; i<r.length;i++){
    document.getElementsByClassName("task")[1].addEventListener("contextmenu",function(event){
        contextMenu2.style.display = "none";
        contextMenu1.style.display = "block";
        contextMenu1.style.left = event.clientX + 'px';
        contextMenu1.style.top = event.clientY + 'px';
        event.preventDefault();
    })
    r[i].addEventListener("contextmenu",function(event){
    contextMenu2.style.display = "none";
    contextMenu1.style.display = "block";
    contextMenu1.style.left = event.clientX + 'px';
    contextMenu1.style.top = event.clientY + 'px';
    event.preventDefault();
    // click vào chuột phải của mid2 thì hiện ra
    contextMenu1.children[13].addEventListener("click",function(){
    contextMenu1.style.display = "none";
    document.getElementsByClassName("dialog-wrapper")[0].classList.add("something2");
    document.getElementsByClassName("settings account")[0].classList.add("hidden");
    document.getElementsByClassName("settings account")[0].classList.remove("flex");
    document.getElementsByClassName("dialog confirm")[0].classList.remove("hidden");
    document.getElementsByClassName("dialog listOptions")[0].classList.add("hidden");
    // Khi click vào Delete-to-do của context-menu isBottom thì hiện ra
})
    self = this;
    var text = self.children[1].innerHTML;
    document.querySelector(".custom-context h3 span").innerHTML = text;
    document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
    // document.getElementsByClassName("task")[1].removeChild(children[1]);
        // var parent1 = document.getElementsByClassName("mid2")[1];
        // parent1.parentNode.removeChild(self);
        self.remove();
        // self.removeChild(children[1]);
        document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
        document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
    
})

    });
    document.getElementsByClassName("mid3")[0].addEventListener("click",function(){
        document.getElementsByClassName("task")[2].classList.remove("hidden");
    })
}   
    // document.getElementsByClassName("task")[1].addEventListener("click",function(e){
    //     e.stopPropagation();
    // })
    // document.getElementsByClassName("task")[2].addEventListener("click",function(e){
    //     e.stopPropagation();
    // })
    var contextMenu2 = document.getElementsByClassName("context-menu isBottomSubmenu")[0];
    var c1 = document.getElementsByClassName("mid2");
    for(var i =0; i<c1.length; i++){
        var titleaskcheck = document.getElementsByClassName("mid2-2")[i];
        var b = titleaskcheck.innerHTML;
        c1[i].addEventListener("dblclick",function(){
            document.getElementsByClassName("main-right")[0].style.display = "block";
            document.getElementsByClassName("main-right")[0].style.display = "flex";
            var bg = document.getElementsByClassName("mid2");
            for(i =0 ; i<bg.length; i ++){
                bg[i].classList.remove("background");
                
            }
            this.classList.add("background");

            /*document.getElementsByClassName("main-right")[0].classList.remove("something3");*/
            // double Click để hiển thị main-right
        });
        c1[i].addEventListener("click",function(){
            var content = this.children[1].innerHTML;
            document.getElementsByClassName("display-view")[0].innerHTML = content;
            // click vào mid2 chuyển nội dung sang main-right
            var bg = document.getElementsByClassName("mid2");
                for(i=0 ; i<bg.length; i++){
                    bg[i].classList.remove("background");
                }
                this.classList.add("background");
            // Click vào mid2 chuyển màu xanh
        });
        document.getElementsByClassName("cancel full")[1].addEventListener("click",function(){
            document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
            document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
            // khi click vào Cancel thì thanh dialog confirm mất đi. thanh để xóa Delete-to-do
        })
        document.getElementsByClassName("mid3")[0].addEventListener("click",function(){
            document.getElementsByClassName("task")[2].classList.remove("hidden");
        })
          //bat dau
        // var self1;
        document.getElementsByClassName("task")[2].addEventListener("click",function(event){
            contextMenu1.style.display = "none";
            contextMenu2.style.display = "block";
            contextMenu2.style.left = event.clientX + 'px';
            contextMenu2.style.top = event.clientY + 'px';
            event.preventDefault();
        })
            c1[i].addEventListener("contextmenu",function(event){
            contextMenu1.style.display = "none";
            contextMenu2.style.display = "block";
            contextMenu2.style.left = event.clientX + 'px';
            contextMenu2.style.top = event.clientY + 'px';
            event.preventDefault();
            // event.stopPropagation();
            // var y = document.getElementsByClassName("context-menu isBottomSubmenu")[0];
            // document.getElementsByName("body")[0].addEventListener("mousedown",function(event){
            //     if(event.target != y){
            //         document.getElementsByClassName("context-menu isBottomSubmenu")[0].style.display= "none";
            //     }
            // // khi click ra ngoài context-menu: mouse trái, phải, giữa.
            // })
            contextMenu2.children[6].addEventListener("click",function(){
                contextMenu2.style.display = "none";
                document.getElementsByClassName("dialog-wrapper")[0].classList.add("something2");
                document.getElementsByClassName("settings account")[0].classList.add("hidden");
                document.getElementsByClassName("settings account")[0].classList.remove("flex");
                document.getElementsByClassName("dialog confirm")[0].classList.remove("hidden");
                document.getElementsByClassName("dialog listOptions")[0].classList.add("hidden");
            })
            self1 = this;
            var text = self1.children[1].innerHTML;
            document.querySelector(".custom-context h3 span").innerHTML = text;
            document.getElementsByClassName("submit full blue")[1].addEventListener("click",function(){
            // document.getElementsByClassName("task")[1].removeChild(children[1]);
                // var parent1 = document.getElementsByClassName("mid2")[1];
                // parent1.parentNode.removeChild(self);
                self1.remove();
                // self.removeChild(children[1]);
                document.getElementsByClassName("dialog-wrapper")[0].classList.remove("something2");
                document.getElementsByClassName("dialog confirm")[0].classList.add("hidden");
            
            })
        })
        
        document.getElementsByClassName("isBottomSubmenu")[0].addEventListener("click",function(e){
                e.stopPropagation();
            })
        var y1 = document.getElementsByClassName("context-menu isBottomSubmenu")[0];
        document.getElementsByTagName("body")[0].addEventListener("click",function(event){
            if(event.target != y1){
                document.getElementsByClassName("context-menu isBottomSubmenu")[0].style.display= "none";
            }
        // khi click ra ngoài context-menu: mouse trái, phải, giữa.
        })
        //ket thuc
     
    }  

    
    // var students = [];
    // function interView(){
    //     var html = '';
    //     for( var i=0; i<students.length; i++){
    //         var student = students[i];
    //         html += '<div class="mid2">';
    //         html += '<span class="mid2-1">';
    //         html += '<svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>';
    //         html += '</span>';
    //         html += '<span class=""mid2-2>' + student + '</span>';
    //         html += '<span class="mid2-3">';
    //         html += '<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>';
    //         html += '</span>';
    //         html += '</div>';
    //     }
    //     var student_element = document.getElementsByClassName("task")[0];   
    //     student_element.innerHTML = html;
    // }
    // document.querySelector(".text1 input").addEventListener("keydown",function(event){
    //     var x = event.keyCode;
    //     if(x==13){
    //         var student = document.querySelector(".text1 input").value;
    //         students.push(student);
    //         students.reverse();
    //         interView();
    //     }
    // })
    
    /*var contextMenu1 = document.getElementsByClassName("menu2");
    for(i=0; i<contextMenu1.length; i++){
        document.getElementsByClassName("mid2-2")[i].innerHTML;
        contextMenu1[i].addEventListener("dblclick",function(){
            var content = this.children[i].innerHTML;
            
        })
    }*/
    // document.querySelectorAll("li.list-menu3")[0].addEventListener("click",function(){
    //     document.getElementsByClassName("tabs-1")[0].classList.add("something3");
    //     document.getElementsByClassName("tabs-1")[1].classList.add("something2");
    // })
    // document.getElementsByClassName("tabs-li")[0].addEventListener("click",function(){
    //     document.getElementsByClassName("tabs-li")[0].classList.remove("something3");
    //     document.getElementsByClassName("tabs-li")[1].classList.remove("something2");
    // })

    // var c = document.getElementsByClassName("tabs-li");
    // var i;
    //     for(i =0 ; i<c.length;i++){
    //         c[i].addEventListener("click",function(event){
    //             if(event.target == c[i]){
    //                 var d = document.getElementsByClassName("tabs-1");
    //                 for(i=0; i<d.length;i++){
    //                     d[i].style.display = "block";
    //                 }
    //             }
                
    }
})
    


}