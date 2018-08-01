
       function addreq() 
       {
          var fio = $('input[name=fio]').val();
          var adress = $('input[name=adress]').val();
          var status = $('input[name=status]').val();
          var comm = $('textarea[name=comm]').val();
          // отправляем AJAX запрос
          $.ajax(
             {
                type: "POST",
                url: "http://neww.ua/ondone.php",
                data: {fio:fio,
                       adress:adress,
                       status:status,
                       comm:comm
                     },
                success: function(response) 
                {
                   if(response == true)
                   {
                      console.log(fio + " добавлен!");
                      //location.reload();
                   }
                   else
                   console.log("Ошибка в запросе! Сервер вернул вот что: " + response);
                }
             }
             );
       }
       function doneforreq() {
        var change = 1;
        var id = $('input[name=id]')
        $.ajax(
        {
          type: "POST",
          url: "http://neww.ua/ondone.php",
          data: {change:change},
          success: function (response)
          {
            if(response == true)
            {
              console.log("Done");
              //location.reload();
            }
            else
              console.log(response);
          }

        })
       }