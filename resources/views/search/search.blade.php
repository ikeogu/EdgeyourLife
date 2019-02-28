@extends('layouts.app')

@section('content')

<section class="generic-banner elements-banner relative" style="padding-top:150px; padding-bottom:350px;">
			<div class="container">
				<div class="row  align-items-left justify-content-left">
					<div class="col-lg-9 col-sm-9 col-md-9">
						<div class="banner-content text-center">
							
							                           
                        <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                
                                <div class="input-group ">
                                    <div class="input-group md-form form-sm form-3 pl-0">
                                        <input class="form-control my-0 py-1 lime-border" type="text" placeholder=" Search for services" aria-label="Search" name="search" id="search">
                                            <div class="input-group-append">
                                                <span class="input-group-text lime lighten-2" id="basic-text1">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fa fa-search text-grey" aria-hidden="true"></i>
                                                    </button>
                                                </span>		
                                            </div>
                                    </div>
                                </div>		
                            </form>
                        </div> 
                        
                    
				    </div>
			    </div>
                <section class="row">
                   <div class="col-lg-6 col-md-6 col-sm-4">
                    <div id="show" class="col-lg-6 col-md-6 col-sm-4">
                    </div>
                   </div> 
                </section>

</section>

<script type="text/javascript">
    $('a').css({
        color:'#0000ff'
    });
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data : {'search':$value},
            success : function(data){
                $('#show').html(data);
            }
        });
    });
   function trackClick(link){
       $.post({
           url: '/api/track-click',
           data:{
               '_token':csrf_token,
               'link_target': $(link).attr('src')
           }
       });
   }
</script> 
<script type="text/javascript">
    $.ajaxSetup({ headers: {'csrftoken' : '{{ csrf_token()}}'}});
</script>       
@endsection


   