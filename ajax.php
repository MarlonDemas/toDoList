$("li").load("ajax.php", {index}, function(myObj){
                    var myArr = JSON.parse(myObj);

                    for(i=0; i < myArr.text.length; i++){
                        if(myArr.done[i]==0){
                            $("li").eq(i).text(myArr.text[i]).css("text-decoration","none");
                        } else {
                            $("li").eq(i).text(myArr.text[index]).css("text-decoration","line-through")
                        }
                    }
                });