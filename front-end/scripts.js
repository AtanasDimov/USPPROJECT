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
})