$(document).ready(function(){
    $("#searcher").on("keyup", function(){
        if($(this).val().length > 3){
            $.ajax({
                url:'/search',
                data:{name:$(this).val()},
                type:'get',
            }).done(function(data){
                var providers = data.providers;
                console.log(providers);
                $('#search_results').html('');
                $('#search_results').append('<table class="table">');
                providers.map((providers,index,students)=>{
                    // $('#search_results').append("<p>"+student.first_name+" "+student.last_name+"</p>");
                     $('#search_results').append("<tr><td>"+student.first_name+' '+student.other_name+' '+student.last_name+"</td><td> <a class='btn btn-info' href='/transact/"+student.id+"'>pay</a></tr>");
                    
                });
                $('#search_results').append('</table>');
            });
        }
    });


});
