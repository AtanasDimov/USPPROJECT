$(document).ready(function(){
    $trigger = $('.trigger');
    $addSection = $('.section-add-form');
    $removeSection = $('.section-remove-form');
    $results = $('.section-del-results');
    
    $trigger.on('click', function(e) {
        e.preventDefault();
        $trigger.children().fadeToggle();
        $addSection.slideToggle();
        $removeSection.slideToggle();
        $results.slideToggle();
    });
    
    $('.delete').on('click',function(e){
        e.preventDefault();
        let id = $(this).attr("id");
        
        console.log(id);
        $.ajax({
            url:"delete.php",
            type: "POST",
            data: {id: id},
            dataType: "html",
            success: function(respond){
                alert("Обявата е изтрита!");
                $(".section__results").html(respond);        
            }

        });
    });

    $('#sort').on('change', function(){
        let sortValue = $('#sort').val();
        console.log(sortValue);
        $.ajax({
            url: "showresult.php",
            method: "POST",
            data: { sortValue: sortValue},
            dataType: "html",
            success: function (sorted){
                $('.section__cols').html(sorted)
        }
        });
        });


    $('#submit-remove').on('click',function(e){
    e.preventDefault();
    let make = $('#make-delete').val();
    let model = $('#model-delete').val();



        $.ajax({
            url:"display-remove.php",
            type:"POST",
            data:{make:make,model:model},
            dataType: "html",
            success: function (result) {
                $('.section__results').html(result)
        }
    
        });
    });


    $('#submit-home').on('click',function(e){
        e.preventDefault();
        let makeFilter = $('#make').val();
        let modelFilter = $('#model').val();
        let chassisFilter = $('#chassis').val();
        let engineFilter = $('#engine').val();
        let gearboxFilter =$('#gearbox').val();
        let colorFilter =$('#color').val();
        let yearFromFilter =$('#year-from').val();
        let yearToFilter =$('#year-to').val();
        let priceFromFilter =$('#price-from').val();
        let priceToFilter =$('#price-to').val();
        let powerFromFilter =$('#power-from').val();
        let powerToFilter =$('#power-to').val();
        let submit_home = $('#submit-home').val();
            $.ajax({
                url:"showresult.php",
                type:"POST",
                data:{makeFilter:makeFilter,modelFilter:modelFilter,chassisFilter:chassisFilter,engineFilter:engineFilter,gearboxFilter:gearboxFilter,colorFilter:colorFilter,
                yearFromFilter:yearFromFilter,yearToFilter:yearToFilter,priceFromFilter:priceFromFilter,priceToFilter:priceToFilter,powerFromFilter:powerFromFilter,powerToFilter:powerToFilter, submit_home:submit_home},
                dataType:"html",
                success: function(filtered){
                    $('.section__cols').html(filtered)
                }

            });

    });
});